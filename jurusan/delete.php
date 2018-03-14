<?php
include ('koneksi.php');

$id = $_GET ['id'];

$delete = "DELETE from jurusan where id ='$id'";
mysqli_query ($koneksi,$delete);
header("location:lihatdatajurusan.php");
?>


