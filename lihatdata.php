<?php
session_start();
include "config/koneksi.php";

$perintah = new oop();
@$table = "tb_komentar";




?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<head>
	<title>	</title>
</head>
<body>
  <form method="POST">
<div class="container">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Instansi</th>
      <th scope="col">Komentar</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
  
  <?php       
      $sql= mysqli_query($con,"SELECT * FROM tb_komentar");
      if(isset($_POST['cari'])){
        $sql=mysqli_query($con,"SELECT * FROM tb_komentar WHERE rating LIKE '$_POST[tcari]%'");
      }else{
        $sql= mysqli_query($con,"SELECT * FROM tb_komentar");
      }
      while($r=mysqli_fetch_array($sql)){

          ?>
    <tr>
      <th><?php echo $r['id_komentar']; ?></th>
      <td><?php echo $r['nama']; ?></td>
      <td><?php echo $r['komentar']; ?></td>
      <td><?php echo $r['rating']; ?></td>
    </tr>
  </tbody>
  <?php } ?>
  <a href="login.php">LOGOUT</a>
</table>
</div>
<tr align="center"> 
  <td><input type="text" name="tcari" style="margin-left: 550px; margin-top: 30px; width: 400px" placeholder="Cari..." value="<?php echo @$_POST['tcari']; ?>" class="cari" ></td>
  <br>
  <br>
<input type="submit" name="cari" style="margin-left: 720px;background-color: black  ; color: white;border-radius: 50px; width: 70px;height: 30px;" value="Search">
  </tr>
</form>
</body>
</html>