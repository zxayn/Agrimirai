<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pembelian | Agrimirai</title>
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
  max-height: 38vh;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 8px 32px rgba(25, 115, 93, 0.18), 0 1.5px 6px rgba(0,0,0,0.08);
  margin-top: -3.5rem; /* geser foto ke atas */
}

.carousel-item img {
  height: 38vh;
  width: 100%;
  object-fit: cover;
  object-position: center;
  filter: brightness(0.92) saturate(1.1) contrast(1.08);
  border-radius: 18px;
  transition: filter 0.3s;
}

.carousel-item img:hover {
  filter: brightness(1) saturate(1.2) contrast(1.12);
}

.carousel-caption.blur-box {
  background: rgba(25, 115, 93, 0.55);
  backdrop-filter: blur(8px) saturate(1.2);
  -webkit-backdrop-filter: blur(8px) saturate(1.2);
  padding: 1.2rem 2.5rem;
  border-radius: 14px;
  display: inline-block;
  box-shadow: 0 2px 12px rgba(25,115,93,0.13);
  color: #fff !important;
  left: 50%;
  transform: translateX(-50%);
  bottom: 2.2rem;
}

.carousel-caption.blur-box h5 {
  font-size: 2.2rem;
  font-weight: 700;
  letter-spacing: 0.03em;
  margin-bottom: 0.5rem;
  color: #fff;
  text-shadow: 0 2px 8px rgba(0,0,0,0.18);
}

.carousel-caption.blur-box p {
  font-size: 1.3rem;
  font-weight: 400;
  margin-bottom: 0;
  color: #e0f7ef;
  text-shadow: 0 1px 4px rgba(0,0,0,0.13);
}

.footer {
  padding-top: 10rem; /* Tambah jarak atas footer */
  padding-bottom: 2rem;
  margin-top: 10rem; /* Tambah jarak antara produk section dan footer */
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



/* Produk Section */

.container .card {
  border: 2px solid #19735d;
  box-shadow: 0 8px 32px rgba(25, 115, 93, 0.13), 0 1.5px 6px rgba(0,0,0,0.08);
}
.card {
  border-radius: 15px;
  border: none;
  box-shadow: 0 8px 32px rgba(25, 115, 93, 0.13), 0 1.5px 6px rgba(0,0,0,0.08);
  background: #fff;
}

.card .row {
  align-items: center;
}

#mainProductImage {
  border-radius: 14px;
  box-shadow: 0 2px 12px rgba(25,115,93,0.10);
  object-fit: cover;
  width: 100%;
  height: 260px;
}

.thumb-img {
  border-radius: 8px;
  border: 2px solid #e0e0e0;
  transition: border-color 0.2s, box-shadow 0.2s;
  object-fit: cover;
  height: 60px;
  width: 60px;
}

.thumb-img:hover, .thumb-img.active {
  border-color: var(--main-color);
  box-shadow: 0 2px 8px rgba(25,115,93,0.13);
}

.card h4 {
  font-size: 2.3rem;
  font-weight: 500; /* ubah dari 700 ke 400 */
  color: #333;
  margin-bottom: 0.7rem;
}

.card h5.text-success {
  font-size: 2rem;
  font-weight: 400; /* ubah dari 600 ke 400 */
  margin-bottom: 1.2rem;
}

.card .text-muted {
  font-size: 1.4rem;
  margin-bottom: 1.2rem;
}

.card .form-control[type="number"] {
  font-size: 1.5rem;
  border-radius: 8px;
  border: 1px solid #d0d0d0;
  padding: 0.5rem 1rem;
  width: 70px;
}

.card .btn-success {
  background: var(--main-color);
  border: none;
  border-radius: 2rem;
  font-size: 1.5rem;
  padding: 0.7rem 2.5rem;
  transition: background 0.2s;
}

.card .btn-success:hover {
  background: #145c4a;
}

.nav-tabs {
  border-bottom: 2px solid #e0e0e0;
  margin-top: 1.5rem;
}

.nav-tabs .nav-link {
  font-size: 1.4rem;
  color: var(--main-color);
  border: none;
  border-radius: 0;
  background: none;
  margin-right: 1rem;
  padding: 0.7rem 1.5rem;
  transition: color 0.2s, background 0.2s;
}

.nav-tabs .nav-link.active {
  color: #fff;
  background: var(--main-color);
  border-radius: 1.5rem 1.5rem 0 0;
}

.tab-content {
  font-size: 1.3rem;
  color: #444;
  background: #f9f9f9;
  border-radius: 0 0 1.5rem 1.5rem;
  padding: 1.5rem 1rem 1rem 1rem;
  margin-bottom: 0.5rem;
  min-height: 90px;
}




@media (max-width: 768px) {
  #mainProductImage {
    height: 180px;
  }
  .tab-content {
    font-size: 1.2rem;
    padding: 1rem 0.5rem 0.5rem 0.5rem;
  }
  .card h4 {
    font-size: 1.7rem;
  }
  .card h5.text-success {
    font-size: 1.4rem;
  }
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
    <a href="index.php">Home</a>
    <a href="index.php">About</a>
    <a href="index.php">Products</a>
  </nav>

  <div class="icons">

    <a href="contactus.php" class="fas fa-user"></a>
    <a href="produk.php" class="fas fa-shopping-cart"></a>

  </div>

</header>

<!-- header akhir  -->

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

    <!-- Produk Section -->
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm">
            <div class="row g-0">
              <div class="col-md-5 p-3">
                <!-- Gambar Utama -->
                <img id="mainProductImage" src="pdk/wortel.jpg" class="img-fluid rounded w-100" alt="Salad" />

                <!-- Thumbnails -->
                <div class="d-flex justify-content-center mt-3">
                  <img src="pdk/wortel2.jpg" class="img-thumbnail mx-1 thumb-img" width="60" style="cursor: pointer" />
                  <img src="pdk/wortel3.jpg" class="img-thumbnail mx-1 thumb-img" width="60" style="cursor: pointer" />
                  <img src="pdk/wortel1.jpg" class="img-thumbnail mx-1 thumb-img" width="60" style="cursor: pointer" />
                </div>
              </div>

              <div class="col-md-7 p-4">
                <h4>Wortel</h4>
                <h5 class="text-success">Rp 11.000</h5>
                <p class="text-muted">
                  Wortel Segar AgriMirai, dipanen langsung dari kebun petani mitra kami di Dermo, Kota Kediri. Dengan warna oranye cerah, tekstur renyah, dan rasa manis alami, wortel kami adalah sumber Vitamin A (Beta-Karoten) yang sangat
                  baik untuk kesehatan mata, kulit, dan imunitas.
                </p>
                <div class="d-flex mb-3">
                  <input type="number" class="form-control w-25 me-2" value="1" min="1" />
                  <button class="btn btn-success">Add to Cart</button>
                </div>

                <!-- Tabs -->
                <ul class="nav nav-tabs" id="productTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Additional Info</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab">Reviews (0)</button>
                  </li>
                </ul>
                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active" id="desc" role="tabpanel">
                    Wortel pilihan dari kebun mitra AgriMirai di Dermo, Kota Kediri. Warna oranye cerah, tekstur renyah, dan rasa manis alami menjadi ciri khasnya. Kaya akan Beta-Karoten (provitamin A) yang baik untuk kesehatan mata, kulit,
                    dan imunitas. Wortel ini ideal untuk jus, sup, salad, atau camilan sehat Anda.
                  </div>
                  <div class="tab-pane fade" id="info" role="tabpanel">
                    <p><strong>Informasi Produk Wortel AgriMirai:</strong></p>
                    <ul>
                      <li>Asal: Dermo, Kediri, Jawa Timur</li>
                      <li>Berat: Tersedia dalam kemasan 500g dan 1kg</li>
                      <li>Kondisi: Segar, siap konsumsi</li>
                      <li>Penyimpanan: Sebaiknya disimpan di lemari es untuk menjaga kesegaran.</li>
                      <li>Sertifikasi: Bebas Pestisida</li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="review" role="tabpanel">No reviews yet.</div>
                </div>
              </div>
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

    <!-- Script untuk ubah gambar -->
    <script>
      const mainImage = document.getElementById("mainProductImage");
      const thumbnails = document.querySelectorAll(".thumb-img");

      thumbnails.forEach((thumb) => {
        thumb.addEventListener("click", () => {
          mainImage.src = thumb.src;
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
