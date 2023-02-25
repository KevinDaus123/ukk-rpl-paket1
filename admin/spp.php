<h5>Halaman Data SPP.</h5>
<a href="?url=tambah-spp" class="btn btn-primary"> Tambah SPP </a>
<hr>
<table class="table table-striped table-bordered">
	<tr class="fw-bold">
		<td>No</td>
		<td>Tahun</td>
		<td>Nominal</td>
		<td>Edit</td>
		<td>Hapus</td>
	</tr>
	<?php
	include'../koneksi.php';
	$no = 1;
	$sql = "SELECT*FROM spp ORDER BY id_spp DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach($query as $data){ ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['tahun'] ?></td>
			<td><?= $data['nominal'] ?></td>
			<td>
				<a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-warning'>EDIT</a>
			</td>
			<td>
				<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-danger'>HAPUS</a>
			</td>
		</tr>
	<?php } ?>
	
</table>