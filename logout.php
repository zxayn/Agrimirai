<?php
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Redirect ke halaman index
header("Location: index.php");
exit();
?>
