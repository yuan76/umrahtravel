<?php
	include "koneksi.php";
	include "readNope.php";

	$username = strtolower($_GET['username']);

// get data
	$sql = "select o.id_order,o.nomor,o.nama_dpn,o.nama_blk,o.gambar,o.kodeNeg,p.nama as tipe,p.param2 as pesan
			FROM orderlink o
				LEFT JOIN parameter p on p.id_param = o.tipe
			WHERE
				o.username='$username' LIMIT 1";
	$qry = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($qry);
		$nope=$data['nomor'];
		$nama=$data['nama_dpn']." ".$data['nama_blk'];
		$foto=$data['gambar'];
		$kode=$data['kodeNeg'];
		$tipe=$data['tipe'];
		$pesan=$data['pesan'];
		$nopeba=$kode.substr($nope,1);

	// update visitor counter
		$sql2 = ' UPDATE orderlink
							SET
								visit_counter =visit_counter+1,
								last_visited=now()
							WHERE id_order='.$data['id_order'];
		$qry2 = mysqli_query($conn,$sql2);

	// full URL
		$url = 'https://api.whatsapp.com/send?phone='.$nopeba.'&text='.urldecode($pesan);

?>
<html>
<head>
	<meta property="og:title" content="<?php echo $nama?>" />
	<meta property="og:description" content="<?php echo $nope?>" />
	<meta name="og:image" content="http://hatiku-umrah.com/wa/<?php echo $foto; ?>" />
	<meta http-equiv="refresh" content="2;url=<?php echo $url; ?>" />
</head>
<body>
	<?php
	/*
	//error_reporting(0);

	include "koneksi.php";
	include "readNope.php";

	$username=strtolower($_GET['username']);
    $qry = mysqli_query($conn,"select nomor FROM orderlink WHERE username='$username'");

	while ($data=mysqli_fetch_row($qry)){
		$nope=$data[0];
	}
	//echo $nope;

	$nopeba=substr(read_no($conn,$dbname,$nope),1);
	//echo $nopeba;

	header("Location: https://api.whatsapp.com/send?phone=$nopeba&text=Assalamualaikum");
*/
	?>
</body>
</html>
