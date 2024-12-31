<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche 911 GT3 - Drive & Loc</title>
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
        
        .gallery-thumbnail {
            transition: all 0.3s ease;
        }
        
        .gallery-thumbnail:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }

        .feature-icon {
            font-size: 24px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation (same as previous pages) -->
    <nav class="bg-black text-white">
        <div class="container mx-auto px-8 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-16">
                    <a href="home.php" class="text-2xl font-light tracking-widest">
                        DRIVE & LOC
                    </a>
                    <div class="hidden md:flex space-x-8">
                        <a href="vehicles.php" class="text-sm tracking-wider text-gold">VÉHICULES</a>
                        <a href="reservation.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">RÉSERVER</a>
                        <a href="reviews.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">AVIS</a>
                    </div>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="login.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">CONNEXION</a>
                    <a href="register.php" class="text-sm bg-white text-black px-6 py-2 hover:bg-gold transition-colors duration-300">INSCRIPTION</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Vehicle Details Section -->
    <div class="container mx-auto px-8 py-12">
        <!-- Breadcrumb -->
        <div class="mb-8">
            <nav class="text-sm">
                <a href="home.php" class="text-gray-600 hover:text-black">Accueil</a>
                <span class="mx-2">/</span>
                <a href="vehicles.php" class="text-gray-600 hover:text-black">Véhicules</a>
                <span class="mx-2">/</span>
                <span class="text-black">Porsche 911 GT3</span>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column - Images -->
            <div>
                <div class="mb-6">
                    <img src="../assets/images/car.jpg" alt="Porsche 911 GT3" class="w-full h-96 object-cover rounded-lg">
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <img src="../assets/images/car.jpg" alt="Gallery 1" class="w-full h-24 object-cover rounded-lg gallery-thumbnail cursor-pointer">
                    <img src="../assets/images/car.jpg" alt="Gallery 2" class="w-full h-24 object-cover rounded-lg gallery-thumbnail cursor-pointer">
                    <img src="../assets/images/car.jpg" alt="Gallery 3" class="w-full h-24 object-cover rounded-lg gallery-thumbnail cursor-pointer">
                    <img src="../assets/images/car.jpg" alt="Gallery 4" class="w-full h-24 object-cover rounded-lg gallery-thumbnail cursor-pointer">
                </div>
            </div>

            <!-- Right Column - Details -->
            <div>
                <h1 class="heading-font text-4xl mb-4">Porsche 911 GT3</h1>
                <div class="flex items-center mb-6">
                    <div class="flex items-center text-gold">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="ml-2 text-gray-600">(4.8/5 - 12 avis)</span>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
                    <div class="text-3xl font-light mb-2">1200€ <span class="text-base text-gray-600">/jour</span></div>
                    <p class="text-gray-600 mb-6">Prix incluant l'assurance et l'assistance 24/7</p>
                    
                    <!-- Booking Form -->
                    <form class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-2">Date de début</label>
                                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Date de fin</label>
                                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Lieu de prise en charge</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                                <option>Paris - Avenue des Champs-Élysées</option>
                                <option>Paris - Aéroport Charles de Gaulle</option>
                                <option>Nice - Aéroport</option>
                            </select>
                        </div>

                        <button class="w-full bg-black text-white py-3 rounded-lg hover:bg-gold transition-colors duration-300">
                            Réserver maintenant
                        </button>
                    </form>
                </div>

                <!-- Vehicle Specifications -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
                    <h2 class="text-xl font-semibold mb-6">Caractéristiques</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                        <div>
                            <i class="fas fa-tachometer-alt feature-icon"></i>
                            <div class="text-sm font-medium">Puissance</div>
                            <div class="text-gray-600">510 ch</div>
                        </div>
                        <div>
                            <i class="fas fa-clock feature-icon"></i>
                            <div class="text-sm font-medium">0 à 100 km/h</div>
                            <div class="text-gray-600">3.4 sec</div>
                        </div>
                        <div>
                            <i class="fas fa-gas-pump feature-icon"></i>
                            <div class="text-sm font-medium">Carburant</div>
                            <div class="text-gray-600">Essence</div>
                        </div>
                        <div>
                            <i class="fas fa-cog feature-icon"></i>
                            <div class="text-sm font-medium">Transmission</div>
                            <div class="text-gray-600">Automatique</div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
                    <h2 class="text-xl font-semibold mb-4">Description</h2>
                    <p class="text-gray-600 leading-relaxed">
                        La Porsche 911 GT3 représente l'excellence en matière de performance automobile. Avec son moteur atmosphérique de 4.0L développant 510 chevaux, elle offre des sensations de conduite incomparables. Son châssis affûté et sa tenue de route exceptionnelle en font une voiture de sport idéale pour les passionnés exigeants.
                    </p>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <section class="mt-16">
            <h2 class="heading-font text-3xl mb-8">Avis des Clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Review Card -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h3 class="font-medium">Jean Dupont</h3>
                            <div class="flex text-gold text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">Une expérience inoubliable! La voiture est exceptionnelle et le service est impeccable. Je recommande vivement.</p>
                    <div class="mt-4 text-sm text-gray-500">Il y a 2 semaines</div>
                </div>
                
                <!-- Add more review cards here -->
            </div>

            <!-- Add Review Button -->
            <div class="mt-8 text-center">
                <button class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gold transition-colors duration-300">
                    Ajouter un avis
                </button>
            </div>
        </section>
    </div>

    <!-- Footer (same as previous pages) -->
    <footer class="bg-black text-white py-16 mt-16">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h4 class="text-2xl font-light mb-6">DRIVE & LOC</h4>
                    <p class="text-gray-400">L'excellence automobile à votre service.</p>
                </div>
                <div>
                    <h5 class="text-sm font-medium mb-4">NAVIGATION</h5>
                    <ul class="space-y-2">
                        <li><a href="vehicles.php" class="text-gray-400 hover:text-white">Véhicules</a></li>
                        <li><a href="reservation.php" class="text-gray-400 hover:text-white">Réservation</a></li>
                        <li><a href="reviews.php" class="text-gray-400 hover:text-white">Avis Clients</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-sm font-medium mb-4">CONTACT</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li>+33 1 23 45 67 89</li>
                        <li>contact@driveloc.com</li>
                        <li>75008 Paris, France</li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-sm font-medium mb-4">NEWSLETTER</h5>
                    <form class="space-y-4">
                        <input type="email" placeholder="Votre email" class="w-full bg-transparent border-b border-gray-700 py-2 focus:outline-none focus:border-white">
                        <button class="w-full bg-white text-black py-2 hover:bg-gold transition-colors duration-300">
                            S'INSCRIRE
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-16 pt-8 flex justify-between items-center">
                <p class="text-gray-400">© 2024 Drive & Loc. Tous droits réservés.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>