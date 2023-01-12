<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Data Surat Tugas</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tbl_layanan where id_skck='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='../../../img/polri.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>POLSEK DEPOK TIMUR<br>
    DAERAH ISTIMEWA YOGYAKARTA </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Padjajaran, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT KEHILANGAN BUKU TABUNGAN</h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$d[id_skck]"; ?>/198/POLSEK/309.07/VIII/2023</p></td>
</tr> 
</table>
<br>
<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Nama Lengkap</td>
<td width="65%">: <?php echo "$d[nama]";?></td>
</tr>
<tr>
<td>2</td>
<td>No telephone</td>
<td>: <?php echo "$d[no_telephone]";?></td>
</tr>
<tr>
<td>3</td>
<td>Jenis Kalamin</td>
<td>: <?php echo "$d[jenis_kelamin]";?></td>
</tr>

<tr>
<td>4</td>
<td>Tanggal Lahir</td>
<td>: <?php echo "$d[tmp_lahir]";?>/ <?php echo TanggalIndo($d['tgl_lahir']);?></td>
</tr>
<tr>
<td>5</td>
<td>Alamat</td>
<td>: <?php echo "$d[alamat]";?></td>
</tr>
<tr>
<td>6</td>
<td>Agama</td>
<td>: <?php echo "$d[agama]";?></td>
</tr>
<tr>
<td>7</td>
<td>Pekerjaan</td>
<td>: <?php echo "$d[pekerjaan]";?></td>
</tr>
<tr>
<td>8</td>
<td>Kronologi</td>
<td>: <?php echo "$d[kronologi]";?></td>
</tr>
<tr>
<td>9</td>
<td>Warga Negara</td>
<td>: <?php echo "$d[kebangsaan]";?></td>
</tr>
<tr><br><br>
<!-- <td>10</td>
<td>Keterangan</td>
<td>: <?php echo "$d[keterangan]";?></td>
</tr> -->

</table>

<p>Dengan ini saya selaku yang bersangkutan memohonkan kepada &quot;POLSEK DEPOK TIMUR&quot; untuk segera melakukan pemrosesan :</p>
<h3 align="center"><?php echo "$d[keperluan]";?> </h3>
<br>Demikian surat ini saya buat dengan sebenar-benarnya untuk dipergunakan sebagaimana mestinya. 
<br><br><br>
<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table>
            
            <tr>
              <td>Yogyakarta,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          <b>PEMOHON</b><br><br><br><br>

          <b><u><?php echo "$d[nama]";?></u></b><br>
        </center>
    </td>
  </tr>
</table> 
</body>