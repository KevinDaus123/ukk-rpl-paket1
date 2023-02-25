<?php

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include'../koneksi.php';
$sql = "INSERT INTO spp(tahun,nominal) VALUES('$tahun','$nominal')";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=spp");
}else{
	echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=spp');</script>";
}


