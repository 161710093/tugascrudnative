<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Data Kelas</title>
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
  <ul class="nav nav-pills">
  <li><a href="/tugascrud/data.php"><img src="assalaam.jpg" height="30px">SMK ASSALAAM BANDUNG</a></li>
  <br>
  <li><a class='btn btn-info' href="/tugascrud/jurusan/lihatdatajurusan.php">Jurusan</a></li>
  <li><a class='btn btn-info' href="/tugascrud/kelas/lihatdatakelas.php">Kelas</a></li>
  <li><a class='btn btn-info' href="/tugascrud/siswa/lihatdatasiswa.php">Siswa</a></li>
 <ul class="nav navbar-nav navbar-right">
  <li><a href="profil.php"><img src="annisa.jpg" height="30px">Profile</a></li>
  </ul>
</ul>
</nav>
  </div>
<?php 
include ('koneksi.php');
 $id   =$_GET['id'];
$mhs   =mysqli_query($koneksi,"SELECT * FROM kelas WHERE id='$id'");
$data =mysqli_fetch_array($mhs);
?>
<center><h1 style="color: violet"><font face="algerian">Edit Data Kelas</font></h1></center>
<fieldset style="width:50%;margin: auto; ">
	<legend style="color: violet"><font face="algerian">Form Edit Biodata Kelas</font></legend>
<form action="simpanedit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data ['id'];?>">
<p>
<font face="algerian" style="color: violet">
	Kelas : <br /></font>
  <font face="lucida calligraphy">
	<input type="text" name="kelas" class="form-control"
    value="<?php echo $data['kelas'];?> " required> 
</font>
</p>
<p>
<font face="algerian" style="color: violet">
	Wali Kelas :<br /></font>
  <font face="lucida calligraphy">
	<input type="text" name="wali_kelas" class="form-control" 
	value="<?php echo $data['wali_kelas'];?>" required>
</font>
</p>
 <p>
 <font face="algerian"  style="color: violet">
    Jurusan : <br /></font>
    <font face="lucida calligraphy">
    <?php
    include ('koneksi.php');
    $mhs = mysqli_query($koneksi,"SELECT * from jurusan");
    ?>
    <select name="jurusan" class="form-control">
    <option>jurusan</option>
      <?php 
      foreach ($mhs as $data){
      ?>
      <option value="<?php echo $data['id'];?>"><?php echo $data ['jurusan']?></option>
    <?php
    }  ?>
    </select>
    </font>
  </p>
  <p>
  <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
  </p>
</form>
</fieldset>
<br/>
<center><a class="btn btn-primary" href="lihatdatakelas.php" role="button"> << Tabel Jurusan</a>
</center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>