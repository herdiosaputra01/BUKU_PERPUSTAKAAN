<?php
#1. koneksikan file ini
include("../koneksi.php");

$jl = $_POST['judul_buku'];
$ps = $_POST['penulis'];
$ki = $_POST['katagori'];
$cr = $_FILES['cover_buku']['foto'];


$simpan = "INSERT INTO bukus (judul_buku, penulis, cover_buku, id_katagori) 
          VALUES ('$judul_buku', '$penulis', '$katagori','$cover_buku')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1. Proses Upload File
$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>