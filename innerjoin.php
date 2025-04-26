<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <table border="1" class="table">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis kelamin</td>
            <td>Tanggal lahir</td>
            <td>Total biaya</td>
            <td>Metode pembayaran</td>
            <td>Tanggal pembayaran</td>
            <td>Nomor polis</td>
            <td>ID asuransi</td>
            <td>Handle</td>
        </tr>
        
        <?php 
    include"k.php";
    $q="SELECT pasien.nama,pasien.jenis_kelamin,pasien.tanggal_lahir,pembayaran.total_biaya,pembayaran.metode_pembayaran,pembayaran.tanggal_pembayaran,asuransi.nomor_polis,asuransi.id_asuransi from ((pasien inner join pembayaran on pasien.id_pasien = pembayaran.id_pasien) inner join asuransi on pasien.id_pasien = asuransi.id_pasien);";
    $c=$conn->query($q);
    $no=1;
    while ($tampil=$c->fetch_assoc()) {
        echo"<tr>
        <td>$no</td>
        <td>$tampil[nama]</td>
        <td>$tampil[jenis_kelamin]</td>
        <td>$tampil[tanggal_lahir]</td>
        <td>$tampil[total_biaya]</td>
        <td>$tampil[metode_pembayaran]</td>
        <td>$tampil[tanggal_pembayaran]</td>
        <td>$tampil[nomor_polis]</td>
        <td>$tampil[id_asuransi]</td>       
        <td><a href='innerjoin.php?x=apus&id=$tampil[id_pasien]' class='btn btn-danger'>Hapus</a></td>       
        </tr>";
        $no++;
    }
    
    if (isset($_GET['x'])) {
       if ($_GET['x']=="apus") {
        $a="DELETE FROM `pasien` WHERE id_pasien='$_GET[id]'";
        $b=$conn->query($a);

       }   
    }
    ?>
    </table>
</body>
</html>
