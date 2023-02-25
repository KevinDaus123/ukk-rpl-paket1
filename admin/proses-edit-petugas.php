<?php
$id_petugas = $_GET['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

include'../koneksi.php';
$sql = "UPDATE petugas SET username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=petugas");
}else{
	echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=petugas');</script>";
}


