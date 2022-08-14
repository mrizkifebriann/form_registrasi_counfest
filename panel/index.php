<?php
require '../functions.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM daftar_lomba";
$pendaftar = query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="icon" href="../img/Logo Counfest.png">
    <title>Data Pendaftar Counfest</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100 px-sm-5">
        <div class="container-fluid">
            <a class="navbar-brand d-flex me-auto" href="#">
                <img height="55px" src="../img/Logo Counfest.png" alt="Logo Counfest">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                <ion-icon style="font-size: 26px;" name="person-circle-outline"></ion-icon>
                            </span>
                        </a>

                        <ul class="dropdown-menu" style="left: -100px;" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main style="margin-top: 80px;">
        <div class="container p-0">
            <div class="row pt-3 mb-3">
                <div class="col">
                    <h4 class="ps-3">Data Peserta</h4>
                </div>
                <hr>
            </div>
            <!-- <div class="row mx-2 mb-2"> -->
            <!-- <div class="col d-flex justify-content-between"> -->
            <!-- Search Fiela -->
            <!-- <div class="col d-flex align-items-center"> -->
            <!-- <a class="btn btn-success btn-sm text-white align-items-center me-2 rounded-3" href="tambah_data.php"> -->
            <!-- <span class="fs-6 align-middle"> -->
            <!-- <ion-icon name="add-outline"></ion-icon> -->
            <!-- </span> -->
            <!-- <span class="align-middle">Add</span> -->
            <!-- </a> -->
            <!-- <ion-icon name="search-outline" class="ms-auto"></ion-icon> -->
            <!-- <form class="form w-25"> -->
            <!-- <input type="search" class="form-control d-flex rounded-pill ms-1" style="height: 28px;" placeholder="Search" aria-label="Search" id="fieldSearch" autocomplete="off"> -->
            <!-- </form> -->
            <!-- </div> -->
            <!-- Search Field -->

            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->
            <div class="container overflow-scroll table-responsive">
                <table class="table table-striped tabel-data fs-6" style="font-size: 12px; width: auto;" id="tableData">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Asal Instansi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cabang Lomba</th>
                        <th scope="col">Jenis Peserta</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($pendaftar as $d) { ?>
                        <tr id="<?= $d['id'] ?>">
                            <td><?= $i++ ?></td>
                            <td><?= $d['nama'] ?></td>
                            <td><?= $d['alamat'] ?></td>
                            <td><?= $d['status'] ?></td>
                            <td><?= $d['instansi'] ?></td>
                            <td><?= $d['nomor_whatsapp'] ?></td>
                            <td><?= $d['email'] ?></td>
                            <td><?= $d['cabang_lomba'] ?></td>
                            <td><?= $d['jenis_peserta'] ?></td>
                            <td class="row gx-1">
                                <a target="_blank" class="w-25 col btn btn-primary btn-sm d-flex justify-content-center align-items-center" href="../upload/<?= $d['cabang_lomba'] ?>/<?= $d['bukti_pembayaran'] ?>">
                                    <ion-icon name="receipt-outline" size="small"></ion-icon>
                                </a>
                                <a class="w-25 col btn btn-danger btn-sm d-flex justify-content-center align-items-center" href="delete.php?id=<?= $d['id'] ?>">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>