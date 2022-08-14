<?php
require 'config.php';
$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function upload()
{
    $namaFile = $_FILES['bukti-bayar']['name'];
    $ukuranFile = $_FILES['bukti-bayar']['size'];
    $error = $_FILES['bukti-bayar']['error'];
    $tmpName = $_FILES['bukti-bayar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                document.location.href = 'index.php';
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
				document.location.href = 'index.php';
			</script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
				document.location.href = 'index.php';
			</script>";
        return false;
    }

    $namaFileBaru = str_replace(' ', '', $_POST['nama']) . '-' . strtoupper($_POST['cabang-lomba']) . '-' . date('Y-m-d') . '.' . $ekstensiGambar;
    $destination_path = getcwd() . DIRECTORY_SEPARATOR;
    $target_path = $destination_path . '/upload/' . $_POST['cabang-lomba'] . '/' . basename($namaFileBaru);
    move_uploaded_file($_FILES['bukti-bayar']['tmp_name'], $target_path);

    return $namaFileBaru;
}

function registrasi($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $status = htmlspecialchars($data['status']);
    $instansi = htmlspecialchars($data['instansi']);
    $wa = htmlspecialchars($data['whatsapp']);
    $email = htmlspecialchars($data['email']);
    $cabang = htmlspecialchars($data['cabang-lomba']);
    $peserta = htmlspecialchars($data['peserta']);
    $bukti = upload();

    if (!$bukti) {
        die;
    }

    $query = "INSERT INTO daftar_lomba VALUES 
            ('  ', '$nama', '$alamat', '$status', '$instansi', '$wa',
            '$email', '$cabang', '$peserta', '$bukti')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}
