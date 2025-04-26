<?php   
include"koneksi.php";
$nama=$_POST['C'];

$Q=mysqli_query($conn,"select * from obat where JENIS like'%$nama%' order by JENIS desc");
$R=mysqli_num_rows($Q);
$T=mysqli_fetch_array($Q);

if ($R > 0) {
echo"Jenis:$T[JENIS] <br>"; 
echo"Harga:$T[HARGA] <br>";
echo"Stock:$T[STOCK] <br>";
echo"ID_SUPP:$T[ID_SUPPLIER]";
}

else {
    echo"data tidak ada";
}

?>