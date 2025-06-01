<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="stylec.css"/>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: bold;">
            <img src="img/logo2.png" alt="Logo" width="33" height="33" class="d-inline-block align-text-top rounded-circle img-thumbnail">
            AgriMirai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio2.html">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Social & More</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.instagram.com/a.andi14">Instagram</a></li>
                            <li><a class="dropdown-item" href="Gallery.html">Gallery</a></li>
                        </ul>   
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
    <!-- NAVBAR END -->
     <!--Jumbotron-->
        <div class="hero">
            <div class="overlay"></div>
            <div class="hero-content">
                <h1>Contact Us</h1>
                <svg class="wave" viewBox="0 0 1440 100">
                <path fill="none" stroke="#ffffff" stroke-width="4"
                        d="M0,50 C360,0 1080,100 1440,50" />
                </svg>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            </div>
        </div>
    <!-- jumbotron end -->

    <!--FAQ-->
    <section id="faqu">
        <div class="container py-5">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6 ps-md-4 mb-5">
                    <h2 class="faq-title" style="font-weight: bold;">Frequently Asked<br>Questions</h2>
                    <p>Lorem ipsum dolor sit amet, cons ectetur adipis cing elit. Etiam ullam corper risus nec porttitor rhoncus. Etiam dolor arcu.</p>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                        How long does it take to create an article?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia...
                        </div>
                    </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How much does it cost for a consultation on SEO?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Consultation pricing depends on the package and service type.
                        </div>
                    </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        What payment methods are available?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        We accept credit cards, PayPal, and bank transfers.
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ end-->

    <!--Form-->
    <div class="container contact-section">
  <div class="row align-items-center">
    <!-- Info Section -->
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-start ps-md-5 mb-4">
      <h3 class="fw-bold">Ask Us Anything</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
      <div class="contact-info">
        <p><i class="fas fa-map-marker-alt "></i>918 Abner Road, Hudson</p>
        <p><i class="fas fa-envelope "></i>example@gmail.com</p>
        <p><i class="fas fa-phone"></i>+1234 097 890</p>
      </div>
    </div>

    <!-- Form Section -->
    <div class="col-md-6">
      <div class="contact-box">
        <form>
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <input type="email" class="form-control" placeholder="Email">
          <textarea class="form-control" rows="4" placeholder="Message"></textarea>
          <button type="submit" class="btn mt-2">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>  
    <!--Form End-->

    <!--Maps-->
    <section id="Maps">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7906.34056310714!2d111.99902469999999!3d-7.771760899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1748531069400!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--Maps end-->

    <!--Footer-->
    <footer class="footer">
  <div class="container">
    <div class="row text-white">
      <div class="col-md-3 mb-4">
        <h5><strong><i class="fas fa-circle me-2"></i>AgriMirai</strong></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
        <p class="contact-info"><i class="fas fa-map-marker-alt"></i> London Eye, London UK</p>
        <p class="contact-info"><i class="fas fa-phone"></i> (+78) 765 685</p>
        <p class="contact-info"><i class="fas fa-envelope"></i> mail@influenca.id</p>
      </div>
      <div class="col-md-3 mb-4">
        <h6>Navigation</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h6>Quick Link</h6>
        <ul class="list-unstyled">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#faqu">FAQs</a></li>
          <li><a href="#">Booking</a></li>
          <li><a href="#">Pages</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h6>Services</h6>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">404</a></li>
        </ul>
        <div class="social-icons mt-3">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 AgriMirai • All Rights Reserved
    </div>
  </div>
</footer>
    <!--Footer End-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>