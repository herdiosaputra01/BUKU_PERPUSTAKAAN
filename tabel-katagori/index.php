<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Katagori Buku</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <?php
    include_once('../navbar.php');
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Data Katagori Buku</h3>
                        <span class="float-end"><a class="btn btn-primary btn-sm" href="form.php"><i class="fa-solid fa-square-plus"></i> tambah data</a></span>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Katagori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #1. koneksikan file ini
                                include("../koneksi.php");

                                #2. menulis query
                                $tampil = "SELECT * FROM katagoris";

                                #3. jalankan query
                                $proses = mysqli_query($koneksi, $tampil);

                                #4. looping data dari database
                                $nomor = 1;
                                foreach ($proses as $data) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++ ?></th>
                                        <td><?= $data['nama_katagori'] ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="edit.php?"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus">
                                                <i class="fa-solid fa-eraser"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">PERINGATAN</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Data <b><?=$data['nama_katagori']?></b> Ingin Dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="hapus.php?katagori=<?=$data['nama_katagori']?>" class="btn btn-danger">Hapus</a>
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

            <script src="../js/bootstrap.js"></script>
            <script src="../js/bootstrap.bundle.js"></script>
            <script src="../js/all.js"></script>
</body>

</html>