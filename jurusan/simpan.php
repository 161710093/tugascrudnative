<?php
include ('koneksi.php');

$jurusan = $_POST ['jurusan'];

$tambah = "INSERT into jurusan set jurusan ='$jurusan'";
mysqli_query ($koneksi,$tambah);
header("location:lihatdatajurusan.php");
?>