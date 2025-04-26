<?php
include"k.php"; 
$id_r=$_POST['ir'];
$id_pasien=$_POST['id'];
$id_dokter=$_POST['idd'];
$d=$_POST['di'];
$p=$_POST['pe'];
$t=$_POST['tg'];
$q="select * from pasien,dokter where pasien.id_pasien='$id_pasien'
and dokter.id_dokter='$id_dokter'";

$c=$conn->query($q);
if ($c->num_rows > 0) {
   $i="INSERT INTO rekammedis (id_rekam_medis, id_pasien, id_dokter, diagnosa, pengobatan, tanggal_periksa) 
        VALUES ($id_r   ,$id_pasien   ,$id_dokter   ,'$d'   ,'$p'   ,$t   )";
  $a=$conn->query($i);
 echo"<script>alert('Input berhasil'); window:location='pengecekan.php'</script>";    
}
else {
    echo"<script>alert('Data master table pasien dan dokter tidak ada'); window:location='pengecekan.php'</script>";    
   // echo"Data master table pasien dan dokter tidak ada";
}
?>