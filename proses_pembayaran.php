
<?php
include"k.php";
$id_pembayaran=$_POST['id_pembayaran'];
$id_pasien=$_POST['id_pasien'];
$total_biaya=$_POST['total_biaya'];
$metode_pembayaran=$_POST['metode_pembayaran'];
$tanggal_pembayaran=$_POST['tanggal_pembayaran'];



include"k.php";
$q="SELECT * FROM `pembayaran` WHERE id_pembayaran=$id_pembayaran";

$c=$conn->query($q);
$x=$c->num_rows;


if($x > 0)
{
 echo"duplikasi nomor id pembayaran"; 
 echo'<meta http-equiv="refresh" content="1; url=http://localhost/projek1/pembayaran.php">';
  
}

else{


$input=mysqli_query($conn,"insert into pembayaran(id_pembayaran,id_pasien,total_biaya,metode_pembayaran,tanggal_pembayaran)
values('$id_pembayaran','$id_pasien','$total_biaya','$metode_pembayaran','$tanggal_pembayaran')");

if ($input >0) {
    header("location:pembayaran.php");
    echo"input sukses";
}


else {
    echo"input gagal";
}}
?>

 
 