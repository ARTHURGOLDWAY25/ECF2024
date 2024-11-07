<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/gallery_styles.css">
    <title>Gallery</title>
     <!-- Favicon -->
     <link rel="icon" href="img/favicon.ico">

     <!-- Google Web Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
 
     <!-- Bootstrap Icons -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
     <!-- Owl Carousel CSS -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <!-- Custom Styles -->
 <link href="./css/styles_index.css" rel="stylesheet">
     
</head>
<body>

    <!-- HEADER with collapsable menu -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="animal_kingdom_zoo">Safari Haven Zoo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="Home_Page" href="index.html" id="Home_Page">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">The Zoo</a>
                            <ul class="dropdown-menu dropdown-menu-zoo" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="conservation-efforts.html">Conservation Programs</a></li>
                                <li><a class="dropdown-item" href="educational.html">Educational Resources</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visitors Info</a>
                            <ul class="dropdown-menu dropdown_visitors" aria-labelledby="navbarDropdownMenuLink2">
                                <li><a class="dropdown-item" href="#">Hours of Operation</a></li>
                                <li><a class="dropdown-item" href="#">Map</a></li>
                                <li><a class="dropdown-item" href="#">Facilities</a></li>
                                <li><a class="dropdown-item" href="#">Accessibility</a></li>
                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="navbarDropdownMenuLink3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tickets</a>
                            <ul class="dropdown-menu dropdown_tickets" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a class="dropdown-item" href="#">Day Passes</a></li>
                                <li><a class="dropdown-item" href="#">Annual Memberships</a></li>
                                <li><a class="dropdown-item" href="#">Group Bookings</a></li>
                                <li><a class="dropdown-item" href="#">Special Discounts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="Gallery-Page">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Events
                            </a>
                            <ul class="dropdown-menu dropdown_events" aria-labelledby="navbarDropdownMenuLink4">
                                <li><a class="dropdown-item" href="./Visitor-Feedback/Visitor_Feedback-index.html">Visitor Feedback</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<!-- main container -->
<main>
    <div class="container">
        <h4>Meet Our Animals</h4>
        <!-- Row 1 -->
        <div class="row">
            <div class="multi-column-text">
                <img src="./images/gallery-lion.jpg" alt="gallery-lion" id="gallery-lion">
                <p>Experience the majesty of Panthera leos from Sub-Saharan Africa in our exclusive gallery, showcasing their strength, beauty, and social dynamics in the wild.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="lion">
                    <button type="submit" id="button" data-animal="lion">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/turtle.jpg" alt="" id="gallery-turtle">
                <p>Meet the Yellow-spotted Amazon River Turtle, known for its striking yellow spots and unique shell pattern. Found in the Amazon River basin, these turtles play a crucial role in their ecosystem, contributing to biodiversity and aquatic health.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="turtle">
                    <button type="submit" id="button" data-animal="turtle">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/elephant.jpg" alt="" id="gallery-elephant">
                <p>Discover the grandeur of the African Elephant, the largest land mammal, in our exhibit. Learn about their social behavior, intelligence, and the conservation efforts focused on preserving their habitats.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="elephant">
                    <button type="submit" id="button" data-animal="elephant">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/gallery-penguin.jpg" alt="" id="gallery-penguin">
                <p>Meet the African Penguin (Spheniscus demersus), native to the coasts of South Africa, Namibia, and Mozambique. Discover their unique behaviors and the conservation efforts to protect their dwindling populations.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="penguin">
                    <button type="submit" id="button" data-animal="penguin">Learn More</button>
                </form>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
            <div class="multi-column-text">
                <img src="./images/event-dolphin.jpg" alt="" id="gallery-dolphin">
                <p>Explore the world of dolphins, renowned for their intelligence, playful nature, and remarkable communication skills. Learn about their habitats, behaviors, and the conservation efforts to protect these incredible marine mammals.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="dolphin">
                    <button type="submit" id="button" data-animal="dolphin">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/gallery-buterfly.jpg" alt="" id="gallery-butterfly">
                <p>Discover the enchanting beauty of butterflies, known for their vibrant colors and delicate wings. Learn about their life cycle, habitats, and the vital role they play in pollination and maintaining biodiversity.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="butterfly">
                    <button type="submit" id="button" data-animal="butterfly">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/gallery-gorilla.jpg" alt="" id="gallery-gorilla">
                <p>Encounter the majestic African gorilla, known for its powerful build and gentle nature. Native to the dense forests of central Africa, gorillas are vital to their ecosystems, contributing to forest regeneration and biodiversity.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="gorilla">
                    <button type="submit" id="button" data-animal="gorilla">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/gallery-owl.jpg" alt="" id="gallery-owl">
                <p>Discover the enigmatic Bubo scandiacus, a majestic owl found in the northern regions of Russia, Fennoscandia, Canada, Alaska, Iceland, Greenland, and northern Asia. Known for its striking white plumage and silent flight, this owl is a master of nocturnal hunting.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="owl">
                    <button type="submit" id="button" data-animal="owl">Learn More</button>
                </form>
            </div>
        </div>

        <!-- Row 3 -->
        <div class="row">
            <div class="multi-column-text">
                <img src="./images/snake.jpg" alt="" id="gallery-snake">
                <p>Meet the Python sebae, a fascinating snake native to Sub-Saharan Africa. Known for its impressive size and distinctive patterns, this python is a powerful constrictor and a key species in its ecosystem.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="snake">
                    <button type="submit" id="button" data-animal="snake">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/giraffe.jpg" alt="" id="gallery-giraffe">
                <p>Discover the Giraffa camelopardalis, an iconic animal of Sub-Saharan Africa. Renowned for its long neck and legs, the giraffe is a gentle giant, gracefully browsing treetops and contributing to the savanna's ecological balance.</p>
                <form action="../MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="giraffe">
                    <button type="submit" id="button" data-animal="giraffe">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/leopard.jpg" alt="" id="gallery-leopard">
                <p>Meet the Panthera uncia, a magnificent leopard species found in Central Asia. Known for its stunning coat and stealthy nature, this elusive predator thrives in rugged terrains, playing a crucial role in maintaining ecological balance.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="leopard">
                    <button type="submit" id="button" data-animal="leopard">Learn More</button>
                </form>
            </div>

            <div class="multi-column-text">
                <img src="./images/zebra.jpg" alt="" id="gallery-zebra">
                <p>Discover the Equus grevyi, also known as Grevy's zebra, found in Kenya and Ethiopia. Distinguished by its narrow stripes and large ears, this unique zebra species plays a vital role in its ecosystem, contributing to the biodiversity of the region.</p>
                <form action="./MONGODB_SCHEMA/increment.php" method="post">
                    <input type="hidden" name="animal" value="zebra">
                    <button type="submit" id="button" data-animal="zebra">Learn More</button>
                </form>
            </div>
        </div>
    </div>
</main>



    
    <!-- footer -->
    <footer>
        <div class="footer_container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-section1">
                        <img src="./images/animal-kingdom.jpg" alt="" class="animal-kingdom">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-section2">
                        <h5 class="mt-5">Contact Us</h5>
                    <p class="mb-1">Email: contact@animalkingdomzoo.com</p>
                    <p class="mb-1">Phone: +1 (555) 123-4567</p>
                    <p class="mb-1">Address: 123 Zoo Lane, Animal City, AC 12345</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-section3">
                        <h5 class="mt-5">Opening Hours</h5>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 5:00 PM</p>
                        <p class="mb-1">Saturday - Sunday: 10:00 AM - 6:00 PM</p>
                        <p class="mb-1">Holidays: 10:00 AM - 4:00 PM</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-section4">
                        <h5 class="mt-5">Follow Us</h5>
                    <a href="https://www.facebook.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.twitter.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-text-center">
                        <div class="col text-center border-top mt-3 pt-3">
                            <p>&copy; 2024 Animal Kingdom Zoo. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


     <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Your Custom JS -->
    <script src="js/scripts.js"></script>


    <!-- custom ajax backend increment -->
     <script src="./AJAX_BACKEND/ajax_increment_backend.js"></script>
</body>
</html>