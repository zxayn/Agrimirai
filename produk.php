<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrasi Petani - AgriMirai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <style>
      /* Carousel settings */
      .carousel-inner {
        max-height: 33vh;
        overflow: hidden;
      }

      .carousel-item img {
        height: 33vh;
        width: 100%;
        object-fit: cover;
        object-position: center;
      }

      /* Top Categories section */
      .category-section {
        background-color: #eaf8e5;
        padding: 2rem 0;
        text-align: center;
      }

      .category-item {
        display: inline-block;
        margin: 1rem;
      }

      .category-item img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 3px solid white;
        transition: transform 0.3s;
      }

      .category-item img:hover {
        transform: scale(1.05);
      }

      .category-item p {
        margin-top: 0.5rem;
        font-weight: 500;
        color: #2b5e3d;
      }

      body {
        padding-top: 50px; /* agar konten tidak tertutup navbar fixed-top */
      }

      .offer-badge {
        position: absolute;
        top: 0;
        left: 0;
        background-color: #28a745;
        color: white;
        padding: 4px 8px;
        font-size: 0.75rem;
        font-weight: bold;
        border-top-left-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
      }
      .product-card {
        position: relative;
        text-align: center;
      }
      .cart-icon {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        font-size: 1.2rem;
        color: #000;
      }

      .carousel-caption.blur-box {
        background-color: rgba(0, 0, 0, 0.4); /* hitam semi-transparan */
        backdrop-filter: blur(2px); /* efek blur */
        -webkit-backdrop-filter: blur(10px); /* untuk Safari */
        padding: 1rem 2rem;
        border-radius: 10px;
        display: inline-block;
      }

      .footer {
        background-color: #25937b;
        color: #ffffff;
        padding: 40px 60px 0;
        font-family: sans-serif;
      }

      .footer-top {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
        padding-bottom: 30px;
      }

      .footer-section {
        flex: 1 1 180px;
        margin: 10px 20px;
      }

      .footer-section h4 {
        font-weight: bold;
        margin-bottom: 15px;
      }

      .footer-section ul {
        list-style: none;
        padding: 0;
      }

      .footer-section ul li {
        margin-bottom: 10px;
      }

      .footer-section ul li a {
        color: #c5fbf8;
        text-decoration: none;
      }

      .footer-section ul li a:hover {
        color: green;
      }

      .footer .newsletter form {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .footer .newsletter input {
        padding: 8px;
        border-radius: 20px;
        border: 1px solid #ccc;
        flex-grow: 1;
      }

      .footer .newsletter button {
        background-color: #7ca64d;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 50%;
        cursor: pointer;
      }

      .footer-bottom {
        background-color: #222;
        color: white;
        text-align: center;
        padding: 15px 10px;
        margin-top: 20px;
      }

      .footer-bottom .payment-icons img {
        width: 30px;
        margin: 0 5px;
        vertical-align: middle;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(24, 117, 98)">
      <div class="container">
        <a class="navbar-brand" href="#">AgriMirai</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#galery">Our Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/caro1.jpg" class="d-block w-100" alt="Slide 1" />
          <div class="carousel-caption d-none d-md-block text-light blur-box">
            <h5>Fresh Food</h5>
            <p>We supply highly quality organic products</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/caro2.jpg" class="d-block w-100" alt="Slide 2" />
          <div class="carousel-caption d-none d-md-block text-light blur-box">
            <h5>Farm Fresh</h5>
            <p>Fruits & Vegetables Food 100% organic</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/caro3.jpg" class="d-block w-100" alt="Slide 3" />
          <div class="carousel-caption d-none d-md-block text-light blur-box">
            <h5>Organic Food</h5>
            <p>Looking for the fresh Organic Food</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Carousel -->

    <!-- Top Categories Section -->
    <div class="category-section">
      <h3 class="mb-4 fw-bold">Rekomendasi Produk</h3>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="category-item">
          <img src="img/buah.jpg" alt="Fruits" />
          <p>Buah</p>
        </div>
        <div class="category-item">
          <img src="img/sayur.png" alt="Vegetables" />
          <p>Sayur</p>
        </div>
        <div class="category-item">
          <img src="img/beras.jpg" alt="Drinks" />
          <p>Beras</p>
        </div>
        <div class="category-item">
          <img src="img/gandum.png" alt="Eggs" />
          <p>Gandum</p>
        </div>
        <div class="category-item">
          <img src="img/kacang.jpg" alt="Cake" />
          <p>Kacang</p>
        </div>
        <div class="category-item">
          <img src="img/pupuk.jpg" alt="Meats" />
          <p>Pupuk</p>
        </div>
      </div>
    </div>
    <!-- End Categoris -->

    <!-- Shop -->
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <!-- Card start -->
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/wortel.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Wortel</h6>
              <p class="card-text">Rp 11.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/tomat.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Tomat</h6>
              <p class="card-text">Rp 10.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/timun.jpeg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Timun</h6>
              <p class="card-text">Rp 15.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/terong.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Terong</h6>
              <p class="card-text">Rp 13.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/selada.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Selada</h6>
              <p class="card-text">Rp 20.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/kubis.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Kubis</h6>
              <p class="card-text">Rp 12.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/cabe.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Cabai</h6>
              <p class="card-text">Rp 53.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/kentang.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Kentang</h6>
              <p class="card-text">Rp 25.000 (kg)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Shop -->

    <!-- Gambar Buah-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/fruits.jpg" class="d-block w-100" />
          <div class="carousel-caption d-none d-md-block text-light blur-box">
            <h5>Fruits & Farm Products</h5>
            <p>We supply highly quality organic fruits & farm products</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pupuk -->

    <!-- Shop Buah -->
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <!-- Card Start -->
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/anggur.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Anggur</h6>
              <p class="card-text">Rp 60.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/stroberi.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Stroberi</h6>
              <p class="card-text">Rp 80.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/naga.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Buah Naga</h6>
              <p class="card-text">Rp 30.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/melon.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Melon</h6>
              <p class="card-text">Rp 20.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/jagung.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Jagung</h6>
              <p class="card-text">Rp 7000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="pdk/kacang.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Kacang Tanah</h6>
              <p class="card-text">Rp 28.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="img/beras.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Beras</h6>
              <p class="card-text">Rp 14.000 (kg)</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="img/gandum.png" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Gandum</h6>
              <p class="card-text">Rp 12.000 (kg)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Gambar Pupuk-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/fertilizati.jpg" class="d-block w-100" />
          <div class="carousel-caption d-none d-md-block text-light blur-box">
            <h5>Fertillizer</h5>
            <p>We supply highly quality organic fertillizer</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Pupuk -->

    <!-- Shop Pupuk -->
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <!-- Card start -->
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="ppk/10k.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Pupuk Organik Kohe 2L</h6>
              <p class="card-text">Rp 10.000</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="ppk/20k.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Pupuk Organik Cair Infarm</h6>
              <p class="card-text">Rp 20.000</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="ppk/42k.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Pupuk Penunjang Tunas 500ml</h6>
              <p class="card-text">Rp 42.000</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card product-card">
            <div class="offer-badge">ON OFFER</div>
            <div class="cart-icon">&#128722;</div>
            <img src="ppk/80k.jpg" class="card-img-top" alt="Fresh Onion" />
            <div class="card-body">
              <h6 class="card-title">Pupuk Padi POC Booster 1L</h6>
              <p class="card-text">Rp 80.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <footer class="footer">
      <div class="footer-top">
        <div class="footer-section brand">
          <h2><span style="color: rgb(163, 236, 212)">Organic</span></h2>
          <p><i class="fas fa-map-marker-alt"></i> Dermo, Kota Kediri, Jawa Timur</p>
          <p><i class="fas fa-phone"></i> 0856-0806-4055</p>
          <p><i class="fas fa-envelope"></i> zidanxjr8@gmail.com</p>
        </div>

        <div class="footer-section">
          <h4>SHOP</h4>
          <ul>
            <li><a href="#">Food</a></li>
            <li><a href="#">Farm</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="#">Organic</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>SUPPORT</h4>
          <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>

        <div class="footer-section">
          <h4>MY ACCOUNT</h4>
          <ul>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">My Cart</a></li>
            <li><a href="#">My Wishlist</a></li>
            <li><a href="#">Check Out</a></li>
          </ul>
        </div>

        <div class="footer-section newsletter">
          <h4>NEWSLETTER</h4>
          <p>Subscribe now to get daily updates</p>
          <form>
            <input type="email" placeholder="Your email" />
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>

      <div class="footer-bottom">
        <p>Copyright © 2025 Designed by AgriMirai Member All rights reserved.</p>
        <div class="payment-icons">
          <img src="visa.png" alt="Visa" />
          <img src="paypal.png" alt="PayPal" />
          <img src="mastercard.png" alt="MasterCard" />
        </div>
      </div>
    </footer>

    <!-- End Bottom -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
