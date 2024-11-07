<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Zoo Project</title>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Owl Carousel CSS -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 
     <!-- Bootstrap Icons CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 
    <!-- Custom CSS (load after Bootstrap to override styles) -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <!-- header -->
    <header class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Safari Heaven Zoo</a>
                <div class="text-white-wrapper">
                    <a href="https://www.facebook.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.twitter.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.instagram.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-linkedin"></i></a>       
                </div> 
            <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ><i class="fa-solid fa-ellipsis-vertical"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <nav class="navbar-nav ms-auto">
                    <ul class="navbar-nav" style="margin: 0; padding: 0;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">The Zoo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visitors Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.html">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- image between header and main container -->
     <div class="feedback">
        <h4>support us by providing user feedback</h4>
     </div>

     <main>
        <div class="container-fluid">
            <div class="row form-row">
                <h4>We are happy to receive your feedback on our Zoo.</h4>
                <div class="col-md-12">
                    <form class="user-feedback-form" action="./user-db.php" method="post">
                        <div class="user-rows mb-3">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" id="first-name" name="first-name" placeholder="First Name" class="form-control" required>
                        </div>
                        <div class="user-rows mb-3">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" id="last-name" name="last-name" placeholder="Last Name" class="form-control" required>
                        </div>
                        <div class="user-rows mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="user-rows mb-3">
                            <label for="textarea" class="form-label">Leave your suggestions below</label>
                            <textarea id="textarea" name="textarea" placeholder="Write your suggestions here..." rows="6" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
<!-- footer -->
<footer class="footer">
   <div class="row">
        <div class="col-md-3">
            <h3>safari heaven zoo</h3>
                <a href="https://www.facebook.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                <a href="https://www.twitter.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/animalkingdomzoo" class="text-white me-2"><i class="bi bi-linkedin"></i></a>  <br><br>     
            <p>VAT Registration Number: 286 1701 51</p>
            <p>Action for the Wild Charity Number: 1105621</p>
        </div>

        <div class="col-md-3 footer-list">
            <h6>Sitemap</h6>
                <ul class="footer-row">
                    <li><a href="">Home</a></li>
                    <li><a href="">Plan your visit</a></li>
                    <li><a href="">At the Zoo</a></li>
                    <li><a href="">What's on</a></li>
                    <li><a href="">Animal Experiences</a></li>
                    <li><a href="">About us</a></li>
              </ul>
        </div>

        <div class="col-md-3">
            <h6>Education</h6>
            <ul class="footer-row">
                <li><a href="">Nurseries, Schools & Colleges</a></li>
                <li><a href="">Learning Resources</a></li>
                <li><a href="">Home Education</a></li>
                <li><a href="">Educational Youth Groups</a></li>
                <li><a href="">Animal Experiences</a></li>
                <li><a href="">Education Outreach</a></li>
            </ul>
            
        </div>

        <div class="col-md-3">
            <h6>Terms & conditions</h6>
            <ul class="footer-row">
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Update Preferences</a></li>
            </ul>
            
       </div>
   </div>
   <div class="bottom-center-text">
        <p class="footer-bottom-elements">&copy; All copy rights reserved</p>
   </div>

</footer>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- Owl Carousel JS -->
<script src="./lib/owlcarousel/owl.carousel.min.js"></script>

<script>
    // JS to reload and empty fields
    window.onload = function() {
        document.querySelector('.user-feedback-form').reset();
        
    }
</script>

<script src="./js/reverse-navigate.js"></script>


</body>
</html>