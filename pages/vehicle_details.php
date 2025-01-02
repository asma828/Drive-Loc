<?php
include '../includes/autoloader.php';


$database = new Database();
$db = $database->getConnection();
$vehicleObj = new Vehicle($db);
$reviewObj = new Review($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ID not specified');
$vehicle = $vehicleObj->getVehicleById($id);

// Get reviews for this vehicle (you'll need to implement this)
$reviews = $reviewObj->getReviewsByVehicle($id);
$ratingInfo = $reviewObj->getAverageRating($id);?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($vehicle['name']) ?> - Drive & Loc</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@200;300;400;500;600&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        .heading-font {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-black text-white">
        <div class="container mx-auto px-8 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-16">
                    <a href="home.php" class="text-2xl font-light tracking-widest">
                        DRIVE & LOC
                    </a>
                    <div class="hidden md:flex space-x-8">
                        <a href="vehicles.php" class="text-sm tracking-wider text-gold">VÉHICULES</a>
                        <a href="affichereservation.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">RÉSERVER</a>
                        <a href="reviews.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">AVIS</a>
                    </div>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="logout.php" class="text-sm bg-white text-black px-6 py-2 hover:bg-gold transition-colors duration-300">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Vehicle Details Section -->
    <div class="container mx-auto px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column: Images -->
            <div class="space-y-6">
                <div class="bg-white p-2 rounded-lg shadow-lg">
                    <img src="<?= htmlspecialchars($vehicle['image']) ?>" 
                         alt="<?= htmlspecialchars($vehicle['name']) ?>"
                         class="w-full h-96 object-cover rounded">
                </div>
                <!-- You can add more images here in a grid -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white p-2 rounded-lg shadow">
                        <img src="<?= htmlspecialchars($vehicle['image']) ?>" 
                             class="w-full h-24 object-cover rounded cursor-pointer hover:opacity-75">
                    </div>
                    <!-- Add more thumbnail images -->
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="space-y-8">
                <div>
                    <h1 class="heading-font text-4xl mb-2"><?= htmlspecialchars($vehicle['name']) ?></h1>
                    <p class="text-xl text-gray-600"><?= htmlspecialchars($vehicle['model']) ?></p>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex items-center text-gold">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-600">(12 avis)</span>
                </div>

                <div class="bg-black text-white p-6 rounded-lg">
                    <div class="text-3xl font-light mb-2">
                        <?= number_format($vehicle['prix'], 2) ?>€ <span class="text-sm">/jour</span>
                    </div>
                    <p class="text-gray-400">Prix incluant l'assurance et l'assistance 24/7</p>
                </div>

                <!-- Vehicle Specifications -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <i class="fas fa-cog text-gold mb-2"></i>
                        <h3 class="font-semibold">Transmission</h3>
                        <p class="text-gray-600">Automatique</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <i class="fas fa-tachometer-alt text-gold mb-2"></i>
                        <h3 class="font-semibold">Puissance</h3>
                        <p class="text-gray-600">450 CV</p>
                    </div>
                    <!-- Add more specifications -->
                </div>

                <!-- Reservation Button -->
                <a href="reservation.php?vehicle=<?= $vehicle['id_vechicule'] ?>" 
                   class="block w-full bg-black text-white text-center py-4 rounded-lg hover:bg-gold transition-colors duration-300">
                    Réserver ce véhicule
                </a>
            </div>
        </div>

        <!-- Description Section -->
        <div class="mt-16">
            <h2 class="heading-font text-3xl mb-6">Description</h2>
            <div class="bg-white p-8 rounded-lg shadow">
                <p class="text-gray-600 leading-relaxed">
                    <?= htmlspecialchars($vehicle['description'] ?? 'Description détaillée du véhicule...') ?>
                </p>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-16">
            <h2 class="heading-font text-3xl mb-6">Avis Clients</h2>
            <div class="space-y-6">
                <?php foreach($reviews as $review): ?>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-semibold"><?= htmlspecialchars($review['user_name']) ?></h3>
                            <div class="flex items-center text-gold text-sm mt-1">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <i class="fas fa-star <?= $i <= $review['rating'] ? 'text-gold' : 'text-gray-300' ?>"></i>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <span class="text-gray-500 text-sm"><?= $review['created_at'] ?></span>
                    </div>
                    <p class="text-gray-600"><?= htmlspecialchars($review['comment']) ?></p>
                </div>
                <?php endforeach; ?>

                <!-- Add Review Button -->
                <a href="add_review.php?vehicle=<?= $vehicle['id_vechicule'] ?>" 
                   class="inline-block bg-black text-white px-8 py-3 rounded-lg hover:bg-gold transition-colors duration-300">
                    Ajouter un avis
                </a>
            </div>
        </div>

        <!-- Similar Vehicles -->
        <div class="mt-16">
            <h2 class="heading-font text-3xl mb-6">Véhicules Similaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Add similar vehicles here -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white py-16">
        <!-- Add your footer content here -->
    </footer>
</body>
</html>