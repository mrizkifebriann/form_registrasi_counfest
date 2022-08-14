<?php
require '../functions.php';

if (isset($_POST['submit'])) {

    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO akun VALUES ('" . $username . "', '" . $password . "')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Registrasi Berhasil');
        </script>";
    } else {
        echo "<script>
        alert('Registrasi Gagal');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit">
    </form>


</body>

</html>