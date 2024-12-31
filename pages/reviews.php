<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis Clients - Drive & Loc</title>
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
        
        .review-card {
            transition: transform 0.3s ease;
        }
        
        .review-card:hover {
            transform: translateY(-5px);
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
                        <a href="vehicles.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">VÉHICULES</a>
                        <a href="reservation.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">RÉSERVER</a>
                        <a href="reviews.php" class="text-sm tracking-wider text-gold">AVIS</a>
                    </div>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="login.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">CONNEXION</a>
                    <a href="register.php" class="text-sm bg-white text-black px-6 py-2 hover:bg-gold transition-colors duration-300">INSCRIPTION</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-black text-white py-20">
        <div class="container mx-auto px-8 text-center">
            <h1 class="heading-font text-5xl mb-6">Avis de nos Clients</h1>
            <p class="text-xl font-light max-w-2xl mx-auto">Découvrez les expériences de nos clients avec Drive & Loc.</p>
            <div class="mt-8">
                <button class="bg-white text-black px-8 py-3 hover:bg-gold transition-colors duration-300">
                    LAISSER UN AVIS
                </button>
            </div>
        </div>
    </header>

    <!-- Reviews Section -->
    <div class="container mx-auto px-8 py-16">
        <!-- Stats Summary -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-16">
            <div class="bg-white p-6 rounded-lg text-center">
                <div class="text-4xl font-light mb-2">4.8/5</div>
                <div class="text-gray-600">Note moyenne</div>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <div class="text-4xl font-light mb-2">98%</div>
                <div class="text-gray-600">Clients satisfaits</div>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <div class="text-4xl font-light mb-2">1,200+</div>
                <div class="text-gray-600">Avis vérifiés</div>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <div class="text-4xl font-light mb-2">95%</div>
                <div class="text-gray-600">Recommandent</div>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white p-6 rounded-lg mb-12">
            <div class="flex flex-wrap gap-6">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                    <option value="">Tous les véhicules</option>
                    <option value="porsche">Porsche</option>
                    <option value="ferrari">Ferrari</option>
                    <option value="lamborghini">Lamborghini</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                    <option value="">Note</option>
                    <option value="5">5 étoiles</option>
                    <option value="4">4 étoiles et plus</option>
                    <option value="3">3 étoiles et plus</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                    <option value="">Période</option>
                    <option value="week">Cette semaine</option>
                    <option value="month">Ce mois</option>
                    <option value="year">Cette année</option>
                </select>
            </div>
        </div>

        <!-- Reviews Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Review Card -->
            <div class="bg-white p-6 rounded-lg shadow-sm review-card">
                <div class="flex items-center mb-6">
                    <img src="../assets/images/avatar.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                    <div class="ml-4">
                        <h3 class="font-medium">Thomas Martin</h3>
                        <div class="flex items-center text-gold text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="ml-2 text-gray-600">5.0</span>
                        </div>
                    </div>
                    <div class="ml-auto text-sm text-gray-500">Il y a 3 jours</div>
                </div>
                <div class="mb-4">
                    <div class="font-medium mb-2">Porsche 911 GT3 - Une expérience incroyable</div>
                    <p class="text-gray-600">Location pour un weekend. Service impeccable, voiture en parfait état et sensations de conduite exceptionnelles. Je recommande vivement!</p>
                </div>
                <div class="flex items-center text-sm text-gray-500">
                    <i class="fas fa-check-circle mr-2"></i>
                    Location vérifiée
                </div>
            </div>

            <!-- More Review Cards... -->
            <!-- You can duplicate the above card structure with different content -->
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <div class="flex space-x-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:bg-black hover:text-white transition-colors duration-300">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:bg-black hover:text-white transition-colors duration-300">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:bg-black hover:text-white transition-colors duration-300">3</a>
                <span class="w-10 h-10 flex items-center justify-center">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:bg-black hover:text-white transition-colors duration-300">10</a>
            </div>
        </div>
    </div>

    <!-- Leave Review Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 hidden">
        <div class="container mx-auto px-4 h-full flex items-center justify-center">
            <div class="bg-white rounded-lg p-8 max-w-2xl w-full">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-medium">Laisser un avis</h2>
                    <button class="text-gray-500 hover:text-black">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Véhicule loué</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                            <option value="">Sélectionnez un véhicule</option>
                            <option value="porsche">Porsche 911 GT3</option>
                            <option value="ferrari">Ferrari F8 Tributo</option>
                            <option value="lamborghini">Lamborghini Huracán</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Note</label>
                        <div class="flex space-x-2 text-2xl text-gold">
                            <i class="fas fa-star cursor-pointer"></i>
                            <i class="fas fa-star cursor-pointer"></i>
                            <i class="fas fa-star cursor-pointer"></i>
                            <i class="fas fa-star cursor-pointer"></i>
                            <i class="fas fa-star cursor-pointer"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Titre</label>
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black" placeholder="Un titre pour votre avis">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Votre avis</label>
                        <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black h-32" placeholder="Partagez votre expérience..."></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-black text-white px-8 py-3 rounded-lg hover:bg-gold transition-colors duration-300">
                            Publier l'avis
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white py-16">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h4 class="text-2xl font-light mb-6">DRIVE & LOC</h4>
                    <p class="text-gray-400">L'excellence automobile à votre service.</p>
                </div>
                <div>
                    <h5 class="text-sm font-medium mb-4">NAVIGATION</h5>
                    <ul class="space-y-2">
                        <li><a href="/vehicles.php" class="text-gray-400 hover:text-white">Véhicules</a></li>
                        <li><a href="/reservation.php" class="text-gray-400 hover:text-white">Réservation</a></li>
                        <li><a href="/reviews.php" class="text-gray-400 hover:text-white">Avis Clients</a></li>
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