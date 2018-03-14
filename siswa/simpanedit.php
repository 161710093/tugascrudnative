<?php 
include ('koneksi.php');

$id =$_POST['id'];
$nis =$_POST['nis'];
$nama =$_POST['nama'];
$jk=$_POST['jk'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$kelas=$_POST['kelas'];

$edit ="UPDATE siswa SET nis='$nis', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', kelas_id='$kelas' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdatasiswa.php");
 ?>