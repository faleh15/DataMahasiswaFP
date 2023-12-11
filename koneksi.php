<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'datamahasiswa');

if (!$koneksi) {
	echo "koneksi gagal ";
}else{
	echo "berhasil";
}
