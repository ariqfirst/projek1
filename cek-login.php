<?php 
session_start();
include"koneksi.php";
$username=$_POST['user'];
$password=md5($_POST['pass']);

$query=mysqli_query($conn,"select * from user_login where username='$username' and password='$password'");

$cek=mysqli_num_rows($query);

if ($cek > 0) {
  header("location:indeks_admin.php");
}

else {
 
      echo"login gagal";
}
?>