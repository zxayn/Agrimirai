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
  if (empty($_POST["kategori"])) $errors[] = "Kategori petani belum dipilih.";
  if (empty($_POST["email"])) $errors[] = "Email belum diisi.";
  if (empty($_POST["password"])) $errors[] = "Password belum diisi.";

  // Jika lolos semua validasi
  if (empty($errors)) {
    $success = true;

    // Di sini seharusnya Anda menyimpan ke database
    // Contoh: simpanData($_POST['nama'], ...);
  }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Petani - AgriMirai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-image: url('img/regis.jpeg');
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
      <img src="img/logo.png" alt="Logo Saya" width="50" height="50">
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
        <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Form Section -->
<div class="container login-wrapper" id="conten">
  <div class="row">
    <!-- Left Info -->
    <div class="col-md-5 login-left d-flex flex-column justify-content-center align-items-center">
      <a class="brand" href="#">
        <img src="img/logo1.png" alt="Logo Saya" width="150" height="150" style="margin-bottom: 30px;">
      </a>
      <h2 class="mt-3">Selamat Datang Petani</h2>
      <p class="text-center">Silakan isi formulir pendaftaran di samping untuk bergabung dengan AgriMirai.</p>
    </div>

    <!-- Right Form -->
    <div class="col-md-7 login-right">
      <h4 class="mb-4 text-center">Form Registrasi</h4>

      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
          <?php foreach ($errors as $error): ?>
            <div><?= htmlspecialchars($error) ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="post" action="">
        <!-- Nama -->
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Budi Santoso" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>">
        </div>

        <!-- Tanggal Lahir & Jenis Kelamin -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?= $_POST['tanggalLahir'] ?? '' ?>">
          </div>
          <div class="col-md-6">
            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenisKelamin" name="jenisKelamin">
              <option selected disabled>Pilih</option>
              <option value="Laki-laki" <?= ($_POST['jenisKelamin'] ?? '') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
              <option value="Perempuan" <?= ($_POST['jenisKelamin'] ?? '') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </div>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Contoh: Jl. Raya No. 123, Bandung"><?= $_POST['alamat'] ?? '' ?></textarea>
        </div>

        <!-- No Telepon -->
        <div class="mb-3">
          <label for="telepon" class="form-label">No Telepon</label>
          <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Contoh: 08123456789" value="<?= $_POST['telepon'] ?? '' ?>">
        </div>

        <!-- Kategori Petani -->
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori Petani</label>
          <select class="form-select" id="kategori" name="kategori">
            <option selected disabled>Pilih kategori</option>
            <option value="sayur" <?= ($_POST['kategori'] ?? '') == 'sayur' ? 'selected' : '' ?>>Petani Sayur</option>
            <option value="buah" <?= ($_POST['kategori'] ?? '') == 'buah' ? 'selected' : '' ?>>Petani Buah</option>
            <option value="padi" <?= ($_POST['kategori'] ?? '') == 'padi' ? 'selected' : '' ?>>Petani Padi</option>
          </select>
        </div>

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

        <!-- Submit -->
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-success">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="foot">
  <p>Created by @Seftivanea</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($success): ?>
<script>
Swal.fire({
  icon: 'success',
  title: 'Registrasi Berhasil!',
  text: 'Terima Kasih Anda Sudah Terdaftar Dengan AgriMirai',
  confirmButtonText: 'OK'
}).then(() => {
  window.location.href = ""; // Ganti jika ingin redirect ke halaman lain
});
</script>
<?php endif; ?>

</body>
</html>
