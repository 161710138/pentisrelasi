<?php
include ('koneksi.php');
$id 	= $_POST['id'];
$nama 	= $_POST['nama'];

$edit2 = "UPDATE wali SET nama='$nama' WHERE id='$id'";
mysqli_query($koneksi,$edit2);
header("location:lihatdata2.php");
?>