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

  // Validasi form
  if (empty($_POST["nama"])) $errors[] = "Nama belum diisi.";
  if (empty($_POST["tanggalLahir"])) $errors[] = "Tanggal lahir belum diisi.";
  if (empty($_POST["jenisKelamin"])) $errors[] = "Jenis kelamin belum dipilih.";
  if (empty($_POST["alamat"])) $errors[] = "Alamat belum diisi.";
  if (empty($_POST["telepon"])) $errors[] = "Nomor telepon belum diisi.";
  if (empty($_POST["Status"])) $errors[] = "Status belum dipilih.";
  if (empty($_POST["email"])) $errors[] = "Email belum diisi.";
  if (empty($_POST["password"])) $errors[] = "Password belum diisi.";

  // Jika lolos semua validasi
  if (empty($errors)) {
    $success = true;

    // Di sini seharusnya Anda menyimpan ke database
    // Contoh: simpanData($_POST['nama'], ...);
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrimirai";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo" Koneksi berhasil";
// Jika form berhasil disubmit, simpan data ke database
if ($_SERVER["REQUEST_METHOD"] == "POST" && $success) {
    $Nama = $conn->real_escape_string($_POST['nama']);
    $Tanggal_Lahir = $conn->real_escape_string($_POST['tanggalLahir']);
    $Jenis_Kelamin = $conn->real_escape_string($_POST['jenisKelamin']);
    $Alamat = $conn->real_escape_string($_POST['alamat']);
    $No_Telp = $conn->real_escape_string($_POST['telepon']);
    $Status = $conn->real_escape_string($_POST['Status']);
    $Email = $conn->real_escape_string($_POST['email']);
    $Password =$conn->real_escape_string($_POST['password']);

    // Query untuk menyimpan data
    $sql = "INSERT INTO registrasi (Nama, Tanggal_Lahir, Jenis_Kelamin, Alamat, No_Telp, Status, Email, Password) VALUES ('$Nama', '$Tanggal_Lahir', '$Jenis_Kelamin', '$Alamat', '$No_Telp', '$Status', '$Email', '$Password')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi | AgriMirai</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="shortcut icon" href="img/logo.png">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

/* Login Form Styles */

body {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  padding-bottom: 5rem;
}

.login-wrapper {
  margin-top: 100px;
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
  padding: 32px 24px;
}

.login-left h2 {
  font-size: 2.5rem;
  font-weight: bold;
}

.login-left p {
  font-size: 1.5rem;
  margin-top: 15px;
}

.login-right {
  padding: 32px 24px;
}

#conten {
  opacity: 90%;
}





/* Responsive Navbar */
@media (max-width: 991px) {
  html { font-size: 15px; }
  header { padding: 1rem 2rem; }
}

@media (max-width: 768px) {
  header {
    flex-wrap: wrap;
    padding: 1rem 1rem;
  }
  header .fa-bars {
    display: block;
  }
  header .navbar {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: var(--main-color);
    flex-direction: column;
    align-items: flex-start;
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s;
    z-index: 999;
  }
  #toggler:checked ~ .navbar {
    max-height: 300px;
    padding-bottom: 1rem;
  }
  header .navbar a {
    padding: 1rem 2rem;
    width: 100%;
    font-size: 1rem;
  }
}

@media (max-width: 600px) {
  html { font-size: 14px; }
  .login-wrapper { margin-top: 70px; }
}

@media (max-width: 450px) {
  html { font-size: 13px; }
  .login-wrapper { margin-top: 50px; }
}



</style>

</head>
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
        <img src="img/logo.png" alt="Logo Saya" width="170" height="170" style="margin-bottom: 20px;">
      </a>
      <h2 class="mt-3">Selamat Datang Petani</h2>
      <p class="text-center">Silakan isi formulir pendaftaran di samping untuk bergabung dengan AgriMirai.</p>
    </div>

    <!-- Right Form -->
    <div class="col-md-7 login-right" style="font-size: 1.5rem;">
      <h4 class="mb-4 text-center" style="font-size: 2rem;">Form Registrasi</h4>

      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger" style="font-size: 1.3rem;">
          <?php foreach ($errors as $error): ?>
            <div><?= htmlspecialchars($error) ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="post" action="" style="font-size: 1.5rem;">
        <!-- Nama -->
        <div class="mb-3">
          <label for="nama" class="form-label" style="font-size: 1.5rem;">Nama Lengkap</label>
          <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Contoh: Budi Santoso" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>" style="font-size: 1.5rem;">
        </div>

        <!-- Tanggal Lahir & Jenis Kelamin -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="tanggalLahir" class="form-label" style="font-size: 1.5rem;">Tanggal Lahir</label>
            <input type="date" class="form-control form-control-lg" id="tanggalLahir" name="tanggalLahir" value="<?= $_POST['tanggalLahir'] ?? '' ?>" style="font-size: 1.5rem;">
          </div>
          <div class="col-md-6">
            <label for="jenisKelamin" class="form-label" style="font-size: 1.5rem;">Jenis Kelamin</label>
            <select class="form-select form-select-lg" id="jenisKelamin" name="jenisKelamin" style="font-size: 1.5rem;">
              <option selected disabled>Pilih</option>
              <option value="Laki-laki" <?= ($_POST['jenisKelamin'] ?? '') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
              <option value="Perempuan" <?= ($_POST['jenisKelamin'] ?? '') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </div>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
          <label for="alamat" class="form-label" style="font-size: 1.5rem;">Alamat</label>
          <textarea class="form-control form-control-lg" id="alamat" name="alamat" rows="2" placeholder="Contoh: Jl. Raya No. 123, Bandung" style="font-size: 1.5rem;"><?= $_POST['alamat'] ?? '' ?></textarea>
        </div>

        <!-- No Telepon -->
        <div class="mb-3">
          <label for="telepon" class="form-label" style="font-size: 1.5rem;">No Telepon</label>
          <input type="tel" class="form-control form-control-lg" id="telepon" name="telepon" placeholder="Contoh: 08123456789" value="<?= $_POST['telepon'] ?? '' ?>" style="font-size: 1.5rem;">
        </div>

        <!-- Kategori Petani -->
        <div class="mb-3">
          <label for="Status" class="form-label" style="font-size: 1.5rem;">Status</label>
          <select class="form-select form-select-lg" id="Status" name="Status" style="font-size: 1.5rem;">
            <option selected disabled>Pilih kategori</option>
            <option value="petani" <?= ($_POST['Status'] ?? '') == 'petani' ? 'selected' : '' ?>>Petani</option>
            <option value="mitra" <?= ($_POST['Status'] ?? '') == 'mitra' ? 'selected' : '' ?>>Mitra</option>
          </select>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label" style="font-size: 1.5rem;">Email</label>
          <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Contoh: bubuudi@gmail.com" value="<?= $_POST['email'] ?? '' ?>" style="font-size: 1.5rem;">
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label" style="font-size: 1.5rem;">Password</label>
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Minimal 6 karakter" style="font-size: 1.5rem;">
        </div>

        <!-- Google reCAPTCHA -->
        <div class="g-recaptcha mb-4" data-sitekey="6LdNZkcrAAAAAJXAyBy2WlKjRZyl7ehCc-lqDRJ0"></div>

        <!-- Submit -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success btn-lg" style="font-size: 1.5rem;">Daftar</button>
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
  title: 'Registrasi Berhasil!',
  text: 'Terima Kasih Anda Sudah Terdaftar Dengan AgriMirai',
  confirmButtonText: 'OK',
  confirmButtonColor: '#19735d'
}).then(() => {
  window.location.href = "login.php"; // Ganti jika ingin redirect ke halaman lain
});
</script>
<?php endif; ?>

</body>
</html>
