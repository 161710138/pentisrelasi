<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body bgcolor="aqua">
  <center><h3>Show Data Mahasiswa</h3></center>
  <fieldset style="width: 50%; margin: auto;">
  
  
  <form action="show2.php" method="post" >
      <a href="lihatdata2.php">Wali</a>
      <a href="lihatdata.php">Dosen</a>
      <a href="lihatdata3.php">Mahasiswa</a>
      
       <?php
  include('koneksi.php');
  $mk = mysqli_query($koneksi, "SELECT mahasiswa.id , mahasiswa.nama , mahasiswa.nim , mahasiswa.id_dosen , mahasiswa.id_wali FROM mahasiswa INNER join dosen on mahasiswa.id_dosen = dosen.id INNER join wali on mahasiswa.id_wali = wali.id");
$sw = mysqli_fetch_array($mk);
?>
          <center><h1 style="font-size:20pt;"><font face="augie" color="black">Data Mahasiswa Id : <?php echo $sw['id'];?></h1>
       <br>
        
    <input type="hidden" name="id" value="<?php echo $sw['id'];?>">
    
        <label>Nama Lengkap :</label>
        <input type="text" class="form-control" placeholder="Nama" width="150px" height="150px" name="namamhs" value="<?php echo $sw['nama'];?>" readonly>
        <br>
        <br/>

        <label>Nim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
        <input type="text" class="form-control" placeholder="Nim" width="150px" height="150px" name="nim" value="<?php echo $sw['nim'];?>" readonly>
        <br>
        <br/>

        <label>Id_wali&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
        <input type="text" class="form-control" placeholder="Nim" width="150px" height="150px" name="id_dosen" value="<?php echo $sw['id_wali'];?>" readonly>
        <br>
        <br/>
        
        <label>Id_dosen&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
        <input type="text" class="form-control" placeholder="Nim" width="150px" height="150px" name="id_wali" value="<?php echo $sw['id_dosen'];?>" readonly>
        

  </table>
  </body>
</html>