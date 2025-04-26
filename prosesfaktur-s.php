<?php
include"koneksi.php";
$tg=$_POST["tgl"];
$ik=$_POST["ik"];
$is=$_POST["is"];
$io=$_POST["io"];
$jmlh=$_POST["jmlh"];
$to=$_POST["total"];
$pj=$_POST["pajak"];
$tb=$_POST["tb"];

if (empty($tg) or empty($ik) or empty($is) or empty($io) or empty($jmlh) or empty($to) or empty($pj) or empty($tb)) {
    echo"<script>alert ('DATA TIDAK BOLEH KOSONG')</script>";
    echo'<meta http-equiv="refresh" content="0; url=faktur_supplier.php">';
}

else {
    $input=mysqli_query($conn,"insert into faktur_supply(tanggal,id_karyawan,id_supplier,id_obat,jumlah_obat,total,pajak,total_bayar) 
                                                         values('$tg',$ik,$is,$io,$jmlh,'$to','$pj','$tb')");

    if ($input>0) {
        header("location:faktur_supplier.php");
        echo"<script>alert ('input berhasil')</script>";
    }

    else {
        echo"input gagal";
    }
}

?>