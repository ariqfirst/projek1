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
    <h1 class="container">FAKTUR_SUPPLIER</h1>

    <form action="prosesfaktur-s.php" method="POST" class="container">

          <div class="mb-3">
            <label for="" class="form-label">TANGGAL</label>
            <input type="text" name="tgl" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">ID_KARYAWAN</label>
        <input type="text" name="ik" class="form-control" style="width: 400px;">     
     </div>

       <div class="mb-3">
        <label for="" class="form-label">ID_SUPPLIER</label>
        <input type="text" name="is" class="form-control" style="width: 400px;">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">ID_OBAT</label>
        <input type="text" name="io" class="form-control" style="width: 400px;">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">JUMLAH_OBAT</label>
        <input type="text" name="jmlh" class="form-control" style="width: 400px;">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">TOTAL</label> 
        <input type="text" name="total" class="form-control" style="width: 400px;">
     </div>

     <div class="mb-3">
        <label for="" class="form-label">PAJAK</label>
        <input type="text" name="pajak" class="form-control" style="width: 400px;">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">TOTAL_BAYAR</label>
        <input type="text" name="tb" class="form-control" style="width: 400px;">  
     </div>

     <div class="mb-3">
         <input type="submit" class="btn-primary" value="KIRIM" style="width: 400px;">
     </div>

    </form>  

    <table class="table container"> 
<form action="#" method="post">    
    <tr>
         
        <td><input type="text" name="cari" placeholder="Pencarian" id=""></td>
        <td><input type="submit" value="Cari Data"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>tanggal</td>
        <td>id_karyawan</td>
        <td>id_supplier</td>
        <td>id_obat</td>
        <td>jumlah</td>
        <td>total</td>
        <td>pajak</td>
        <td>total_bayar</td>
    </tr>
<?php
if (isset($_POST['cari'])) {
$nama=$_POST['cari'];    
include"koneksi.php";
$filter=mysqli_query($conn,"select * from faktur_supply where id_karyawan like '%$nama%' order by id_karyawan desc");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[tanggal]</td>
    <td>$data[id_karyawan]</td>
    <td>$data[id_supplier]</td>
    <td>$data[id_obat]</td>
    <td>$data[jumlah_obat]</td>
    <td>$data[total]</td>
    <td>$data[pajak]</td>
    <td>$data[total_bayar]</td>
    <td><input class='btn-warning kanan' type='submit' name='edit' value='Edit'> <input class='btn-danger kanan' name='apus' type='submit' value='Hapus'></td>
    </tr>";
    $no++;
}

}
?>
</form>
</table>
</body>
</html>