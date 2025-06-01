<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Petani - AgriMirai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css"/>

  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(24, 117, 98);">
      <div class="container">
        <a class="navbar-brand" href="#">AgriMirai</a>
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
    <div class="container login-wrapper" id="form-conten">
      <div class="row">
        <!-- Left: Info / Logo -->
        <div class="col-md-5 login-left d-flex flex-column justify-content-center">
          <h2>Selamat Datang Petani</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla, odio ut tincidunt pulvinar, sapien lorem lacinia justo.</p>
        </div>

        <!-- Right: Form -->
        <div class="col-md-7 login-right">
          <h4 class="mb-4 text-center">Form Registrasi</h4>
          <form>
            <!-- Nama -->
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
            </div>

            <!-- Tanggal Lahir & Jenis Kelamin -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir">
              </div>
              <div class="col-md-6">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin">
                  <option selected disabled>Pilih</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>

            <!-- Alamat -->
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" rows="2" placeholder="Alamat lengkap..."></textarea>
            </div>

            <!-- No Telepon -->
            <div class="mb-3">
              <label for="telepon" class="form-label">No Telepon</label>
              <input type="tel" class="form-control" id="telepon" placeholder="08xxxxxxxxxx">
            </div>

            <!-- Kategori Petani -->
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori Petani</label>
              <select class="form-select" id="kategori">
                <option selected disabled>Pilih kategori</option>
                <option value="sayur">Petani Sayur</option>
                <option value="buah">Petani Buah</option>
                <option value="padi">Petani Padi</option>
              </select>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="email@example.com">
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="********">
            </div>

            <!-- Tombol Submit -->
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
      <footer class="foot"><p>Created by @Seftivanea</p></footer>
  <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
