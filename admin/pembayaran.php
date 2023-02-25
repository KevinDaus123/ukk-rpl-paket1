<h5>Halaman Pilih Data Siswa Untuk Pembayaran.</h5>
<hr>
<table class="table table-striped table-bordered">
	<tr class="fw-bold">
		<td>No</td>
		<td>NISN</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>SPP</td>
		<td>Nominal</td>
		<td>Sudah Dibayar</td>
		<td>Kekurangan</td>
		<td>Status</td>
		<td>History</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama ASC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){
		$data_pembayaran = mysqli_query($koneksi,"SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn='$data[nisn]'");
		$data_pembayaran = mysqli_fetch_array($data_pembayaran);
		$sudah_bayar = $data_pembayaran['jumlah_bayar'];
		$kekurangan = $data['nominal']-$data_pembayaran['jumlah_bayar'];
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['nisn'] ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['nama_kelas'] ?></td>
			<td><?= $data['tahun'] ?></td>
			<td><?= number_format($data['nominal'],2,',','.'); ?></td>
			<td><?= number_format($sudah_bayar,2,',','.'); ?></td>
			<td><?= number_format($kekurangan,2,',','.'); ?></td>
			<td>
				<?php
				if($kekurangan==0){
					echo"<span class='badge text-bg-success'> Sudah Lunas </span>";
				}else{ ?>
					<a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kekurangan ?>" class="btn btn-danger"> Pilih & Bayar </a>
				<?php } ?>

			</td>
			<td>
				<a href="?url=history-pembayaran&nisn=<?= $data['nisn'] ?>" class='btn btn-info'>History</a>
			</td>
		</tr>
	<?php } ?>
	
</table>