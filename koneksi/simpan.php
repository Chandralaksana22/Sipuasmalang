<?php

//panggil koneksi database
include "koneksi.php";

//tampilkan data tikm
$tampil = mysqli_query($koneksi, "SELECT * from kepuasan limit 1");
$data = mysqli_fetch_array($tampil);
//tampung data ke dalam variabel
$id_kepuasan = $data['id_kepuasan'];
$puas = $data['puas'];
$tidak = $data['tidak'];

//ambil nilai keterangan
$keterangan = $_GET['ket'];

//uji jika keterangan tidak kosong
if(isset($keterangan)){
	//uji jika keterangan = simpan
	if($keterangan == "puas")
	{
		//nilai puas di tambah 1
		$puas = $puas + 1;
		//query update nilai puas dalam tabel tikm
		$query = "UPDATE kepuasan SET puas = '$puas' where id_kepuasan = '$id_kepuasan' ";
	}
	elseif($keterangan == "tidak")
	{
		//nilai cukup di tambah 1
		$tidak = $tidak + 1;
		//query update nilai cukup dalam tabel tikm
		$query = "UPDATE kepuasan SET tidak = '$tidak' where id_kepuasan = '$id_kepuasan' ";
	}

	//update data sesuai query
	mysqli_query($koneksi, $query);
	echo "<script>alert('Terima kasih, anda berhasil memberikan penilaian.');document.location='../index.php'</script>";
}


?>