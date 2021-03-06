<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lihat Data Siswa</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: aqua">
  <nav class="navbar navbar-default" style="background-color:magenta">
  <div class="container-fluid" style="background-color:magenta">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
  <div style="background-color: magenta" class="collapse navbar-collapse" id="bs-example-navbar-collpase-1">
  <br>
<ul class="nav nav-pills">
  <li><a href="/tugascrud/data.php"><img src="assalaam.jpg" height="30px">SMK ASSALAAM BANDUNG</a></li>
  <li><a class='btn btn-info' href="/tugascrud/jurusan/lihatdatajurusan.php">Jurusan</a></li>
  <li><a class='btn btn-info' href="/tugascrud/kelas/lihatdatakelas.php">Kelas</a></li>
  <li><a class='btn btn-info' href="/tugascrud/siswa/lihatdatasiswa.php">Siswa</a></li>
  <ul class="nav navbar-nav navbar-right">
  <li><a href="profil.php"><img src="annisa.jpg" height="30px">Profile</a></li>
  </ul>
</nav>
  </div>
    <center>
    <h1 style="color: violet"><font face="algerian">Data Siswa</font></h1>
    <table class=" table table-bordered">
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Nomor</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian">Nomor Induk Siswa</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Nama</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Jenis Kelamin</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Tempat lahir</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Tanggal Lahir</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Alamat</center></font></th>
    <th bgcolor="magenta" style="color: white"><font face="algerian"><center>Kelas</center></font></th>
    <th bgcolor="magenta" style="color: white" colspan ="3"><font face="algerian"><center>Opsi</center></font></th>
  <?php
  include('koneksi.php');
  $ma = mysqli_query($koneksi, "SELECT siswa.id , siswa.nis , siswa.nama , siswa.jk , siswa.tempat_lahir , siswa.tgl_lahir , siswa.alamat , kelas.kelas as nama_kelas FROM siswa JOIN kelas on kelas.id=siswa.kelas_id");
  // SELECT * from siswa s join kelas k on s.kelas_id=k.id join jurusan j on k.jurusan_id=j.id
  $no = 1;
  foreach ($ma as $data) {
    echo "<tr bgcolor=white>
     <td>$no</td>
     <td><center>".$data['nis']."</center></td>                   
     <td><center>".$data['nama']."</center></td>
     <td><center>".$data['jk']."</center></td>
     <td><center>".$data['tempat_lahir']."</center></td>
     <td><center>".$data['tgl_lahir']."</center></td>
     <td><center>".$data['alamat']."</center></td>
     <td><center>".$data['nama_kelas']."</center></td>
     <td><center><a class='btn btn-success' href='show.php?id=$data[id]'>Show</a></center></td>
     <td><center><a class='btn btn-warning' href='edit.php?id=$data[id]'>Edit</a></center></td>
     <td><center><a class='btn btn-danger' href='delete.php?id=$data[id]'>Delete</a></center></td>
     </tr>";
     $no++;
  }
  ?>
</table>
</center>
<br>
<center>
<a class="btn btn-primary" href="tambah.php"> + Tambah Data Siswa </a></center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
