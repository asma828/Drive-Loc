<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Drive & Loc</title>
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

        .step-active {
            background-color: black;
            color: white;
        }

        .step-completed {
            background-color: gold;
            color: white;
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
                        <a href="vehicles.php" class="text-sm tracking-wider hover:text-gold transition-colors duration-300">VÉHICULES</a>
                        <a href="reservation.php" class="text-sm tracking-wider text-gold">RÉSERVER</a>
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

    <!-- Header -->
    <header class="bg-black text-white py-20">
        <div class="container mx-auto px-8">
            <h1 class="heading-font text-5xl mb-6">Réservation</h1>
            <p class="text-xl font-light max-w-2xl">Complétez votre réservation en quelques étapes simples.</p>
        </div>
    </header>

    <!-- Reservation Steps -->
    <div class="container mx-auto px-8 -mt-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Progress Steps -->
            <div class="flex justify-between items-center mb-12">
                <div class="flex-1 flex items-center">
                    <div class="w-10 h-10 rounded-full step-active flex items-center justify-center">1</div>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </div>
                <div class="flex-1 flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">2</div>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </div>
                <div class="flex-1 flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">3</div>
                    <div class="flex-1 h-1 bg-gray-300 mx-4"></div>
                </div>
                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">4</div>
            </div>

            <!-- Step Labels -->
            <div class="grid grid-cols-4 gap-4 text-center mb-12 text-sm">
                <div class="font-medium">Dates et lieu</div>
                <div class="text-gray-500">Véhicule</div>
                <div class="text-gray-500">Options</div>
                <div class="text-gray-500">Paiement</div>
            </div>

            <!-- Step 1: Dates and Location -->
            <form class="space-y-8">
                <!-- Date Selection -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-medium mb-2">Date de début</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Date de fin</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                    </div>
                </div>

                <!-- Location Selection -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Lieu de prise en charge</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                            <option value="">Sélectionnez un lieu</option>
                            <option value="paris-center">Paris - Centre</option>
                            <option value="paris-cdg">Paris - Aéroport CDG</option>
                            <option value="paris-orly">Paris - Aéroport Orly</option>
                            <option value="nice">Nice - Aéroport</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">Lieu de retour</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                            <option value="">Sélectionnez un lieu</option>
                            <option value="paris-center">Paris - Centre</option>
                            <option value="paris-cdg">Paris - Aéroport CDG</option>
                            <option value="paris-orly">Paris - Aéroport Orly</option>
                            <option value="nice">Nice - Aéroport</option>
                        </select>
                    </div>
                </div>

                <!-- Summary Box -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="font-medium mb-4">Récapitulatif</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Durée de location:</span>
                            <span>-- jours</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Lieu de prise en charge:</span>
                            <span>--</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Lieu de retour:</span>
                            <span>--</span>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between pt-6">
                    <button type="button" class="px-6 py-2 border border-black text-black hover:bg-black hover:text-white transition-colors duration-300">
                        Retour
                    </button>
                    <button type="submit" class="px-6 py-2 bg-black text-white hover:bg-gold transition-colors duration-300">
                        Continuer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Additional Information -->
    <section class="container mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <i class="fas fa-shield-alt text-4xl mb-4"></i>
                <h3 class="text-xl font-medium mb-2">Assurance All-Risk incluse</h3>
                <p class="text-gray-600">Profitez d'une couverture complète pendant toute la durée de votre location.</p>
            </div>
            <div class="text-center">
                <i class="fas fa-clock text-4xl mb-4"></i>
                <h3 class="text-xl font-medium mb-2">Assistance 24/7</h3>
                <p class="text-gray-600">Notre équipe est disponible à tout moment pour vous assister.</p>
            </div>
            <div class="text-center">
                <i class="fas fa-hand-holding-heart text-4xl mb-4"></i>
                <h3 class="text-xl font-medium mb-2">Service Conciergerie</h3>
                <p class="text-gray-600">Un service personnalisé pour une expérience sur mesure.</p>
            </div>
        </div>
    </section>

    <!-- Footer (same as previous pages) -->
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