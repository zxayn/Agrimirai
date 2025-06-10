<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Musim Rekomendasi | AgriMirai</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="shortcut icon" href="img/logo.png" />

<style>

/* --- Global Styles --- */
:root {
  --main-color: #19735d;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: 0.2s linear;
}

html {
  font-size: 62.5%;
  scroll-behavior: smooth;
  scroll-padding-top: 6rem;
  overflow-x: hidden;
}

body {
  transition: background-color 0.5s, color 0.5s;
  padding-top: 70px;
  font-family: sans-serif;
  color: #000;
  font-size: 1.6rem;
}

/* --- Penyesuaian Padding Bagian Keseluruhan --- */

.btn {
  display: inline-block;
  margin-top: 1rem;
  border-radius: 5rem;
  background: var(--main-color);
  color: #fff;
  padding: 0.9rem 3.5rem;
  cursor: pointer;
  font-size: 1.5rem;
}

.btn:hover {
  background: rgba(0, 0, 0, 0.1);
}

/* --- Header Styles --- */
header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: var(--main-color);
  padding: 1.6rem 9%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

header .logo {
  flex: 1;
  text-align: left;
  font-size: 2.8rem;
  color: #fff;
  font-weight: bolder;
  border-bottom: none !important;
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
  border-top: none;
  border-bottom: none;
  background: transparent;
  box-shadow: none;
}

header .navbar a {
  font-size: 2rem;
  padding: 0 1.5rem;
  color: #fff;
  border-bottom: none;
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
  font-size: 2rem;
  color: #fff;
  margin-left: 1.5rem;
  border-bottom: none !important;
  text-decoration: none !important;
}

header .icons a:hover {
  color: #666;
  border-bottom: none;
  text-decoration: none;
}


header .icons .switch {
  margin: 0 1.5rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 55px;
}

header .icons .switch input {
  display: none;
}

header .icons .slider {
  width: 45px;
  height: 22px;
  background: gray;
  border-radius: 11px;
  position: relative;
  cursor: pointer;
}

header .icons .slider::before {
  content: "";
  position: absolute;
  width: 18px;
  height: 18px;
  background: white;
  border-radius: 50%;
  top: 2px;
  left: 2px;
  transition: 0.4s;
}

header .icons input:checked + .slider {
  background: #2196f3;
}

header .icons input:checked + .slider::before {
  transform: translateX(23px);
}

header #toggler {
  display: none;
}

header .fa-bars {
  font-size: 2.8rem;
  color: #fff;
  border-radius: 0.5rem;
  padding: 0.5rem 1.5rem;
  cursor: pointer;
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  display: none;
}

/* --- Content Font Size Adjustments --- */
.container h2 {
  font-size: 3rem;
  padding-top: 10rem;
  padding-bottom: 0rem;
}

.container p {
  font-size: 1.3rem;
}

.card-title {
  font-size: 2rem;
}

.card-text {
  font-size: 1.4rem;
}

.carousel-caption h5 {
  font-size: 2.3rem;
}

.carousel-caption p {
  font-size: 1.3rem;
}

/* --- Video Background --- */
.background-video {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1;
  overflow: hidden;
  background-size: cover;
  background-position: center;
  transition: opacity 0.5s ease-in-out;
  object-fit: cover;
}

.video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  z-index: -1;
}

.background-video.hidden {
  opacity: 0;
  pointer-events: none;
}

.background-video.visible {
  opacity: 1;
  pointer-events: all;
}

/* --- Carousel Settings --- */
.carousel-inner {
  max-height: 30vh;
  overflow: hidden;
}

.carousel-item img {
  height: 30vh;
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.carousel-caption.blur-box {
  background-color: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(10px);
  padding: 0.8rem 1.5rem;
  border-radius: 10px;
  display: inline-block;
}

/* --- Card Layout Enhancements --- */
.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  padding: 2rem 0;
  justify-content: center;
}

.card {
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  background: #fff;
  color: #333;
  display: flex;
  flex-direction: column;
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-body {
  padding-top: 2rem;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* --- Footer Styles --- */
.footer {
  padding-top: 15rem;
  padding-bottom: 3rem;
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
  font-size: 2.2rem;
  padding: 2.5rem 0;
  font-weight: bold;
  text-align: left;
}

.footer .box-container .box a {
  display: block;
  color: #fff;
  font-size: 1.4rem;
  padding: 0.7rem 0;
  text-decoration: none;
  text-align: left;
}

.footer .box-container .box a:hover {
  color: var(--main-color);
  text-decoration: underline;
}

.footer .credit {
  text-align: center;
  padding: 1.5rem;
  margin-top: 3rem;
  padding-top: 3.5rem;
  font-size: 1.6rem;
  color: #fff;
  border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
}

.footer .credit span {
  color: var(--main-color);
}

/* --- Media Queries --- */
@media (max-width: 991px) {
  html {
    font-size: 55%;
  }
  header {
    padding: 2rem;
  }
  section {
    padding: 3rem 2rem;
  }
  .home {
    background-position: left;
  }
}

@media (max-width: 768px) {
  header {
    flex-wrap: wrap;
  }
  header .fa-bars {
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
  header .navbar {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: var(--main-color);
    border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    z-index: 999;
    max-height: 0;
    overflow: hidden;
    transition: max-height 1s cubic-bezier(0.4, 0, 0.2, 1);
  }
  header #toggler:checked ~ .navbar {
    max-height: 500px;
    transition: max-height 1s cubic-bezier(0.4, 0, 0.2, 1);
  }
  header .navbar a {
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

  .home .content h3 {
    font-size: 5rem;
  }

  .home .content span {
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
  .icons-container .icons h3 {
    font-size: 2rem;
  }

  .icons-container .icons span {
    font-size: 1.7rem;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
  .heading {
    font-size: 3rem;
  }
  .card-container {
    grid-template-columns: 1fr;
  }
}




</style>

</head>

  <body id="body">
    <section
      id="welcome-section"
      class="d-flex align-items-center justify-content-center text-center text-light"
      style="
        min-height: calc(100vh - 70px);
        background-color: rgba(0, 0, 0, 0.5);
        position: relative;
        z-index: 1;
      "
    >
      <div>
        <h1 class="display-3 mb-4">Selamat Datang di AgriMirai! 🌱</h1>
        <p class="lead mb-5">
          Dapatkan rekomendasi tanaman terbaik sesuai musim di Indonesia.
        </p>
        <a href="#season-title" class="btn btn-lg btn-success">Learn More</a>
      </div>
    </section>

    <video
      id="rainyVideo"
      class="background-video visible"
      autoplay
      loop
      muted
      playsinline
    >
      <source src="img/Hujan.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <video
      id="dryVideo"
      class="background-video hidden"
      autoplay
      loop
      muted
      playsinline
    >
      <source src="img/Kemarau.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>

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
        <label class="switch" title="Toggle Season">
          <input type="checkbox" id="toggle" />
          <span class="slider"></span>
        </label>
        <a href="contactus.php" class="fas fa-user"></a>
        <a href="produk.php" class="fas fa-shopping-cart"></a>
      </div>
    </header>

    <div class="container mt-5 text-center my-5">
      <h2 id="season-title" style="color: #fff">Musim Hujan 🌧️</h2>
      <p id="recommendation-text" style="color: #fff"></p>
    </div>

    <div class="container mt-4 my-5">
      <div
      class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4"
      id="card-list"
      ></div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4" style="padding-top: 12rem;">
      <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="rkm/card.jpg" class="d-block w-100" />
        <div class="carousel-caption d-none d-md-block text-light blur-box">
        <h5>Fertillizer</h5>
        <p>We supply highly quality organic fertillizer</p>
        </div>
      </div>
      </div>
    </div>

    <div class="container mt-5 my-5">
      <div class="row g-4 text-center" id="info-seasons">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Jenis Tanah</h5>
          <p class="card-text" id="tanah-text">
          Tanah lempung berpasir yang mampu menahan air.
          </p>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Penyinaran</h5>
          <p class="card-text" id="penyinaran-text">
          Cukup sinar matahari pagi, tapi hindari genangan sinar langsung
          berlebihan.
          </p>
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Sistem Irigasi</h5>
          <p class="card-text" id="irigasi-text">
          Gunakan drainase baik untuk mencegah akar membusuk akibat air
          berlebih.
          </p>
        </div>
        </div>
      </div>
      </div>
    </div>

    <div class="container mt-5 my-5" style="padding-top: 5rem;">
      <h3 class="text-center mb-4" style="color: #fff">Artikel Terkait</h3>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="rkm/tanah.jpg" class="card-img-top" alt="Tanah Subur" />
            <div class="card-body">
              <h5 class="card-title">
                Tanah Subur untuk Pangan Bergizi dan Bumi yang Lebih Lestari
              </h5>
              <p class="card-text">
                Pelajari bagaimana mengidentifikasi tanah yang cocok untuk
                musim hujan dan kemarau agar hasil panen optimal.
              </p>
              <a
                href="https://wri-indonesia.org/id/wawasan/tanah-subur-untuk-pangan-bergizi-dan-bumi-yang-lebih-lestari"
                class="btn btn-sm btn-success"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img
              src="rkm/irigasi.jpg"
              class="card-img-top"
              alt="Irigasi Efisien"
            />
            <div class="card-body">
              <h5 class="card-title">
                Irigasi Tetes, Solusi Efisien Penggunaan Air Untuk Tanaman
              </h5>
              <p class="card-text">
                Ketahui metode irigasi hemat air seperti irigasi tetes agar
                tanaman tetap tumbuh subur saat air terbatas.
              </p>
              <a
                href="https://bbppbinuang.bppsdmp.pertanian.go.id/artikel/irigasi-tetes-solusi-efisien-penggunaan-air-untuk-tanaman"
                class="btn btn-sm btn-success"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img
              src="rkm/benih.jpg"
              class="card-img-top"
              alt="Benih Unggul"
            />
            <div class="card-body">
              <h5 class="card-title">
                Penggunaan benih bermutu, penting bagi peningkatan produksi
                pertanian
              </h5>
              <p class="card-text">
                Benih yang tepat dapat meningkatkan daya tahan tanaman terhadap
                cuaca ekstrem dan hama musiman.
              </p>
              <a
                href="https://www.umy.ac.id/penggunaan-benih-bermutu-penting-bagi-peningkatan-produksi-pertanian"
                class="btn btn-sm btn-success"
                >Baca Selengkapnya</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      const toggle = document.getElementById("toggle");
      const title = document.getElementById("season-title");
      const recText = document.getElementById("recommendation-text");
      const cardList = document.getElementById("card-list");
      const rainyVideo = document.getElementById("rainyVideo");
      const dryVideo = document.getElementById("dryVideo");
      const body = document.getElementById("body");

      const dataMusim = {
        hujan: [
          {
            nama: "Padi",
            deskripsi:
              "Padi membutuhkan banyak air sejak awal pertumbuhan hingga masa panen. Sistem sawah yang tergenang cocok dengan curah hujan tinggi.",
            gambar: "rkm/padi.jpg",
          },
          {
            nama: "Bayam",
            deskripsi:
              "Tumbuh cepat dan subur di tanah yang lembap. Benih bayam mudah tumbuh jika kelembapan cukup, dan cocok untuk panen jangka pendek (15–25 hari).",
            gambar: "rkm/bayam.jpg",
          },
          {
            nama: "Kangkung",
            deskripsi:
              "Tanaman air yang sangat menyukai kelembapan. Jenis kangkung darat bisa tumbuh cepat saat hujan, asalkan drainase tanah baik.",
            gambar: "rkm/kangkung.jpg",
          },
          {
            nama: "Jagung",
            deskripsi:
              "Cocok ditanam di awal musim hujan untuk memanfaatkan air alami. Saat tanaman jagung dewasa justru menyukai kondisi agak kering.",
            gambar: "rkm/jagong.jpg",
          },
          {
            nama: "Cabai",
            deskripsi:
              "Dapat tumbuh di musim hujan, tetapi perlu perhatian khusus pada drainase dan kelembapan tanah.",
            gambar: "pdk/cabe.jpg",
          },
        ],
        kemarau: [
          {
            nama: "Singkong",
            deskripsi:
              "Akar umbi ini kuat dan tidak memerlukan banyak air. Justru kualitas umbi akan lebih baik jika ditanam saat kemarau karena tidak mudah busuk.",
            gambar: "rkm/singkong.jpg",
          },
          {
            nama: "Kacang Tanah",
            deskripsi:
              "Dapat tumbuh di lahan kering dan gembur. Saat musim kemarau, penyakit akibat kelembapan rendah juga lebih sedikit, membuat hasil panen lebih baik.",
            gambar: "rkm/kacang.jpg",
          },
          {
            nama: "Semangka",
            deskripsi:
              "Buah ini membutuhkan banyak sinar matahari dan tanah kering. Kelembapan rendah membuat rasa buah lebih manis dan kulitnya tidak mudah busuk.",
            gambar: "rkm/semongko.jpg",
          },
          {
            nama: "Tomat",
            deskripsi:
              "Meski perlu disiram secara teratur, tomat menyukai sinar matahari penuh. Musim kemarau mempercepat pematangan buah dan mencegah jamur daun.",
            gambar: "pdk/tomat.jpg",
          },
          {
            nama: "Terong",
            deskripsi:
              "Tahan terhadap panas dan cocok ditanam di tanah yang tidak terlalu lembap. Asal penyiraman cukup, terong bisa terus berbuah sepanjang musim.",
            gambar: "pdk/terong.jpg",
          },
        ],
      };

      function renderCards(musim) {
        cardList.innerHTML = "";
        dataMusim[musim].forEach((item) => {
          const card = `
            <div class="col">
              <div class="card h-100">
                <img src="${item.gambar}" class="card-img-top" alt="${item.nama}">
                <div class="card-body">
                  <h5 class="card-title">${item.nama}</h5>
                  <p class="card-text">${item.deskripsi}</p>
                </div>
              </div>
            </div>
            `;
          cardList.innerHTML += card;
        });
      }

      function updateInfoMusim(musim) {
        const tanahText = document.getElementById("tanah-text");
        const penyinaranText = document.getElementById("penyinaran-text");
        const irigasiText = document.getElementById("irigasi-text");

        if (musim === "kemarau") {
          tanahText.textContent =
            "Gunakan tanah yang bisa menyimpan air lebih lama (seperti tanah lempung). Tanah ini membantu mempertahankan kelembapan di sekitar akar tanaman.";
          penyinaranText.textContent =
            "Banyak sinar matahari tersedia, cocok untuk tanaman yang butuh intensitas tinggi seperti semangka, tomat, dan terong. Pastikan tanaman tidak kering berlebihan.";
          irigasiText.textContent =
            "Gunakan irigasi tetes atau mulsa untuk menjaga kelembapan tanah. Ini menghemat air dan mencegah penguapan berlebihan.";
        } else {
          tanahText.textContent =
            "Pilih tanah yang gembur dan memiliki drainase baik (seperti tanah lempung berpasir). Ini mencegah genangan air yang bisa menyebabkan akar membusuk.";
          penyinaranText.textContent =
            "Kadang sinar matahari berkurang karena mendung. Tanaman seperti bayam, kangkung, dan padi tetap bisa tumbuh karena toleran terhadap penyinaran rendah.";
          irigasiText.textContent =
            "Pastikan lahan memiliki saluran pembuangan air (drainase) untuk menghindari genangan. Tanaman bisa rusak jika terlalu banyak air.";
        }
      }

      // Initial setup
      renderCards("hujan");
      updateInfoMusim("hujan");
      rainyVideo.classList.add("visible");
      dryVideo.classList.add("hidden");
      body.style.color = "#fff";

      toggle.addEventListener("change", function () {
        if (toggle.checked) {
          // Musim Kemarau
          title.textContent = "Musim Kemarau ☀️";
          recText.textContent =
            "Rekomendasi tanaman: Singkong, Kacang Tanah, Semangka, Tomat, Terong";
          renderCards("kemarau");
          updateInfoMusim("kemarau");
          rainyVideo.classList.remove("visible");
          rainyVideo.classList.add("hidden");
          dryVideo.classList.remove("hidden");
          dryVideo.classList.add("visible");
          body.style.color = "#fff";
        } else {
          // Musim Hujan
          title.textContent = "Musim Hujan 🌧️";
          recText.textContent =
            "Rekomendasi tanaman: Padi, Kangkung, Bayam, Jagung, Cabai";
          renderCards("hujan");
          updateInfoMusim("hujan");
          rainyVideo.classList.remove("hidden");
          rainyVideo.classList.add("visible");
          dryVideo.classList.remove("visible");
          dryVideo.classList.add("hidden");
          body.style.color = "#fff";
        }
      });
    </script>

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
  </body>
</html>