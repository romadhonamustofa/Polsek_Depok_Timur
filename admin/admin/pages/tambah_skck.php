<?php
include "koneksi.php";
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$kebangsaan = $_POST['kebangsaan'];
	$agama = $_POST['agama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	//$masa = $_POST['masa'];
	//$tmp_lahir = $_POST['tmp_lahir'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$no_telephone = $_POST['no_telephone'];
	$keperluan = $_POST['keperluan'];
	$kronologi = $_POST['kronologi'];
		
		{
		
			
			mysqli_query($conn, "INSERT into tbl_layanan set nama='$nama',jenis_kelamin='$jenis_kelamin',kebangsaan='$kebangsaan',agama='$agama',tgl_lahir='$tgl_lahir',alamat='$alamat', pekerjaan='$pekerjaan', no_telephone='$no_telephone',keperluan='$keperluan',kronologi='$kronologi'");
			echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=skck';
				</script>";
			
		}

	
?>