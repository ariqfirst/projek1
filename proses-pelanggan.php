<?php
include"koneksi2.php";
$nama=$_POST["nama"];
$alamat=$_POST["almt"];
$jk=$_POST["jk"];
$kerja=$_POST["pekerjaan"];
//$result=$conn->query();


if  (empty($nama) or empty($alamat) or empty($jk) or empty($kerja)) {
    echo"<script> alert('data tidak boleh kosong') </script>";
    echo'<meta http-equiv="refresh" content="0; url=pelanggan.php">';
}

else

{
   $query="insert into pelanggan(nama,alamat,jenis_kelamin,pekerjaan)
   values('$nama','$alamat','$jk','$kerja')";
   $result=$conn->query($query);
//if ($result > 0) 
  //{header("location:pelanggan.php");}

//else 

 // {echo"query database gagal";}

//}



?>