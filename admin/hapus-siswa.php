<?php

$nisn = $_GET['nisn'];

include'../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=siswa");
}else{
	echo"<script>alert('Maaf Data Tidak Terhapus'); window.locatin.assign('?url=siswa');</script>";
}


