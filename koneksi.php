<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'dbb_spp');

if (!$koneksi) {
	echo "Koneksi Anda Gagal";
}
