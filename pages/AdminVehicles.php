<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit();
}

if ($_SESSION['role'] != 2) {
    header('Location: home.php');
    exit();
}
include '../includes/autoloader.php';

$database = new Database();
$db = $database->getConnection();
$vechiculeObj= new Vehicle($db);
$afficheVechicule=$vechiculeObj->afficheVechicule();



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive & Loc - Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed w-64 h-full bg-black text-white p-6">
        <div class="mb-8">
            <h1 class="text-2xl font-light tracking-widest">DRIVE & LOC</h1>
            <p class="text-sm text-gray-400">Administration</p>
        </div>
        
        <nav class="space-y-2">
            <a href="admin.php" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-400 hover:bg-gray-800">
                <i class="fas fa-chart-bar"></i>
                <span>Dashboard</span>
            </a>
            <a href="AdminVehicles.php" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg bg-white text-black">
                <i class="fas fa-car"></i>
                <span>Véhicules</span>
            </a>
            <a href="Adminreservation.php" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-400 hover:bg-gray-800">
                <i class="fas fa-calendar"></i>
                <span>Réservations</span>
            </a>
            <a href="AdminReviews.php" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-400 hover:bg-gray-800">
                <i class="fas fa-star"></i>
                <span>Avis</span>
            </a>
        </nav>
    </div>

    <div class="flex">
        <!-- Main Content -->
        <div class="ml-64 flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-light">Gestion des Véhicules</h2>
                <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800">
                    <i class="fas fa-plus mr-2"></i>Ajouter en Masse
                </button>
            </div>

            <!-- Filters -->
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <select class="border rounded-lg px-4 py-2">
                        <option>Catégorie</option>
                    </select>
                    <select class="border rounded-lg px-4 py-2">
                        <option>Disponibilité</option>
                    </select>
                    <input type="text" placeholder="Rechercher..." class="border rounded-lg px-4 py-2">
                    <button class="bg-gray-800 text-white rounded-lg px-4 py-2">Filtrer</button>
                </div>
            </div>

            <!-- Vehicles Table -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Véhicule</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Catégorie</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Prix/Jour</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                        <?php foreach($afficheVechicule as $vechicule): ?>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="<?= htmlspecialchars($vechicule['image']) ?>" class="h-10 w-10 rounded-lg mr-3">
                                    <div>
                                        <div class="font-medium"><?= htmlspecialchars($vechicule['car']) ?></div>
                                        <div class="text-sm text-gray-500"><?= htmlspecialchars($vechicule['model']) ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><?= htmlspecialchars($vechicule['name']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($vechicule['prix']) ?>€</td>
                            <td class="px-6 py-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Disponible
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="deleteVehicule.php?id=<?php echo $vechicule['id_vechicule'] ?>" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </a>
                            <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </a>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">20</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        1
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        2
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>