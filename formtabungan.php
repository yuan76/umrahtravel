<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Form Tabungan | HTKIndonesia </title>
	<link rel="shortcut icon" href="img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">
	
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">		
		<a class="navbar-logo js-scroll-trigger" href="javascript:;">
			<img src="img/logo.png" /> 
		</a>
        <a class="navbar-brand js-scroll-trigger" href="javascript:;">
			<div class="navbar-brand-top"> Tour & Travel </div>
			<div class="navbar-brand-bottom"> PT. Hijau Tumbuh Kembang Indonesia </div>
		</a>
		
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Beranda</a>			 
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://biayaumrohhaji.id/tour/">Paket Umroh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="javascript:;" id="program">Program</a>
			  <div class="ab">
			   <ul class="navbar-nav ml-auto-child">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="tabungan.php">Tabungan Umroh</a>
				</li>	
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="talangan.php">Talangan Umroh</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="peluang.php">Peluang Usaha</a>
				</li>
			   </ul>
			   </div>
            </li>
			<!--
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			-->
          </ul>
        </div>
      </div>
    </nav>
	<div id="backgroundTab">

	</div>
    <header class="masthead text-center text-white d-flex">

	   <div class="container my-auto" >

	  
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-uppercase">
             <strong>FORM TABUNGAN</strong>
            </h2>
            <hr>
          </div>
        </div>
	
      </div>
    </header>

    <section class="bg-primary">
      <div class="container">
     <h2>Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  
  <form class="modal-content" action="">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="container">
      <h2>Form Tabungan</h2>
      <hr>
      <label for="email"><b>Nama (Wajib Di isi)</b></label>
      <input type="text" placeholder="Masukkan Nama" name="nama" required>

      <label for="psw"><b>Email (Wajib Di isi)</b></label>
      <input type="password" placeholder="Masukkan Email" name="email" required>

      <label for="psw-repeat"><b>Alamat Lengkap (Wajib Di isi)</b></label>
      <input type="password" placeholder="Masukkan Alamat" name="alamat" required>	  
	  
      <label for="email"><b>Nomor HP (Wajib Di isi)</b></label>
      <input type="text" placeholder="Masukan Nomor HP" name="nope" required>

      <label for="psw"><b>Nomor KTP (Wajib Di isi)</b></label>
      <input type="password" placeholder="Masukkan Nomor KTP" name="noktp" required>
	  
	  <label for="email"><b>Buka Rekening Awal Tabungan (Wajib Di isi)</b></label>
	  <select class="form-control" name="rekaw" required>
        <option>500.000 + 50.000</option>
		<option>1.000.000 + 50.000</option>
		<option>1.500.000 + 50.000</option>
		<option>2.000.000 + 50.000</option>											
      </select>

      <label for="psw"><b>Estimasi Menabung per bulan, Misal 300.000 (Wajib Di isi)</b></label>
      <input type="password" placeholder="Masukkan Estimasi Menabung" name="estimasi" required>
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Kembali</button>
        <button type="submit" class="signupbtn">Kirim</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      </div>
    </section>
		
    <section id="contactMenu">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Hubungi Kami</h2>
            <hr class="my-4" id="menu-contact">
		  </div>
        </div>
        <div class="row">
		
          <div class="col-lg-4 ml-auto text-center">
			<a href="javascript:;">
				<img src="img/logoKontak/telp.png" class="logoKontak" />
				<p>+62-8222 0000 170</p>
			</a>  
          </div>
				
          <div class="col-lg-4 mr-auto text-center">
			<a href="https://api.whatsapp.com/send?phone=6282220000170&text=HTK%20Indonesia">
				<img src="img/logoKontak/wa.png" class="logoKontak" />
				<p>+62-8222 0000 170</p>
			</a>  	
          </div>
		  
		  <div class="col-lg-4 mr-auto text-center">
			<a href="https://htkindonesia.com/">
				<img src="img/logoKontak/web.png" class="logoKontak" />
				<p>https://htkindonesia.com</p>
			</a>  	
          </div>
		
        </div>
      </div>
    </section>
	
    <section class="bg-dark text-white">
      <div class="container text-center" >
		<div class="gambar-footer">
		
		</div>
		<div class="tulisan">
			<p>
			Hijau Tumbuh Kembang Indonesia Tempat Pendaftaran Umroh Berijin Resmi
			</p>
		</div>		
		<div class="tulis-footer">
			Copyright © <?php echo date("Y") ?> - PT Hijau Tumbuh Kembang Indonesia
		</div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript 
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <!--<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
