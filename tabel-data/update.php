<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$jl= $_POST['judul'];
$ps = $_POST['penulis'];
$cr = $_FILES['foto'];

$simpan = "INSERT INTO bukus (judul,penulis,foto) 
VALUES ('$judul_buku','$penulis','$cover_buku')";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>