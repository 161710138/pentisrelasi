<?php
include ('koneksi.php');
$id 	= $_GET['id'];

$delete2 = "DELETE FROM wali WHERE id='$id'";
mysqli_query($koneksi,$delete2);
header("location:lihatdata2.php");
?>