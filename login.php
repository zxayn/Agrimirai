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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      /* background-image: url('img/pppp.mp4'); */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .login-wrapper {
      margin-top: 120px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .login-left {
      background-color: #19735d;
      color: #fff;
      padding: 40px 30px;
    }
    .login-left h2 {
      font-size: 28px;
      font-weight: bold;
    }
    .login-left p {
      font-size: 16px;
      margin-top: 15px;
    }
    .login-right {
      padding: 40px 30px;
    }
    .foot {
      margin-top: 5rem;
      background-color: rgb(28, 88, 76);
      text-align: center;
      color: white;
      padding: 1rem;
    }
    #conten {
      opacity: 80%;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(24, 117, 98);">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo1.png" alt="Logo AgriMirai" width="50" height="50" style="vertical-align: middle;">
      <span style="font-size: 2rem; color: #fff; margin-left: 10px; vertical-align: middle; letter-spacing:2px; font-family: 'Brush Script MT', cursive;">Agri Mirai</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#galery">Our Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#login">BAWOK</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Background Video Section -->
<div style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; overflow: hidden;">
  <video autoplay muted loop playsinline style="min-width: 100vw; min-height: 100vh; object-fit: cover;">
    <source src="img/mirai.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<!-- Form Section -->
<div class="container login-wrapper" id="conten">
  <div class="row">
    <!-- Left Info -->
    <div class="col-md-5 login-left d-flex flex-column justify-content-center align-items-center">
      <a class="brand" href="#">
        <img src="img/logo.png" alt="Logo Saya" width="150" height="150" style="margin-bottom: 30px;">
      </a>
      <h2 class="mt-3">Selamat Datang Petani</h2>
      <p class="text-center">Silakan isi formulir Login di samping untuk masuk dengan AgriMirai.</p>
    </div>

    <!-- Right Form -->
    <div class="col-md-7 login-right">
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
        <div class="d-grid gap-2">
          <a href="registrasi.php">Belum punya akun? Daftar Sekarang</a>
        </div>

        <!-- Submit -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($success): ?>
<script>
Swal.fire({
  icon: 'success',
  title: 'Login Berhasil!',
  text: 'Selamat datang di AgriMirai',
  confirmButtonText: 'OK',
  confirmButtonColor: '#19735d'
}).then(() => {
  window.location.href = "home.php"; // Ganti jika ingin redirect ke halaman lain
});
</script>
<?php endif; ?>
<?php

?>

</body>
</html>
