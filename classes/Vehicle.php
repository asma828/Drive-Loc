<?php
class Vehicle {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getVehicles($page = 1, $limit = 8, $filters = []) {
        $offset = ($page - 1) * $limit;
        
        $query = "SELECT v.*, c.name as category_name, 
                  COALESCE(AVG(r.rating), 0) as average_rating
                  FROM vechicule v
                  LEFT JOIN categorie c ON v.categorie_id = c.id_categorie
                  LEFT JOIN reviews r ON v.id_vechicule = r.vehicle_id";

        $conditions = [];
        $params = [];

        if (!empty($filters['category'])) {
            $conditions[] = "v.categorie_id = :category";
            $params[':category'] = $filters['category'];
        }

        if (!empty($filters['search'])) {
            $conditions[] = "(v.name LIKE :search OR v.model LIKE :search)";
            $params[':search'] = "%" . $filters['search'] . "%";
        }

        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }

        $query .= " GROUP BY v.id_vechicule ORDER BY v.name ASC LIMIT :limit OFFSET :offset";

        $stmt = $this->conn->prepare($query);

        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalCount($filters = []) {
        $query = "SELECT COUNT(DISTINCT v.id_vechicule) as total FROM vechicule v";
        
        $conditions = [];
        $params = [];

        if (!empty($filters['category'])) {
            $conditions[] = "v.categorie_id = :category";
            $params[':category'] = $filters['category'];
        }

        if (!empty($filters['search'])) {
            $conditions[] = "(v.name LIKE :search OR v.model LIKE :search)";
            $params[':search'] = "%" . $filters['search'] . "%";
        }

        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }

        $stmt = $this->conn->prepare($query);
        foreach ($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }
    
    public function getVehicleById($id) {
        $query = "SELECT v.*, c.name as category_name
                  FROM vechicule v
                  LEFT JOIN categorie c ON v.categorie_id = c.id_categorie
                  WHERE v.id_vechicule = :id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>