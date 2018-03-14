<?php
include ('koneksi.php');

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['kelas'];

$simpan = "INSERT INTO siswa SET nis = '$nis' , nama ='$nama' ,  jk='$jk', tempat_lahir ='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', kelas_id='$id_kelas'";
mysqli_query($koneksi,$simpan);
header("location:lihatdatasiswa.php");
?>