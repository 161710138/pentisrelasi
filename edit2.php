<!DOCTYPE html>
<html>
<head>
	<title>Dosen</title>
</head>
<body bgcolor="aqua">
    <?php
        include('koneksi.php');
        $id 	= $_GET['id'];
        $mhs	= mysqli_query($koneksi,"SELECT * FROM wali WHERE id='$id'");
        $data	= mysqli_fetch_array($mhs);
        ?>
        <center><h3>Edit Data Wali</h3></center>
        <fieldset style="width: 50%; margin: auto;">
        <legend> Form Edit Biodata Wali</legend>
            <form action ="simpanedit2.php" method="post">
             	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
             <p>
                Nama Lengkap Wali<br />
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
    
             <p>
                 <input type="submit" value="Simpan" />
                 </p>
                 </form>
                 </fieldset>
                 <br/><center><a href="lihatdata2.php" class="btn btn-primary">&Lt; Lihat Data</a></center>

</body>
</html>