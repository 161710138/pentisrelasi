<!DOCTYPE html>
<html>
  <head>
    
    <title></title>
  </head>
  <body bgcolor="aqua">
  <center><h3>Tambah Data Mahasiswa</h3></center>
  <fieldset style="width: 50%; margin: auto;">
  
  
  <form action="simpan3.php" method="post">
  
        <a href="lihatdata2.php">Wali</a>
        <a href="lihatdata.php">Dosen</a>
        <a href="lihatdata3.php">Mahasiswa</a>
      
    
       <center><h1 style="font-size:20pt;"><font face="augie"><span class="glyphicon glyphicon-plus" aria-hidden="true" style="color: black"><font face="augie" color="black">Tambah Data</h1>
       <br>
        
        <input type="hidden" name="id" value="<?php echo $sw['id'];?>">
        
        <label>Nama Lengkap :</label>
        <input type="text" class="form-control" placeholder="Nama" width="150px" height="150px" name="namamh" required>
        <br>
        <br/>

        <label>Nim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
        <input type="text" class="form-control" placeholder="Nim" width="150px" height="150px" name="nim" required>
        <br>
      </br>
        
        <label for="name"><font color="black">id Wali:</label>
        
        <?php
        include('koneksi.php');
        $ma = mysqli_query($koneksi,"SELECT * FROM wali");
        ?>
        <select name="id_wali">
          <option>-</option>
          <?php
          foreach ($ma as $data) {
          ?>
          <option value="<?php echo $data['id']  ?>"> <?php echo $data['id']?> </option>
          <?php
          }  ?>
        </select>
        
        <label for="name"><font color="black">id Dosen :</label>
        <?php
        include('koneksi.php');
        $co = mysqli_query($koneksi,"SELECT * FROM dosen");
        ?>
        <select name="id_dosen">
          <option>-</option>
          <?php
          foreach ($co as $aku) {
          ?>
          <option value="<?php echo $aku['id']  ?>"> <?php echo $aku['id']?> </option>
          <?php
          }  ?>
        </select>
        <br>
        </br>
          <button type="submit" class="btn btn-default" style="background-color: darkgrey">Save</button>
        <button type="reset" class="btn btn-default" style="background-color: darkgrey" onclick="return confirm('hapus data yang telah diinput?')">Reset</button>
          </body>
</html>