<!DOCTYPE html>
<html>
<head>
    <title>Dosen</title>
</head>
<body bgcolor="aqua">
    <?php
        include('koneksi.php');
        $id     = $_GET['id'];
        $mhs    = mysqli_query($koneksi,"SELECT * FROM wali WHERE id='$id'");
        $data   = mysqli_fetch_array($mhs);
        ?>
        <center><h3>Show Data Wali</h3></center>
        <fieldset style="width: 50%; margin: auto;">
        <legend> Form Show Biodata Wali</legend>
             <input type="hidden" name="id" value="<?php echo $data['id'];?>">
             <p>
                Nama Lengkap Wali<br />
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
             </P>

             </fieldset>
        
                 <br/><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>

</body>
</html>