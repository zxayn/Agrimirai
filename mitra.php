<?php
session_start();
include 'databases.php';

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

// Ambil nama user dari session
$nama = $_SESSION['user_nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status Pengajuan Anda</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Riwayat Pengajuan Produk</h2>

<table>
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th>Laporan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Ambil data pengajuan milik mitra ini
        $sql = "SELECT tgl, nama_barang, gambar, laporan, status 
                FROM pengajuan_mitra 
                WHERE nama = '$nama' 
                ORDER BY tgl DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= htmlspecialchars($row['tgl']) ?></td>
            <td><?= htmlspecialchars($row['nama_barang']) ?></td>
            <td>
                <?php if (!empty($row['gambar'])): ?>
                    <img src="uploads/<?= htmlspecialchars($row['gambar']) ?>" alt="Gambar" width="100">
                <?php else: ?>
                    Tidak ada gambar
                <?php endif; ?>
            </td>
            <td><?= nl2br(htmlspecialchars($row['laporan'])) ?></td>
            <td><strong><?= htmlspecialchars($row['status']) ?></strong></td>
        </tr>
        <?php
            endwhile;
        else:
        ?>
        <tr><td colspan="5">Belum ada pengajuan.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
