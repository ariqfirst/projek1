<?php 
include"k.php";
$ir=$_POST['ir'];
$irm=$_POST['irm'];
$id=$_POST['id'];
$jm=$_POST['jm'];


$i="select * from obat";
$b=$conn->query($i);
$t=$b->fetch_array();
$kurang= $t['stok'] - $jm;

$s="select stok from obat where id_obat='$id' and stok >= $jm";
$k=$conn->query($s);
$cek=$k->num_rows;


$s2="select * from resepobat where id_resep='$ir'";
$k2=$conn->query($s2);
$cek2=$k2->num_rows;

if ($cek2 > 0) {
    echo"primary key terdeteksi";
}

else {

if ($cek > 0) {
    $q="INSERT INTO  resepobat (id_resep,  id_rekam_medis ,  id_obat ,  jumlah) 
    VALUES ($ir ,$irm   ,$id   ,$jm   )";
    $c=$conn->query($q);
    
    $a="UPDATE obat SET stok=$kurang WHERE id_obat='$id'";
    $d=$conn->query($a);
    echo"<script>alert('Berhasil Menginput')</script>";
    echo"<meta http-equiv='refresh' content='0; url=resep obat.php'>";
}

else {
    echo"jumlah tidak cukup";
}

}
?>



