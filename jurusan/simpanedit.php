<?php
include ('koneksi.php');

$id = $_POST ['id'];
$nama = $_POST ['jurusan'];

$edit = "UPDATE jurusan Set jurusan='$nama'where id='$id'";
mysqli_query ($koneksi,$edit);
header("location:lihatdatajurusan.php");
?>