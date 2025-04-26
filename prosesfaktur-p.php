<?php
include"koneksi.php";
$tg=$_POST["tgl"];
$ip=$_POST["ip"];
$ik=$_POST["ik"];
$io=$_POST["io"];
$jmlh=$_POST["jmlh"];
$to=$_POST["total"];
$pj=$_POST["pajak"];
$tb=$_POST["tb"];

if (empty($tg) or empty($ip) or empty($ik) or empty($io) or empty($jmlh) or empty($to) or empty($pj) or empty($tb)) {
    echo"<script>alert ('DATA TIDAK BOLEH KOSONG')</script>";
    echo'<meta http-equiv="refresh" content="0; url=faktur_penjualan.php">';
}

else {
    $input=mysqli_query($conn,"insert into faktu_penjualan(tanggal,id_pelanggan,id_karyawan,id_obat,jumlah,total,pajak,total_bayar)
                               values ('$tg',$ip,$ik,$io,$jmlh,'$to','$pj','$tb')");

    if ($input>0) {
        header("location:faktur_supplier.php");
        echo"<script>alert ('input berhasil')</script>";
    }

    else {
        echo"input gagal";
    }
}

?>