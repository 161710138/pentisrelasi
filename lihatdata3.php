<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body bgcolor="aqua">
  <a href="lihatdata.php">Dosen</a>
  <a href="lihatdata2.php">Wali</a>
  <a href="lihatdata3.php">Mahasiswa</a>
      
        <h1>Data Biodata</h1>

        <td><a href='tambah3.php?id=$data[id]'>Tambah Data ></a></td>
        <br></br>

  <table border="3">
    <th>Nomor</th>
    <th>Nama Lengkap</th>
    <th>Nim </th>
    <th>Id Wali </th>
    <th>Id Dosen </th>
    <th colspan="3"><center>Opsi</center></th>
 
  <?php
  include('koneksi.php');
  $mk = mysqli_query($koneksi, "SELECT mahasiswa.id , mahasiswa.nama , mahasiswa.nim , mahasiswa.id_dosen , mahasiswa.id_wali FROM mahasiswa INNER join dosen on mahasiswa.id_dosen = dosen.id INNER join wali on mahasiswa.id_wali = wali.id");
  $ni = 1;
  foreach ($mk as $sw) {
    echo "<tr>
     <td>$ni</td>
     <td>".$sw['nama']."</td>
     <td>".$sw['nim']."</td>
     <td>".$sw['id_wali']."</td>
     <td>".$sw['id_dosen']."</td>
     <td><a href='show3.php?id=$sw[id]'>Show</a></td>
     <td><a href='edit3.php?id=$sw[id]'>Edit</a></td>
     <td><a href='delete3.php?id=$sw[id]'>Delete</a></td>
     </tr>";
     $ni++;
  }
  ?>
</center>
  </body>
</html>