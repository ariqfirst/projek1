<?php
include"koneksi.php"; // masukan file atau kode koneksi

$a=$_POST['judul'];
$b=addslashes($_POST['ket']);
$input=mysqli_query($conn,"insert into kamus(judul,keterangan)
values('$a','$b')");

if ($input >0) {
    header("location:kamus.php");
    //echo"input sukses";
}
else {
    echo"input gagal";
}

?>