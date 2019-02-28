<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_saran";

$con = mysqli_connect($host, $user, $pass, $db) or die('KONEKSI GAGAL');

class oop{

	function tampil($con, $table) {
            $sql = "SELECT * FROM $table";
            $query = mysqli_query($con, $sql);
            while ($data = mysqli_fetch_array($query))
                $isi[] = $data;
            return @$isi;
    }
}
?>