<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body bgcolor="aqua">
	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$mhs = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
	$data = mysqli_fetch_array($mhs);
	?>
	<center><h3>Edit Data Mahasiswa</h3></center>
	<fieldset style="width: 50%; margin: auto;">
	<legend>Form Edit Data Mahasiswa</legend>
		<form action="simpanedit3.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			Nama Lengkap Mahasiswa <br />
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
		</p>
		<p>
			Nomor Induk Mahasiswa <br />
			<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>" required>
		</p>

		<p>
		id_wali <br />
		<?php
			include('koneksi.php');
			$a= mysqli_query($koneksi,"SELECT * FROM wali");?>
		
		<select name="id_wali">
		<option>-</option>
         <?php
			foreach ($a as $data ) { 
		  ?>

          <option value="<?php echo $data['id']; ?>"> <?php echo $data['nama'] ?> </option>
         <?php } 
         ?> 
	    </select>
	</p>

<p>

		id_dosen <br />
		<?php
			include('koneksi.php');
			$a= mysqli_query($koneksi,"SELECT * FROM dosen");?>
		
		<select name="id_dosen">
		<option>-</option>
         <?php
		foreach ($a as $data ) { 
		  ?>
          <option value="<?php echo $data['id']; ?>"> <?php echo $data['nama'] ?> </option>
         <?php } ?> 
	    </select>
	</p>
	</p>
<p>
			<input type="submit" value="Simpan" />
		</p>
		</form>
	</fieldset>
	<br /><center><a href="lihatdata3.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
</body>
</html>
