        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SIM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
	<?php
	include"koneksi.php";
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
	Tambah SIM
	</div>
	<form method="post" class="form-group" action="?module=tambah_sim" enctype="multipart/form-data" style="margin-top:20px;">
		<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
		
		<input type="text" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control"><br>
		<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control"><br>
		<td><select name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
			<option value="pilih">--Jenis Kelamin--</option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select></td></tr><br>
		<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
		</td><td><select name="agama"  placeholder="Kebangsaan" class="form-control">
			<option value="pilih">--Agama--</option>
			<option value="Islam">Islam</option>
			<option value="kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="buddha">Buddha</option>
		</select></td></tr><br>
		<input type="text" name="tinggi" placeholder="Tinggi" class="form-control"><br>
		<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control"><br>
		<td><select name="ket" placeholder="Keterangan" class="form-control">
			<option value="pilih">--Pilih--</option>
			<option value="Baru">Baru</option>
			<option value="Perpanjang">Perpanjang</option>
		</select></td></tr><br>
		
		<input type="date" name="masa" placeholder="Berlaku Sampai" class="form-control"><br>
		<input type="text" name="no_sim" placeholder="No Sim" class="form-control"><br>
		<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>

	</form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>