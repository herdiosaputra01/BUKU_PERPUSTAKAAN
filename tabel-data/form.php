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
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Buku</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Katagori</label>
                    <select name="Katagori" class="form-control" id="">
                        <option value="">-Pilih Katagori-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_kat = "SELECT * FROM katagoris";
                            $qry_kat = mysqli_query($koneksi,$sql_kat);
                            foreach($qry_kat as $data_kat){
                                ?>
                                <option value="<?=$data_kat['id_katagori']?>"><?=$data_kat['nama_katagori']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cover Buku</label>
                    <input type="file" accept="image/*" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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