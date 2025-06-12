<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Produk Olahan | Agrimirai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="shortcut icon" href="img/logo.png" />

<style>

:root {
  --main-color: #19735d;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: .2s linear;
}
  
html{
  font-size: 62.5%;
  scroll-behavior: smooth;
  scroll-padding-top: 6rem;
  overflow-x: hidden;
}

section {
  padding: 2rem 9%;
}

.btn {
  display: inline-block;
  margin-top: 1rem;
  border-radius: 5rem;
  background: var(--main-color);
  color: #fff;
  padding: .9rem 3.5rem;
  cursor: pointer;
  font-size: 1.5rem;
}

.btn :hover {
  background: var rgba(0, 0, 0, .1);
}

header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: var(--main-color);
  padding: 1.5rem 9%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
  box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

header .logo {
  flex: 1;
  text-align: left;
  font-size: 3rem;
  color: #fff;
  font-weight: bolder;
  border-bottom: none !important; /* Hapus garis bawah */
  text-decoration: none !important;
}

header .logo span {
  color: #fff;
}

header .navbar {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  border-top: none; /* Hapus garis atas/bawah */
  border-bottom: none;
  background: transparent;
  box-shadow: none;
}

header .navbar a {
  font-size: 2rem;
  padding: 0 1.5rem;
  color: #fff;
  border-bottom: none; /* Pastikan tidak ada underline */
  background: transparent;
  box-shadow: none;
  text-decoration: none;
}

header .navbar a:hover {
  color: #666;
  border-bottom: none;
  text-decoration: none;
}

header .icons {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

header .icons a {
  font-size: 2.5rem;
  color: #fff;
  margin-left: 1.5rem;
  border-bottom: none !important; /* Hapus garis bawah */
  text-decoration: none !important;
}

header .icons a:hover {
  color: #666;
  border-bottom: none;
  text-decoration: none;
}

header #toggler {
  display: none;
}

header .fa-bars {
  font-size: 3rem;
  color: #fff;
  border-radius: .5rem;
  padding: .5rem 1.5rem;
  cursor: pointer;
  border: .1rem solid rgba(0, 0, 0, .3);
  display: none;
}

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

      body {
        background-color: #ffffff;
        padding: 5rem 0;
      }

      .card {
        border: none;
        padding-top: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      .card-img-top {
        width: 100%;
        height: auto;
        max-height: 300px;
        object-fit: cover;
      }

      .badge-category {
        font-size: 0.75rem;
        font-weight: bold;
        background-color: #e0e0e0;
        color: #333;
        padding: 4px 8px;
        border-radius: 4px;
        text-transform: uppercase;
      }

      .rating {
        color: #ffc107;
      }

      .category-img {
        width: 100%;
        max-width: 120px;
        aspect-ratio: 1/1;
        object-fit: cover;
        border: 3px solid #eaeaea;
        transition: transform 0.3s ease;
      }

      .card-body {
        background-color: #e6e6e6;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
      }

      .category-img:hover {
        transform: scale(1.05);
      }

.footer {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.footer .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    align-items: flex-start;
    max-width: 1100px;
    margin: 0 auto;
}

.footer .box-container .box {
    flex: 1 1 250px;
    min-width: 220px;
    max-width: 320px;
    background: transparent;
    text-align: center;
}

.footer .box-container .box h3 {
    color: var(--main-color);
    font-size: 2.5rem;
    padding: 3rem 0;
    font-weight: bold;
    text-align: left;
}

.footer .box-container .box a {
    display: block;
    color: #666;
    font-size: 1.5rem;
    padding: .7rem 0;
    text-decoration: none;
    text-align: left;
}

.footer .box-container .box a:hover {
    color: var(--main-color);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    padding: 1.5rem;
    margin-top: 3.5rem;
    padding-top: 4rem;
    font-size: 1.8rem;
    color: #333;
    border-top: .1rem solid rgba(0,0,0,.1);
}

.footer .credit span {
    color: var(--main-color);
}
  










/* media yang dibutuhkan */

@media (max-width: 991px){
  html{
    font-size: 55%;
  }
  header{
    padding: 2rem;
  }
    section{
    padding: 2rem;
  }
    .home{
    background-position: left;
  }
}

@media (max-width: 768px){
  header {
    flex-wrap: wrap;
  }
  header .fa-bars{
    display: block;
    order: 0;
    margin-right: 1.5rem;
    margin-left: 0;
  }
  header .logo {
    flex: 3;
    order: 1;
    text-align: center;
    margin-left: 0;
    width: 100%;
    justify-content: center;
    display: flex;
  }
  header .navbar{
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: var(--main-color);
    border-top: .1rem solid rgba(0,0,0,.1);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    z-index: 999;
    max-height: 0;
    overflow: hidden;
    transition: max-height 1s cubic-bezier(0.4,0,0.2,1);
  }
  header #toggler:checked ~ .navbar {
    max-height: 500px;
    transition: max-height 1s cubic-bezier(0.4,0,0.2,1);
  }
  header .navbar a{
    margin: 1.5rem 0 1.5rem 2rem;
    padding: 1.5rem 0;
    background: transparent;
    border: none;
    display: block;
    width: 100%;
    text-align: left;
    color: #fff;
    border-radius: 0;
  }

  .home .content h3{
    font-size: 5rem;
  }

  .home .content span{
    font-size: 2.5rem;
  }

  header .icons {
    order: 2;
    width: 100%;
    justify-content: center;
    display: flex;
    flex-direction: row;
  }
  header input[type="checkbox"] {
    order: -1;
  }
  .icons-container .icons h3{
    font-size: 2rem;
  }

  .icons-container .icons span{
    font-size: 1.7rem;
  }
}

@media (max-width: 450px){
  html{
    font-size: 50%;
  }
  .heading{
    font-size: 3rem;
  }
}









</style>
</head>
<body>

<header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>

      <a href="index.php" class="logo">agrimirai<span>.</span></a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">About</a>
        <a href="index.php">Products</a>
      </nav>

      <div class="icons">
        <a href="contactus.php" class="fas fa-user"></a>
        <a href="produk.php" class="fas fa-shopping-cart"></a>
      </div>
    </header>

<!-- Carousel Otomatis -->
    <div id="carouselExampleDark2" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/caro1.jpg" class="d-block w-100" alt="Slide 1" />
        <div class="carousel-caption d-none d-md-block text-light blur-box">
        <h5>Fresh Food</h5>
        <p>We supply highly quality organic products</p>
        </div>
      </div>
      <div class="carousel-item">
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

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
    </div>
    <script>
      // Atur kecepatan carousel (misal: 5 detik per slide)
      document.addEventListener('DOMContentLoaded', function () {
      var myCarousel = document.querySelector('#carouselExampleDark2');
      if (myCarousel) {
        new bootstrap.Carousel(myCarousel, {
        interval: 7000, // 5000 ms = 5 detik
        ride: 'carousel',
        pause: false,
        wrap: true
        });
      }
      });
    </script>

<!-- End Carousel -->

<!-- Card -->
    <div class="container">
      <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card bg-white">
            <img src="ola/Tacos.jpg" class="card-img-top" alt="Salad" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Snack · Salad</span>
              <h5 class="card-title">Mexi Green Crunch Tacos</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 23, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card bg-white">
            <img src="ola/Wrap.jpg" class="card-img-top" alt="Cocktail" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Appetizer · Salad</span>
              <h5 class="card-title">Fresh Veggie Spring Wraps</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 10, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card bg-white">
            <img src="ola/Avocado.jpg" class="card-img-top" alt="Mushroom Chicken" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Appetizer · Light Lunc</span>
              <h5 class="card-title">Stuffed Avocado Delight</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 15, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section: Category Menu -->
    <div class="container my-5">
      <div class="row justify-content-center text-center g-4">
        <!-- Search Bar -->
        <div class="col-12">
          <div class="input-group mb-4">
            <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword to search" />
            <button class="btn btn-outline-secondary" type="button">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>

        <!-- Category Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
          <a href="#" class="text-decoration-none text-dark">Breakfast</a> / <a href="#" class="text-decoration-none text-dark">Sandwiches</a> / <a href="#" class="text-decoration-none text-dark">Pasta & Noodles</a> /
          <a href="#" class="text-decoration-none text-dark">Autumn</a>
        </div>

        <!-- Category Icons -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-4">
          <!-- Appetizer -->
          <div class="col text-center">
            <img src="ola/appetizer.jpg" class="rounded-circle img-fluid category-img" alt="Appetizer" />
            <div class="mt-2">Appetizer</div>
          </div>

          <!-- Bakery -->
          <div class="col text-center">
            <img src="ola/bread.jpg" class="rounded-circle img-fluid category-img" alt="Bakery" />
            <div class="mt-2">Bakery</div>
          </div>

          <!-- Brunch -->
          <div class="col text-center">
            <img src="ola/brunch.jpg" class="rounded-circle img-fluid category-img" alt="Brunch" />
            <div class="mt-2">Brunch</div>
          </div>

          <!-- Dinner -->
          <div class="col text-center">
            <img src="ola/dinner.jpg" class="rounded-circle img-fluid category-img" alt="Dinner" />
            <div class="mt-2">Dinner</div>
          </div>

          <!-- Salad -->
          <div class="col text-center">
            <img src="ola/salad.jpg" class="rounded-circle img-fluid category-img" alt="Salad" />
            <div class="mt-2">Salad</div>
          </div>

          <!-- Desserts -->
          <div class="col text-center">
            <img src="ola/dessert.jpg" class="rounded-circle img-fluid category-img" alt="Dessert" />
            <div class="mt-2">Desserts</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section: About Me -->
    <div class="container my-5 py-4 bg-light rounded">
      <div class="row align-items-center g-4">
        <!-- Text Column -->
        <div class="col-md-6">
          <h4 class="fw-bold">HI, WE ARE AGRIMIRAI</h4>
          <p class="text-uppercase text-muted mb-2">Welcome to my food blog.<br />I'm so excited you're here!</p>
          <p>
            I am a food stylist & photographer. Loves nature and healthy food, and good coffee. I am here to help you cook delicious and healthy food with easy to follow step by step tutorial. Don’t hesitate to come for say a small “hello”!
          </p>
          <a href="#" class="btn btn-warning text-white px-4 mt-2">MORE ABOUT ME</a>
        </div>

        <!-- Image Column Bottom-->
        <div class="col-md-6">
          <div class="row g-2">
            <div class="col-6">
              <img src="ola/food.jpg" alt="Food1" class="img-fluid rounded" />
            </div>
            <div class="col-6">
              <img src="ola/bowl.jpg" alt="Food2" class="img-fluid rounded" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <!-- Card 1 -->
        <div class="col-md-3">
          <div class="card bg-white">
            <img src="ola/rujak.jpg" class="card-img-top" alt="Salad" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Appetizer · Traditional Snack</span>
              <h5 class="card-title">Tropical Rujak Platter</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 23, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3">
          <div class="card bg-white">
            <img src="ola/saladbuah.jpg" class="card-img-top" alt="Cocktail" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Dessert · Salad</span>
              <h5 class="card-title">Creamy Fruit Medley</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 10, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
          <div class="card bg-white">
            <img src="ola/gado.jpg" class="card-img-top" alt="Mushroom Chicken" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Main Course · Salad</span>
              <h5 class="card-title">Gado-Gado Garden Bowl</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 15, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3">
          <div class="card bg-white">
            <img src="ola/sandwich.jpg" class="card-img-top" alt="Mushroom Chicken" />
            <div class="card-body text-center">
              <span class="badge-category mb-2 d-inline-block">Lunch · Snack</span>
              <h5 class="card-title">Classic Deli Sandwich</h5>
              <p class="card-text text-muted mb-1">By AgriMirai F&B · June 19, 2025</p>
              <div class="rating">★★★★★</div>
            </div>
          </div>
        </div>
  </div>

<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Link</h3>
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
    </div>

        <div class="box">
          <h3>Sosial Media</h3>
          <a href="https://www.instagram.com/zxayn12/"
            ><i class="fab fa-instagram"></i> @zxayn12</a
          >
          <a href="https://github.com/zxayn"
            ><i class="fab fa-github"></i> Jidan!!</a
          >
        </div>

      <div class="box">
          <h3>Have a Questions?</h3>
          <a href="#"
            ><i class="fas fa-map-marker-alt"></i> Kediri, East Java,
            Indonesia</a
          >
          <a
            href="https://mail.google.com/mail/u/1/#inbox?compose=DmwnWrRsqXpxvrLdZhkqmBcqHMCTgcrjDjnpgqWqbxqLXbTRtvGCWWzJlxMKjXrVKNSNlnhFckxl"
          >
            <i class="far fa-envelope"></i> zidanxjr8@gmail.com
          </a>
      </div>
    </div>

      <div class="credit">
        create by <span>Agrimirai web designer</span> | all rights reserved.
      </div>
    </section>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
