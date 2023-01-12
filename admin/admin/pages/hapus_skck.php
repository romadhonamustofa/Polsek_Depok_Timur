<?php
include "koneksi.php";
$bk=$_GET['id'];
mysqli_query($conn, "DELETE FROM tbl_layanan WHERE id_skck='$bk'");
echo "<script>alert('Data Sukses Terhapus');
					window.location='index.php?module=skck';
				</script>";
 ?>