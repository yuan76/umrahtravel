<html>
	<head>
		<title> Registrasi Berhasil </title>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	</head>
	<body>

<?php
	error_reporting(0);
	// print_r($_FILES);
	// exit();
 // if (!isset($_post['submit'])) {
	 // echo "invalid request, you can't access this file directly,you should submit via form, just once ";
// } else {
	include "koneksi.php";
	$ref=$_POST['ref'];	
	
	$cekRef = mysqli_query($conn, "select * from pengguna where username='$ref'");
	if (mysqli_num_rows($cekRef) > 0) {	
		$query = mysqli_query($conn, "select * from countreferal where username='$ref'");
		if (mysqli_num_rows($query) > 0) {
			while($baris=mysqli_fetch_assoc($query)){
				$jumlah=$baris['count'];
			}
			$total=$jumlah+1;
			$update = mysqli_query($conn, "update countreferal set count='$total' where username='$ref'");
			//echo "Data berhasil di update";	
		} else {
			$insert = mysqli_query($conn, "insert into countreferal (username,count) values ('$ref','1')");	
			//echo "Data Berhasil di insert";
		}

		$namadpn = $_POST['namadpn'];
		$namablk = $_POST['namablk'];
		$no = $_POST['no'];
		$gambar = $_POST['gambar'];
		$negara = $_POST['negara'];
		$tipe = $_POST['tipe'];
		$visit=0;
		
		$hapspa=trim($namadpn," ");
		$hapKar1 = preg_replace('/[^A-Za-z0-9\  ]/', '', $hapspa);
		$hapKar2 = preg_replace('/[^A-Za-z0-9\  ]/', '', $namablk);
		$pisah=explode(" ",$hapKar1);
		$namadepan=$pisah[0].$pisah[1];
		$kecilDpn=strtolower($hapKar1);
		$kecilBlk=strtolower($hapKar2);
		
		//echo $kecilDpn." ".$kecilBlk;
		
		$target_file = basename($_FILES["gambar"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["gambar"]["tmp_name"]);
		if($check !== false) {
			$fileName=$_FILES['gambar']['name'];
			$fileSize=$_FILES['gambar']['size'];
			$fileError=$_FILES['gambar']['error'];

			$username=strtolower($namadepan);
			$cekusername = mysqli_query($conn, "select * from orderlink where nama_dpn='$kecilDpn'");
			$tambah=mysqli_num_rows($cekusername);

			if ($tambah <= 0) {
				$userBaru=$username;
			} else {
				$userBaru=$username.$tambah;
			}

			$neg=substr($negara,1);

			if($fileSize > 0 || $fileError == 0){
				$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'gambar/'.$fileName);
				$sql = "insert into orderlink (nama_dpn,nama_blk,kodeNeg,nomor,username,gambar,tipe,visit_counter,referal)
								values ('$kecilDpn','$kecilBlk','$neg','$no','$userBaru','gambar/$fileName','$tipe','$visit','$ref')";
				$query=mysqli_query($conn,$sql);

				if(!$query){
					echo mysqli_error($conn);
				} else {

				// offline testing
					//$mainUrl 	= 'http://localhost/';
					//$subUrl 	= 'putriwa/'; // wa/ atau putriwa/ (sesuaikan nama folder / project)

				// online testing
					 $mainUrl = 'http://hatiku-umrah.com/';
					 $subUrl = 'wa/';

				// full URL
					$url = $mainUrl.$subUrl.$userBaru;
					// <p><a target="_blank" href="http://hatiku-umrah.com/wa/'.$userBaru.'">http://hatiku-umrah.com/wa/'.$userBaru.'</a></p>
					echo '
						<div class="pageLoader"></div>
						<br />
						<div class="container">
							<div class="card">
								<div class="card-body" style="text-align:center;">
									<h2>Selamat, anda berhasil terdaftar</h2>
									<p>Dibawah ini adalah URL OrderLink anda</p>
									<p><a target="_blank" href="'.$url.'">'.$url.'</a></p>
									<br>
									<sup>NB : URL akan berjalan dengan baik,</sup>
									<sup>bila dibuka dari browser Google Chrome</sup>
								</div>
							</div>
						</div>
					';
				}
			
			}	else {
				echo "<script> alert('Foto Belum Dimasukkan');
				window.location='./'</script>";
				// window.location='index.php'</script>";
			}
		} else {
			echo "<script> alert('Format foto yang anda masukkan salah, mohon ulangi kembali');
			window.location='index.php?q=".$ref."'</script>";
		}	
	} else {
		echo "<script> alert('Nama referal anda belum terdaftar, mohon ulangi kembali');
		window.location='index.php?q=".$ref."'</script>";
	}
//}
?>
	</body>
</html>