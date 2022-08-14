<?php
include 'functions.php';

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    exit;
}

if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil!');
        </script>";
} else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="icon" href="img/Logo Counfest.png">
</head>

<body>
    <div class="container d-flex align-items-center">
        <div class="container shadow p-4 mt-3 w-auto" style="min-width: 150px; max-width: 500px;">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Row Logo -->
                    <div class="row">
                        <div class="d-inline-flex justify-content-center">
                            <img class="img-fluid me-2" width="50px" src="img/Logo Kopma Unila.png" alt="" />
                            <img width="50px" src="img//Logo Counfest.png" alt="" />
                        </div>
                    </div>
                    <!-- End Row Logo ---
          
                                   <!-- Start Row Judul -->
                    <div class="row text-center mt-3">
                        <div class="col-12">
                            <h1><strong>Terima Kasih!</strong></h1>
                        </div>
                    </div>

                    <hr />
                    <div class="row justify-content-center">
                        <div class="col-10 text-center mt-3">
                            <p>Terima kasih telah mendaftar, untuk langkah selanjutnya silahkan menghubungi panitia melalui tombol di bawah</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-7 text-center">
                            <!-- TODO: Request link to join grup from Nafisa -->
                            <a href="https://chat.whatsapp.com/H90nvOiSg2tJrtAkDahXDY">
                                <button class="btn btn-success mt-3 p-2">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-1">
                                            <ion-icon style="font-size: 22px" name="logo-whatsapp"></ion-icon>
                                        </div>
                                        <div class="col-8">
                                            <div>Chat Me</div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>