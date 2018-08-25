<?php
	include "koneksi.php";
	//include "readNope.php";

	// $x = read_no($conn,$dbname,085655009393);
	// var_dump($x);
	// var_dump(read_no($conn,$dbname,085655009393));
	// var_dump(read_no($conn,$dbname,085655009393));
	// exit();
	$user=$_GET['q'];
	
	$cekRef = mysqli_query($conn, "select * from pengguna where username='$user'");
	if (mysqli_num_rows($cekRef) > 0) {
?>
<html>
<head>
	<title>Registrasi</title>

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<meta property="og:title" content="Registrasi" />
	<meta property="og:description" content="Registrasi Untuk Mendapatkan OrderLink" />
	<meta name="og:image" content="http://hatiku-umrah.com/wa/gambar/Registrasi.png" />

	<script type="text/javascript">
	/*
		function validasiNope() {
			$.ajax({
				url:'validasiNope.php',
				data:{
					'no':$('#no').val()
				},type:'post',
				dataType:'json',
				success:function(ret){
					console.log(ret);
					// if($.isNumeric(ret.nomor)){
					if(ret.warning==null){
						$('#validasiWarning').attr('style','color:green');
						$('#validasiWarning').html(ret.nomor+' (negara:'+ret.negara+')');
					} else {
						$('#validasiWarning').attr('style','color:red');
						$('#validasiWarning').html(ret.warning);
					}

				}, error : function (xhr, status, errorThrown) {
						console.log('['+xhr.status+'] '+errorThrown);
				}
			});
		}
	*/
	</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122153295-2"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122153295-2');
</script>

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
										echo "<option value='".$data[nama]."'>".$data[nama].' '.$data[param2]."</option>";
										}
										?>
								 </select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-2 col-form-label">Nomor WhatsApp</label>
							<div class="col-sm-10">
								<input xonchange="validasiNope();" type="text" class="form-control" name="no" id="no" placeholder="08xx xxxx" required/>
							</div>
							<label for="no" class="col-sm-2 col-form-label"></label>
							<span id="validasiWarning" style="color:red;" class="col-sm-10"></span>
						</div>
						
						<div class="form-group row">
							<label for="gambar" class="col-sm-2 col-form-label">Foto (Max : 180 KB)</label>
							<div class="col-sm-10">
								<input type="file" name="gambar" />
							</div>
						</div>
						<!--
						<div class="form-group row">
							<label for="gambar" class="col-sm-2 col-form-label">Foto (Max : 180 KB)</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="gambar" placeholder="Masukkan URL Foto" required/>
							</div>
						</div>
						-->
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tipe</label>
							<div class="col-sm-10">
								<select class="form-control" name="tipe">
									<?php
										$QryPrm = mysqli_query($conn,"select * FROM parameter WHERE param1='pesanwa' order by param3 asc");
										while ($data=mysqli_fetch_assoc($QryPrm)){
											echo "<option value='".$data['id_param']."'>".$data['nama']."</option>";
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								<input type="hidden" class="form-control" name="ref" value="<?php echo $user;?>"/>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-7 col-form-label">
								<sup>NB : Tipe dipilih berdasarkan tujuan membuat orderlink untuk apa</sup>	
							</label>													
						</div>	
						<div class="form-group row">
							<div class="offset-sm-2 col-sm-10">
								<input type="submit" name="submit" id="submit" value="Daftar" class="btn btn-info" />
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
<?php
	} else {
		echo '
						<div class="pageLoader"></div>
						<br />
						<div class="container">
							<div class="card">
								<div class="card-body" style="text-align:center;">
									<h2>Maaf, nama referal belum terdaftar, mohon ulangi kembali</h2>
									<br>
									<sup>NB : Akan berjalan dengan baik,</sup>
									<sup>bila dibuka dari browser Google Chrome</sup>
								</div>
							</div>
						</div>
			';
	}
?>
