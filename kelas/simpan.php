<?php
include ('koneksi.php');

$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$wali_kelas = $_POST['wali_kelas'];

$simpan = "INSERT INTO kelas SET kelas = '$kelas' , jurusan_id ='$jurusan' ,  wali_kelas='$wali_kelas'";
mysqli_query($koneksi,$simpan);
header("location:lihatdatakelas.php");
?>