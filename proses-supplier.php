<?php
include"koneksi.php";
$nama=$_POST["nama"];
$alamat=$_POST["almt"];
$kota=$_POST["kota"];
$tlp=$_POST["tp"];

if (empty($nama) or empty($alamat) or empty($kota) or empty($tlp)) {
    echo"<script> alert('data tidak boleh kosong') </script>";
    echo'<meta http-equiv="refresh" content="0; url=supplier.php">';
}

else

{

    $input=mysqli_query($conn,"insert into supplier(nama,alamat,kota,tlp)
                               values('$nama','$alamat','$kota','$tlp')");
if ($input>0) 
  echo"<script>alert('input berhasil'); window.location='supplier.php'</script>";
  
else 

  {echo"input database gagal";}

}




?>