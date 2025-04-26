<?php
include"koneksi.php";
$n=$_POST["nik"];
$nama=$_POST["nama"];
$alamat=$_POST["almt"];
$tp=$_POST["tp"];
$us=$_POST["us"];

if (empty($n) or empty($nama) or empty($alamat) or empty($tp) or empty($us)) {
   echo"<script> alert('data tidak boleh kosong')</script>";
   echo'<meta http-equiv="refresh" content="0; url=pasien.php">';
}

else

{

    $input=mysqli_query($conn,"insert into pasien(nik,nama,alamat,tlp,usia)
                               values($n,'$nama','$alamat','$tp','$us')");
if ($input>0) 
  {header("location:pasien.php");}

else 

  {echo"input database gagal";}

}
?>