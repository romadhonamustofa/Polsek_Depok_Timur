<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn, "DELETE FROM tbl_lapor WHERE id_laporan='$bk'");
				echo "<script>alert('Data Sukses Terhapus');
					window.location='?module=laporan_diri';
				</script>";
 ?>