<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil id dari tombol hapus
$judul_buku = $_GET['judul_buku'];

#3. menulis query
$hapus = "DELETE FROM bukus WHERE judul_buku='$judul_buku'";

#4. jalankan query
$proses = mysqli_query($koneksi, $hapus);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>