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
$proses = mysqli_query($koneksi, $simpan);

#4.1. Proses Upload File
$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>