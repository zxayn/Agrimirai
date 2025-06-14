<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | AgriMirai</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="img/logo.png">

</head>

<style>
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
    transition: .2s linear;
}

html {
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

/* Header (Navbar) Styles */
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
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

header .logo {
    flex: 1;
    text-align: left;
    font-size: 3rem;
    color: #fff;
    font-weight: bolder;
}

header .logo span {
    color: #fff;
}

header .navbar {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

header .navbar a {
    font-size: 2rem;
    padding: 0 1.5rem;
    color: #fff;
    text-decoration: none; /* Remove underline */
}

header .navbar a:hover {
    color: #666;
    text-decoration: none; /* Ensure no underline on hover */
}

header .logo {
    text-decoration: none; /* Remove underline from logo */
}

header .logo:hover {
    text-decoration: none; /* Ensure no underline on hover */
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
    text-decoration: none; /* Remove underline from icons */
}

header .icons a:hover {
    color: #666;
    text-decoration: none; /* Ensure no underline on hover */
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
    display: none; /* Hidden by default, shown in media queries */
}

/* Global Body and Layout */
body {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

#contact {
    padding-top: 6rem;
}

.hero {
    background-image: url('img/regis.jpeg'); /* Ganti dengan path gambar kamu */
    background-size: cover;
    background-position: center;
    position: relative;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Overlay hitam transparan */
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero h1 {
    font-size: 60px;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    margin-bottom: 10px;
}

.hero p {
    font-size: 20px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
}

.wave {
    width: 100%;
    margin: 20px auto;
    height: 40px;
}

#faqu {
    padding-top: 3rem;
    padding-bottom: 3rem;
    padding-left: 3rem;
    font-size: 14px;
}

#form {
    font-size: 14px;
}

.contact-section {
    padding: 50px;
}

.contact-box {
    background-color: #003d33;
    color: white;
    padding: 30px;
    border-radius: 8px;
}

.contact-box input,
.contact-box textarea {
    margin-bottom: 15px;
}

.contact-box .btn {
    background-color: #f4f4dc;
    color: #003d33;
    border: none;
}

.contact-info i {
    margin-right: 10px;
    color: #003d33;
}

.map-responsive {
    position: relative;
    padding-bottom: 40%;
    height: 0;
    overflow: hidden;
    border-radius: 12px;
    margin-top: 3rem;
    margin-left: 8rem;
    margin-right: 8rem;
}

.map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%;
    border: 0;
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

/* Responsive Adjustments */
@media (max-width: 991px) {
    html {
        font-size: 55%;
    }
    header {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    .map-responsive {
        width: auto;
        height: auto;
        margin-left: 3rem;
        margin-right: 3rem;
    }

    header {
        flex-wrap: wrap;
    }

    header .fa-bars {
        display: block; /* Show the hamburger icon */
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
        border-top: .1rem solid rgba(0, 0, 0, .1);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        z-index: 999;
        max-height: 0; /* Hidden by default */
        overflow: hidden;
        transition: max-height 1s cubic-bezier(0.4, 0, 0.2, 1);
    }
    header #toggler:checked ~ .navbar {
        max-height: 500px; /* Expand when toggler is checked */
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
}

@media (max-width: 450px) {
    html {
        font-size: 50%;
    }
}

</style>

<!-- Body -->
<body>

<!-- NAVBAR -->

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
<!-- NAVBAR END -->

<!--Jumbotron-->

<div class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Contact Us</h1>
        <svg class="wave" viewBox="0 0 1440 100">
        <path fill="none" stroke="#ffffff" stroke-width="4" d="M0,50 C360,0 1080,100 1440,50" /></svg>
            <p>Selamat Datang di Contact Us AgriMirai</p>
    </div>
</div>

<!-- jumbotron end -->

<!--FAQ-->
    <section id="faqu">
        <div class="container py-5">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-start ps-md-5 mb-4">
                    <h2 class="faq-title" style="font-weight: bold; font-size:24px;">Frequently Asked<br>Questions</h2><br>
                    <p>Temukan jawaban atas pertanyaan umum yang sering ditanyakan. Kami ingin memastikan Anda mendapatkan informasi yang jelas dan cepat tanpa kesulitan.</p>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="accordion" id="faqAccordion">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" style="font-size: 16px;">
                        Bisakah saya membeli dalam jumlah besar untuk keperluan kelompok tani atau komunitas?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Bisa, Anda bisa melakukan pembelian skala besar untuk komunitas atau kelompok tani
                        </div>
                    </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="font-size: 16px;">
                        Apakah kalian melayani pengiriman ke seluruh Indonesia?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Ya, kami bisa melayani pengiriman seluruh Indonesia.
                        </div>
                    </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="font-size: 16px;">
                        Pembayaran apa saja yang tersedia?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                        Kami menerima pembayaran via Gopay, OVO, DANA, Bank Mandiri, Bank BCA, Bank BRI.
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ end-->

<!-- Form -->
<section id="form">
    <div class="container contact-section">
    <div class="row align-items-center">

    <!-- Info Section -->

    <div class="col-md-6">
        <h3 class="fw-bold" style="font-size:24px;">Ask Us Anything</h3><br>
            <p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami jika ada pertanyaan, saran, atau kebutuhan informasi lebih lanjut.</p>
        <div class="contact-info">
            <p><i class="fas fa-map-marker-alt"></i>Perum Griya Intan Permai Blok i No.15</p>
            <p><i class="fas fa-envelope"></i>agrimirai17@gmail.com</p>
            <p><i class="fas fa-phone"></i>+628231452412</p>
        </div>
    </div>

    <!-- Form Section -->

    <div class="col-md-6 ps-md-5 mb-4">
        <div class="contact-box">
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn mt-2">Send Message</button>
    </form>
            </div>
                </div>
            </div>
        </div>
</section>


<!-- Form End -->

<!--Maps-->

<section id="Maps">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7906.34056310714!2d111.99902469999999!3d-7.771760899999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1748531069400!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!--Maps end-->

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
            <i class="far fa-envelope"></i> agrimirai17.com
        </a>
    </div>

</div>

    <div class="credit"> create by <span>Agrimirai web designer</span> | all rights reserved.</div>
    
</section>

<!-- footer akhir-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>