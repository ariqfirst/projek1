<?php
include"koneksi.php";
$idobat=$_POST["idobat"];
$jenis=$_POST["jenis"];
$harga=$_POST["harga"];
$stock=$_POST["stock"];
$id_supplier=$_POST["id_supplier"];




if (empty($idobat) or empty($jenis) or empty($harga) or empty($stock) or empty($id_supplier))
{
    echo"<script> alert('DATA tidak boleh kosong') </script>";
    echo'<meta http-equiv="refresh" content="0; url=obat.php">';
}

else

{

    $input=mysqli_query($conn,"insert into obat(ID_OBAT,JENIS,HARGA,STOCK,ID_SUPPLIER)
                               values($idobat,'$jenis','$harga',$stock,$id_supplier)");
if ($input>0) 
  {header("location:obat.php");}
//{echo"input database berhasil";}
else 

  {echo"input database gagal";}

}

?>