<?php 
include('koneksi.php');
$id =$_GET['id'];

$delete3 = " DELETE FROM Mahasiswa WHERE id='$id'";
mysqli_query($koneksi,$delete3);
header("location:lihatdata3.php");
?>