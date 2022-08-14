<?php
include '../functions.php';
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'];

$query = "DELETE FROM daftar_lomba WHERE id = '$id'";
mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0) {
    echo "
        <script>
        alert('Data Berhasil dihapus');
        location.href = 'index.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal Dihapus');
        location.href = 'index.php';
        </script>";
}
