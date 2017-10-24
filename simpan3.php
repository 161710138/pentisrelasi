<?php
include ('koneksi.php');
$namamh = $_POST['namamh'];
$nim = $_POST['nim'];
$nmds = $_POST['id_dosen'];
$nmwl = $_POST['id_wali'];

$tmbms = "INSERT INTO mahasiswa SET nama= '$namamh',nim='$nim', id_dosen='$nmds',id_wali='$nmwl'";
mysqli_query($koneksi,$tmbms);
header("location:lihatdata3.php");
?>