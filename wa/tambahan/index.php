<?php
	include "koneksi.php";
?>
<html>
<head>
	<title>Registrasi</title>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	
	<meta property="og:title" content="Registrasi" />
	<meta property="og:description" content="Registrasi Untuk Mendapatkan OrderLink" />
	<meta name="og:image" content="http://hatiku-umrah.com/wa/gambar/Registrasi.png" />
	
</head>
	<body>
		<div id="waktu"> </div>
 		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 		<script type="text/javascript" src="js/count.js"></script>
	
		<div class="pageLoader"></div>
		<br />

		<div class="container">
			<div class="card">
				<div class="card-body">
					<h2>Registrasi</h2>
					<p>Silahkan registrasi terlebih dahulu bila ingin mendapatkan WA OrderLink</p>
					<br>
					<form method="post" action="proses.php" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="namadpn" class="col-sm-2 col-form-label">Nama Depan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="namadpn" placeholder="Masukkan Nama Depan" required/>
							</div>
						</div>
						<div class="form-group row">
							<label for="namablk" class="col-sm-2 col-form-label">Nama Belakang</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="namablk" placeholder="Masukkan Nama Belakang" required/>
							</div>
						</div>						
						<div class="form-group row">
							<label for="nega" class="col-sm-2 col-form-label">Negara</label>
							<div class="col-sm-10">												
								<select name="negara" class="form-control">
									<option value="neg" selected>- Pilih Negara -</option>
										<?php
										$QryPrm = mysqli_query($conn,"select * FROM parameter WHERE param1='nomor' order by param2 asc");
										while ($data=mysqli_fetch_array($QryPrm)){
										echo "<option value='".$data[nama]."'>".$data[param2]."</option>";
										}
										?>
								 </select>
							</div>
						</div>
						<div class="form-group row">
							<label for="no" class="col-sm-2 col-form-label">Nomor WhatsApp</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no" placeholder="08xx xxxx" required/>
							</div>
						</div>
						<div class="form-group row">
							<label for="gambar" class="col-sm-2 col-form-label">Foto (Max : 180 KB)</label>
							<div class="col-sm-10">
								<input type="file" name="gambar" />
							</div>
						</div>
						<div class="form-group row">
	    	        		<div class="offset-sm-2 col-sm-10">
            					<input type="submit" id="submit" value="Daftar" class="btn btn-info" />            					
            				</div>
	            		</div>					
					</form>
				</div>
			</div>
		</div>
		<form action="orderLink.php" method="get">
            <input type="hidden" class="form-control" name="username" placeholder="Masukkan Username">
			<input type="hidden" class="pull-right btn btn-info" value="Kirim">
		</form>
	</body>

</html>