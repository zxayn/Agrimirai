<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Secret reCAPTCHA
  $recaptchaSecret = "6LdNZkcrAAAAAAeR4TrCrEXJqK6ALRn-V0qemzcW";
  $response = $_POST['g-recaptcha-response'] ?? '';
  $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}");
  $captchaSuccess = json_decode($verify);

  if (!$captchaSuccess->success) {
    $errors[] = "Verifikasi CAPTCHA gagal. Silakan coba lagi.";
  }
}

//databases
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrimirai";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo" Koneksi berhasil";

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)) {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validasi input
  if (empty($email) || empty($password)) {
    $errors[] = "Email dan Password harus diisi.";
  } else {
    // Cek kredensial di database
    $stmt = $conn->prepare("SELECT * FROM registrasi WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // Login berhasil
      $success = true;
    } else {
      $errors[] = "Email atau Password salah.";
    }
    $stmt->close();
  }
}

?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | AgriMirai</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="shortcut icon" href="img/logo.png">


  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
}

header .navbar a:hover {
  color: #666;
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
}

header .icons a:hover {
  color: #666;
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

    body {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .login-wrapper {
      margin-top: 150px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      background-color: #fff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 24px rgba(0,0,0,0.12);
      display: flex;
      min-height: 480px;
    }

    .login-left {
      background-color: #19735d;
      color: #fff;
      padding: 48px 36px;
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .login-left h2 {
      font-size: 2.6rem;
      font-weight: bold;
      margin-bottom: 1rem;
      text-align: center;
    }

    .login-left p {
      font-size: 1.5rem;
      margin-top: 1.5rem;
      text-align: center;
    }

    .login-right {
      padding: 48px 36px;
      flex: 1 1 55%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-right h4 {
      font-size: 2rem;
      margin-bottom: 2rem;
    }

    .form-label {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      display: block;
    }

    .form-control {
      width: 100%;
      padding: 1rem;
      font-size: 1.3rem;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 1.5rem;
      background: #f9f9f9;
      transition: border-color 0.2s;
    }

    .form-control:focus {
      border-color: #19735d;
      background: #fff;
    }

    .g-recaptcha {
      margin-bottom: 2rem;
    }

    .register-link {
      font-size: 1.2rem;
      color: #19735d;
      text-decoration: underline;
      margin-bottom: 1.5rem;
      display: inline-block;
    }

    .btn-success {
      background-color: #19735d;
      color: #fff;
      font-size: 1.8rem;
      padding: 1.3rem 0;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      letter-spacing: 0.5px;
      padding-left: 2.5rem;
      padding-right: 2.5rem;
    }

    .btn-success:hover {
      background-color: #145c4a;
    }

    .alert {
      padding: 1rem;
      background: #ffeaea;
      color: #b30000;
      border-radius: 6px;
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
    }

    .foot {
      margin-top: 5rem;
      background-color: rgb(28, 88, 76);
      text-align: center;
      color: white;
      padding: 1rem;
    }

    #conten {
      opacity: 0.92;
    }

    /* Responsive Content */
    @media (max-width: 900px) {
      .login-wrapper {
      flex-direction: column;
      max-width: 98vw;
      min-height: unset;
      margin-top: 90px;
      }
      .login-left, .login-right {
      padding: 32px 18px;
      flex: unset;
      }
    }

    @media (max-width: 600px) {
      .login-wrapper {
      margin-top: 70px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      }
      .login-left, .login-right {
      padding: 18px 8px;
      }
      .login-left h2 {
      font-size: 2rem;
      }
      .login-left p {
      font-size: 1.2rem;
      }
      .login-right h4 {
      font-size: 1.5rem;
      }
      .form-label, .form-control, .alert {
      font-size: 1.1rem;
      }
      .btn-success {
      font-size: 1.4rem;
      padding: 1rem 0;
      }
    }

    @media (max-width: 450px) {
      .login-wrapper {
      margin-top: 50px;
      border-radius: 4px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.08);
      }
      .login-left, .login-right {
      padding: 10px 2px;
      }
      .login-left h2 {
      font-size: 1.5rem;
      }
      .login-left p {
      font-size: 1rem;
      }
      .login-right h4 {
      font-size: 1.1rem;
      }
      .form-label, .form-control, .alert {
      font-size: 1rem;
      }
      .btn-success {
      font-size: 1.1rem;
      padding: 0.8rem 0;
      }
    }

/* Responsive Adjustments for Header (Navbar) */
@media (max-width: 991px) {
  html {
  font-size: 55%;
}
header {
  padding: 2rem;
  }
}

@media (max-width: 768px) {
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

<!-- Background Video Section -->
<div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; overflow: hidden;">
  <video autoplay muted loop playsinline style="min-width: 100vw; min-height: 100vh; object-fit: cover;">
    <source src="img/mirai.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<!-- Form Section -->
<div class="container login-wrapper" id="conten">
  <!-- Left Info -->
  <div class="login-left">
    <a class="brand" href="index.php">
      <img src="img/logo.png" alt="Logo AgriMirai" width="120" height="120" style="margin-bottom: 25px;">
    </a>
    <h2>Selamat Datang Petani</h2>
    <p class="text-center">Silakan isi formulir Login di samping untuk masuk ke AgriMirai.</p>
  </div>

  <!-- Right Form -->
  <div class="login-right">
    <h4 class="mb-4 text-center">Form Login</h4>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
          <div><?= htmlspecialchars($error) ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="post" action="">
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: bubuudi@gmail.com" value="<?= $_POST['email'] ?? '' ?>">
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 6 karakter">
      </div>

      <!-- Google reCAPTCHA -->
      <div class="g-recaptcha mb-4" data-sitekey="6LdNZkcrAAAAAJXAyBy2WlKjRZyl7ehCc-lqDRJ0"></div>

      <!-- Regis -->
      <div class="d-grid gap-2" style="text-align: right;">
        <a href="registrasi.php" class="register-link" style="text-decoration: none;">Belum punya akun? Daftar Sekarang</a>
      </div>

      <!-- Submit -->
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </form>
  </div>
</div>



<?php if ($success): ?>
<script>
Swal.fire({
  icon: 'success',
  title: 'Login Berhasil!',
  text: 'Selamat datang di AgriMirai',
  confirmButtonText: 'OK',
  confirmButtonColor: '#19735d'
}).then(() => {
  window.location.href = "produk.php"; // Ganti jika ingin redirect ke halaman lain
});
</script>
<?php endif; ?>
<?php

?>

</body>
</html>
