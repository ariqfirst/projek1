<?php
include"koneksi.php";
$nama=$_POST["nama"];
$alamat=$_POST["almt"];
$kota=$_POST["kota"];
$status=$_POST["status"];
$tlp=$_POST["tp"];

if (empty($nama) or empty($alamat) or empty($kota) or empty($status) or empty($tlp)) {
    echo"<script> alert('data tidak boleh kosong') </script>";
    echo'<meta http-equiv="refresh" content="0; url=karyawan.php">';
}

else

{

    $input=mysqli_query($conn,"insert into karyawan(nama,alamat,kota,status,tlp)
                               values('$nama','$alamat','$kota','$status','$tlp')");
if ($input>0) 
  {header("location:karyawan.php");}

else 

  {echo"input database gagal";}

}





?>