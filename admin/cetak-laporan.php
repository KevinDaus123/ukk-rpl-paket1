<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Pembayaran-SPP.xls");
?>
<h5>Laporan Pembayaran SPP.</h5>
<hr>
<table border="1" class="table table-striped table-bordered">
	<tr class="fw-bold">
		<td>No</td>
		<td>NISN</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>Tahun SPP</td>
		<td>Nominal Dibayar</td>
		<td>Sudah Dibayar</td>
		<td>Tanggal Bayar</td>
		<td>Petugas</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['nama_kelas'] ?></td>
			<td><?= $data['tahun'] ?></td>
			<td><?= number_format($data['nominal'],2,',','.'); ?></td>
			<td><?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
			<td><?= $data['tgl_bayar'] ?></td>
			<td><?= $data['nama_petugas'] ?></td>
		</tr>
	<?php } ?>
	
</table>