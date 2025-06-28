<?php
session_start();
include 'databases.php';

// Inisialisasi variabel default jika belum login
    $loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
    $nama = $loggedIn ? $_SESSION['user_nama'] : 'Pengembara';
    $email = $loggedIn ? $_SESSION['user_email'] : '';
    $role = $loggedIn ? $_SESSION['user_role'] : '';

    $first = $conn->real_escape_string($_POST['firstname']);
    $last = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    $msg = $conn->real_escape_string($_POST['pesan']);

    $sql = "INSERT INTO message (firstname, lastname, email, pesan) VALUES ('$first', '$last', '$email', '$msg')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['pesan'] = "Pesan berhasil dikirim!";
    } else {
        $_SESSION['pesan'] = "Error: " . $conn->error;
    }

header("Location: contactus.php");
exit
?>