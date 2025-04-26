<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Daftar Data</h1>
     <form action="">
         
<table class="table table-primary container">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>HARGA</td>
        <td>STOCK</td>
        <td>TOTAL_BAYAR</td>
        <td>PAJAK</td>
    </tr>   
    <?php 
    include"koneksi.php";
    $filter=mysqli_query($conn,"select obat.JENIS, obat.HARGA, obat.STOCK, faktur_supply.total_bayar, faktur_Supply.pajak from obat inner join faktur_supply on obat.ID_OBAT=faktur_supply.ID_OBAT;");
    $no=1;
    while ($tampil=mysqli_fetch_array($filter)) {
        echo"
        <tr>
            <td>$no</td> <br>
            <td>$tampil[JENIS]</td> <br>
            <td>$tampil[HARGA]</td><br>
            <td>$tampil[STOCK]</td><br>
            <td>$tampil[total_bayar]</td><br>
            <td>$tampil[pajak]</td>
        </tr>
        
        ";
        $no++;
    }
    
    
    ?>
    </table>
</form>
</body>
</html>