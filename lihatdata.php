<!DOCTYPE html>
<html>
<head>
<body bgcolor="aqua">
<a href="lihatdata.php">Dosen</a>
  <a href="lihatdata2.php">Wali</a>
  <a href="lihatdata3.php">Mahasiswa</a>

    <h1>Data Dosen</h1>

        <td><a href='tambah.php?id=$data[id]'>Tambah Data ></a></td>
		<br></br>

<table border="2">
<th>Nomor</th>
<th>Nama Dosen</th>
<th>Nomor Induk Pengajar Dosen</th>
<th colspan="3">Opsi</th>
<?php
include('koneksi.php');
$ma = mysqli_query($koneksi,"SELECT * FROM dosen");
$no =1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data['nama']."</td>
	<td>".$data['nipd']."</td>
	<td><a href= 'show.php?id=$data[id]'>Show</a></td>
	<td><a href= 'edit.php?id=$data[id]'>Edit</a></td>
	<td><a href= 'delete.php?id=$data[id]'>Delete</a></td>
	</tr>";
     $no++;
 }
	?>
	</center>
</table>
</body>
</html>
