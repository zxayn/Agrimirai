<?php
session_start();
include 'databases.php'; // koneksi ke DB

// Cek login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Cek role mitra
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'Mitra') {
    echo "Anda tidak memiliki akses ke halaman ini.";
    exit;
}

// Ambil data user dari session
$nama = $_SESSION['user_nama'];
$telp = $_SESSION['user_telp'];
$tanggal = date('Y-m-d H:i:s');

// Proses saat form disubmit
if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $laporan = $_POST['laporan'];
    $status = $_POST['st'];

    // Proses upload file
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $folder_upload = 'uploads/';

    // Validasi nama folder dan upload
    if (!file_exists($folder_upload)) {
        mkdir($folder_upload, true);
    }

    $path = $folder_upload . basename($gambar);
    if (move_uploaded_file($tmp, $path)) {
        // Insert ke database
        $query = "INSERT INTO pengajuan_mitra (tgl, nama, telp, nama_barang, gambar, laporan, status)
                  VALUES ('$tanggal', '$nama', '$telp', '$nama_barang', '$gambar', '$laporan', '$status')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Pengajuan berhasil dikirim!'); window.location='pengajuan.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan ke database.');</script>";
        }
    } else {
        echo "<script>alert('Gagal upload gambar.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Pengajuan Mitra</title>
  <style>
    .form-control { width: 100%; padding: 10px; margin-bottom: 10px; }
    .btn { padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer; }
  </style>
</head>
<body>

  <h2>Form Pengajuan Produk Mitra</h2>

  <form action="" method="post" enctype="multipart/form-data">
    <label>Tanggal:</label><br>
    <input type="text" name="tgl" class="form-control" value="<?= $tanggal ?>" readonly><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($nama) ?>" readonly><br>

    <label>Telepon:</label><br>
    <input type="text" name="telp" class="form-control" value="<?= htmlspecialchars($telp) ?>" readonly><br>

    <label>Nama Barang:</label><br>
    <input type="text" name="nama_barang" class="form-control" placeholder="Minimal 6 karakter" required><br>

    <label>Upload Gambar:</label><br>
    <input type="file" name="gambar" class="form-control" required><br>

    <label>Masukan:</label><br>
    <textarea name="laporan" class="form-control" rows="5" placeholder="Tulis laporan atau masukan..." required></textarea><br>

    <input type="hidden" name="st" value="Proses">

    <input type="submit" value="Kirim Masukan" name="simpan" class="btn">
  </form>

</body>
</html>
