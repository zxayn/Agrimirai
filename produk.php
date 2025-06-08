<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Produk | Agrimirai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png">

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
  padding: 2rem 9%;
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

<!-- header awal  -->

<header>

  <input type="checkbox"  name="" id="toggler">
  <label for="toggler" class="fas fa-bars"></label>

  <a href="index.php" class="logo">agrimirai<span>.</span></a>

  <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#products">Products</a>
  </nav>

  <div class="icons">

    <a href="contactus.php" class="fas fa-user"></a>
    <a href="produk.php" class="fas fa-shopping-cart"></a>

  </div>

</header>

<!-- header akhir  -->

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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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

    <!-- End Buah -->

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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
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
              <a href="buy.php" class="btn btn-primary mt-2">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- footer awal -->

  <section class="footer">

  <div class="box-container">

    <div class="box">
      <h3>Quick Link</h3>
      <a href="#home" >home</a>
      <a href="#about" >about</a>
      <a href="#products" >products</a>
    </div>

    <div class="box">
      <h3>Sosial Media</h3>
      <a href="https://www.instagram.com/zxayn12/"><i class="fab fa-instagram"></i> @zxayn12</a>
      <a href="https://github.com/zxayn"><i class="fab fa-github"></i> Jidan!!</a>
    </div>

    <div class="box">
      <h3>Have a Questions?</h3>
      <a href="#" ><i class="fas fa-map-marker-alt"></i> Kediri, East Java, Indonesia</a>
      <a href="https://mail.google.com/mail/u/1/#inbox?compose=DmwnWrRsqXpxvrLdZhkqmBcqHMCTgcrjDjnpgqWqbxqLXbTRtvGCWWzJlxMKjXrVKNSNlnhFckxl">
        <i class="far fa-envelope"></i> zidanxjr8@gmail.com
      </a>
    </div>

  </div>

    <div class="credit"> create by <span>Agrimirai web designer</span> | all rights reserved.</div>

  </section>
<!-- footer akhir -->


  

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
