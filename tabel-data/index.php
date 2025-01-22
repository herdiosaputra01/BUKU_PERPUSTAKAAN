<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Buku</h3>
                <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i>Tambah Data</a></span>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Katagori</th>
                        <th scope="col">Cover Buku</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                #1. koneksikan file ini
                                include("../koneksi.php");

                                #2. menulis query
                                $tampil = "SELECT * FROM bukus";

                                #3. jalankan query
                                $proses = mysqli_query($koneksi, $tampil);

                                #4. looping data dari database
                                $nomor = 1;
                                foreach ($proses as $data) {
                                ?>
                    <tr>
                        <th scope="row"><?=$nomor++?></th>
                        <td><?=$data['judul_buku']?></td>
                        <td><?=$data['penulis']?></td>
                        <td><?=$data['katagori']?></td>
                        <td><?=$data['cover_buku']?></td>
                        <td>

                            <!-- TOMBOL EDIT -->
                            <a class="btn btn-info btn-sm" href="edit.php"><i class="fa fa-pen-to-square"></i></a>
                            
                            <!-- TOMBOL HAPUS -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus">
                            <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- MODAL HAPUS-->
                            <div class="modal fade" id="hapus<?=$data['nim']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin data <b><?=$data['judul_buku']?></b> ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <a href="hapus.php?xyz=<?=$data['nim']?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>