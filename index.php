<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

<!-- font cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- style css  -->

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

section{
  padding: 2rem 9%;
}

.heading{
  text-align: center;
  font-size: 4rem;
  color: #333;
  padding: 1rem;
  margin: 2rem 0;
  background: rgba(0,0,0,.1);
}

.heading span{
  color: var(--main-color)
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  border-radius: 5rem;
  background: var(--main-color);
  color: #fff;
  padding: .9rem 3.5rem;
  cursor: pointer;
  font-size: 1.5rem;
}

.btn :hover{
  background: var rgba(0,0,0,.1);
}

header{
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
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo {
  flex: 1;
  text-align: left;
}

header .navbar {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

header .icons {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

header .logo{
  font-size: 3rem;
  color: #fff;
  font-weight: bolder;
}

header .logo span{
  color: #fff;
}

header .navbar a{
  font-size: 2rem;
  padding: 0 1.5rem;
  color: #fff;
}

header .navbar a:hover{
  color: #666;
}

header .icons a{
  font-size: 2.5rem;
  color: #fff;
  margin-left: 1.5rem;
}

header .icons a:hover{
  color: #666;
}

header #toggler{
  display: none;
}

header .fa-bars{
  font-size: 3rem;
  color: #fff;
  border-radius: .5rem;
  padding: .5rem 1.5rem;
  cursor: pointer;
  border: .1rem solid rgba(0,0,0,.3);
  display: none;
}

.home{
  display: flex;
  align-items: center;
  min-height: 100vh;
  background: url('img/regis.jpeg') no-repeat center center/cover;
  background-size: cover;
  background-position: center;
}

.home .content{
  max-width: 50rem;
  color: #fff;
}

.home .content h3{
  font-size: 6rem;
  color: #fff;
}

.home .content span{
  font-size: 3.5rem;
  color: #fff;
  padding: 1rem 0;
  line-height: 1.5;
}

.home .content p{
  font-size: 1.5rem;
  color: #fff;
  padding: 1rem 0;
  line-height: 1.5;
}

.about .row{
  display: flex;
  align-items: center;
  gap: 2rem;
  flex-wrap: wrap;
  padding: 2rem 0;
  padding-bottom: 3rem;
}

.about .row .video-container{
  flex: 1 1 40rem;
  position: relative;
}

.about .row .video-container video {
  width: 100%;
  max-width: 650px;
  height: 360px;
  border: 1.5rem solid #fff;
  border-radius: .5rem;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  object-fit: cover;
  display: block;
  margin: 0 auto;
}

.about .row .video-container h3{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 3rem;
  background: #fff;
  width: 100%;
  padding: 1rem 2rem;
  text-align: center;
  mix-blend-mode: screen;
}

.about .row .content{
  flex: 1 1 40rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.about .row .content h3{
  font-size: 3rem;
  color: #333;
}

.about .row .content p{
  font-size: 1.5rem;
  color: #999;
  padding: .5rem 0;
  padding-top: 1rem;
  line-height: 1.5;
}

.icons-container{
  background: #eee;
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.icons-container .icons{
  background: #fff;
  border: .1rem solid rgba(0,0,0,.1);
  padding: 2rem;
  display: flex;
  align-items: center;
  flex: 1 1 25rem;
}

.icons-container .icons img{
  height: 7rem;
  margin-right: 3rem;
}

.icons-container .icons h3{
  
  padding-bottom: .5rem;
  font-size: 2rem;
}

.icons-container .icons span{
  color: #555;
  font-size: 1.3rem;
}

.icons-container .icons p{
  color: #666;
  font-size: 1.4rem;
}

.products .box-container{
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.products .box-container .box{
  flex: 1 1 30rem;
  box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
  border-radius: 0 .5rem;
  border: .1rem solid rgba(0,0,0,.1);
  position: relative;
}

.products .box-container .box .image{
  position: relative;
  text-align: center;
  padding-top: 5rem;
  padding-bottom: 5rem;
  overflow: hidden;
}

.products .box-container .box .image h3{
  margin-top: 2rem;
  font-size: 2rem;
}

.products .box-container .box .image p{
  margin-top: 1.2rem;
  font-size: 1.2rem;
  padding-left: 3.5rem;
  padding-right: 3.5rem;
}

.products .box-container .box .image .btn{
  margin-top: 1.4rem;
}

.products .box-container .box .image img{
  height: 20rem;
}

.products .box-container .box:hover .image img{
  transform: scale(1.1);
}

.products .box-container .box .image a:hover{
  background: #666;
}

.footer .box-container{
  display: flex;
  flex-wrap: wrap;
  padding-top: 2.7rem;
  gap: 2rem;
}

.footer .box-container .box{
  flex: 1 1 25rem;
}

.footer .box-container .box h3{
  color: #333;
  font-size: 2.5rem;
  padding: 3rem 0;
}

.footer .box-container .box a{
  display: block;
  color: #666;
  font-size: 1.5rem;
  padding: 1rem 0;
}

.footer .box-container .box a:hover{
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

.footer .credit span{
  color: var(--main-color);
}


.about .row .content .btn {
  font-size: 1.5rem;
  padding: .7rem 2.5rem;
  border-radius: 3rem;
  margin-top: 1.5rem;
  align-self: flex-start;
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

  <a href="#" class="logo">agrimirai<span>.</span></a>

  <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#products">Products</a>
  </nav>

  <div class="icons">
    <a href="#" class="fas fa-search"></a>
    <a href="#" class="fas fa-user"></a>
    <a href="#" class="fas fa-shopping-cart"></a>

  </div>

</header>

<!-- header akhir  -->

<!-- section content awal -->

  <section class="home" id="home">

    <div class="content">
      <h3>Welcome to Agrimirai</h3>
      <span>Your one-stop solution for all agricultural needs.</span>
      <p>Explore our services and products designed to enhance your agricultural experience.</p>
      <a href="#about" class="btn"> Learn More</a>
    </div>

  </section>

<!-- section content akhir -->

<!-- about section awal -->

  <section class="about" id="about">

    <h1 class="heading"> <span>About</span> us </h1>
    <div class="row">
      <div class="video-container">
        <video src="img/dinas.mp4" loop autoplay muted></video>
          <h3>Best Hydroponics</h3>
      </div>
    <div class="content">
      <h3>Selada Hydroponics</h3>
      <p>Selada hidroponik adalah metode budidaya selada tanpa menggunakan tanah, melainkan dengan media air yang diperkaya nutrisi. Teknik ini memungkinkan pertumbuhan selada yang lebih cepat, higienis, dan ramah lingkungan. Dengan kontrol nutrisi dan lingkungan yang optimal, selada hidroponik menghasilkan daun yang segar, renyah, serta bebas pestisida, sehingga sangat cocok untuk konsumsi sehat sehari-hari.</p>
      <a href="#" class="btn">Learn more</a>
    </div>
  </div>

  </section>

<!-- about section akhir -->

<!-- icon-contact awal -->

  <section class="icons-container">

    <div class="icons">
      <img src="img/world.png" alt="">
      <div class="info">
        <h3>Address</h3>
          <p>Kediri, East Java, Indonesia</p>
      </div>
    </div>

    <div class="icons">
      <img src="img/paper-plane.png" alt="">
      <div class="info">
        <h3>Email Addrees</h3>
            <p>
              <a href="https://mail.google.com/mail/u/1/#inbox?compose=DmwnWrRsqXpxvrLdZhkqmBcqHMCTgcrjDjnpgqWqbxqLXbTRtvGCWWzJlxMKjXrVKNSNlnhFckxl" style="color: #666; text-decoration: none;">
                zidanxjr8@gmail.com
              </a>
            </p>
      </div>
    </div>

    <div class="icons">
      <img src="img/user.png" alt="">
      <div class="info">
        <h3>Contact</h3>
          <p>Silahkan Hubungi Custom Sercives jika ada kendala</p>
      </div>
    </div>

  </section>

<!-- icon-contact akhir -->

<!-- produk section awal -->

  <section class="products" id="products">

    <h1 class="heading"> <span>Products</span> Sales </h1>

  <div class="box-container">

      <div class="box">
        <div class="image">
        <img src="img/selada.png" alt="">
        <h3>Selada</h3>
        <p>Selada hidroponik adalah metode budidaya selada tanpa tanah, menggunakan media air yang kaya nutrisi.</p>
        <a href="#" class="btn">Buy Now</a>
      </div>
    </div>

      <div class="box">
        <div class="image">
        <img src="img/tomato.png" alt="">
        <h3>Tomat</h3>
        <p>Tomat organik ditanam tanpa pestisida kimia, memberikan rasa segar dan sehat.</p>
        <a href="#" class="btn">Buy Now</a>
      </div>
    </div>

      <div class="box">
        <div class="image">
          <img src="img/kubis.png" alt="">
          <h3>Kubis</h3>
            <p>Kubis segar dengan daun renyah, cocok untuk berbagai olahan masakan sehat dan bergizi.</p>
          <a href="#" class="btn">Buy Now</a>
      </div>
    </div>

  </div>

  </section>

<!-- produk section akhir -->

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
      <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="#"><i class="fab fa-github"></i> Github</a>
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



</body>
</html>