
<?php 
include"koneksi.php";
$i=$_POST["id"];
$n=$_POST["nama"];
$un=$_POST["un"];
$p=md5($_POST["p"]);

if (isset($_POST["kirim"])) {
    $filter=mysqli_query($conn,"INSERT INTO user_login(id, nama, username, password) VALUES ($i,'$n','$un','$p')");
  
   if ($filter>0) {
       header("location:user-login.php");
       echo"<script>alert('Berhasil')</script>";
   } 

   else {
       echo"input gagal";
   }
}

?>
