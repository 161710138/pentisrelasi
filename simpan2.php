<?php
include ('koneksi.php');

$nama    = $_POST['nama'];

$tambah2 = "INSERT INTO wali SET nama='$nama'";
mysqli_query($koneksi,$tambah2);
header("location:lihatdata2.php");
?>