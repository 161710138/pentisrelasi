<!DOCTYPE html>
<html>
<head>
    <title>Dosen</title>
</head>
<body bgcolor="aqua">
    <?php
        include('koneksi.php');
        $id     = $_GET['id'];
        $mhs    = mysqli_query($koneksi,"SELECT * FROM dosen WHERE id='$id'");
        $data   = mysqli_fetch_array($mhs);
        ?>
        <center><h3>Show Data Dosen</h3></center>
        <fieldset style="width: 50%; margin: auto;">
        <legend> Form Show Biodata Dosen</legend>
             <input type="hidden" name="id" value="<?php echo $data['id'];?>">
             <p>
                Nama Lengkap Dosen<br />
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" readonly>
             </P>
             <p>
                Nomor Induk Pengajar Dosen<br />
                <input type="text" name="nipd" class="form-control" value="<?php echo $data['nipd'];?>" readonly>
             </p>
             </fieldset>
        
                 <br/><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>

</body>
</html>