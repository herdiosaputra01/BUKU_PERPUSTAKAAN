<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$ki = $_POST['katagori'];

#3. menulis query
$simpan = "INSERT INTO katagoris (ki) VALUES (' $katagori')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");

?>
<script>
    document.location="index.php";
</script> 