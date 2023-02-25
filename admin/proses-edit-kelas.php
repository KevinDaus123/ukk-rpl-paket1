<?php

$id_kelas = $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include'../koneksi.php';
$sql = "UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=kelas");
}else{
	echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=kelas');</script>";
}


