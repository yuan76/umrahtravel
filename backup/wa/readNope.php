<?php
// include ("koneksi.php");

// function read_no($conn,$dbname,$nomor){
function read_no($nomor){
  include "koneksi.php";
  $digawalnol=substr($nomor,0,1);
  $digawal=substr($nomor,1,1);
  $digInti=substr($nomor,1);
  $brpDig=strlen($digInti);
  // var_dump($digawalnol);exit();
  //
  if ($digawalnol == "0") {
    if ($digawal == "8") {
      // return 'lapan';
      $sql = "select * from parameter WHERE param1='nomor' and param3='$digawal'";
      $ambkode = mysqli_query($conn,$sql);
      // print_r($ambkode);exit();
      while ($data=mysqli_fetch_array($ambkode)){
        $kode = $data[1];
        $negara = $data[3];
      }

    }
    else {
      // return 'bkn 8';
      $ambkode = mysqli_query($conn, "select * from parameter WHERE (param1='nomor' and param3='$digawal') and param4='$brpDig'");
      while ($data=mysqli_fetch_array($ambkode)){
        $kode = $data[1];
        $negara = $data[3];
      }
    }
    $nomorba=$kode.$digInti;
    // return $nomorba." dari negara ".$negara."<br>";
	   // return $nomorba;
     return  array(
      'nomor'   => $nomorba,
      'negara'  => $negara,
      'warning' => null,
    );
  } else {
    return array(
      'warning'=>'Maaf, nomor yang anda masukkan salah. Mohon ulangi'
    );
  }
}
?>
