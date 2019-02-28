<?php 
session_start();
include "config/koneksi.php";

@$table = "tb_komentar";

if (isset($_POST['simpan'])) {
  $simpan = "INSERT INTO tb_komentar VALUES (null,'$_POST[nama]','$_POST[komentar]','$_POST[rate]')";
  $sim = mysqli_query($con,$simpan);
  if ($sim) {
    echo "<script>alert('Data Berhasil Diinput');document.location.href='';</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="awe.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<style type="text/css">
body {
    background-image: url(img/portfolio/wikrama.jpg); 
}
  .animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration:1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
<body onload="myFunction()">
<form method="post">
<div class="login-page">
  <div id="mydiv" class="animate-bottom">
  <div class="form" align="center" style="border-radius: 10px;">
    <form class="login-form">
      <table style="margin-left: 100px;">
        <tr>
        <p class="h2">Ayo Beri Kami Rating!</p>
          <td><div  class="rate" style="margin-left: 20px;">
          <input type="radio" id="star5" name="rate" value="5"/>
          <label for="star5" title="5 stars">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="4 stars">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="3 stars">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="2 stars">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="1 stars">1 star</label>
          </div></td>
        </tr>
        <tr>
    <td>
    <h5 class="card-title">Nama Instansi</h5>
        <input type="text" name="nama"  class="form-control" placeholder="" required style="margin-bottom: 10px;"></td>
         
  </tr>
  <tr>
    <td>
    <h5 class="card-title">Komentar Anda</h5>
     <textarea class="form-control" rows="5" id="comment" name="komentar" required placeholder="" style="margin-bottom: 10px;"></textarea></td>
  </tr>
  <tr>
    <td><input type="submit" name="simpan" value="SIMPAN" style="width: 200px;height: 50px;" class="btn btn-primary"></td>
  </tr>
      </table>
      <br>
      <a href="menu.php">Back click here...</a>
    </form>
  </div>
</div>
</div>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 20);
}

function showPage() {
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>