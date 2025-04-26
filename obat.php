<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <style>
        .kanan{float: right; margin:5px;}
    </style>
</head>
<body>
 <div class="container">
    <h1>OBAT</h1>

    <form action="proses-obat.php" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">ID_OBAT</label>
            <input type="text" name="idobat" class="form-control" style="width: 400px;">
          </div>


          <div class="mb-3">
            <label for="" class="form-label">JENIS</label>
            <input type="text" name="jenis" class="form-control" style="width: 400px;">    
       </div>
 
       <div class="mb-3">
        <label for="" class="form-label">HARGA</label>
        <input type="text" name="harga" class="form-control" style="width: 400px;">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">STOCK</label>
        <input type="text" name="stock" class="form-control" style="width: 400px;">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">ID_SUPPLIER</label>
        <input type="text" name="id_supplier" class="form-control" style="width: 400px;">  
     </div>

     <div class="mb-3">
         <input type="submit" class="btn-primary" value="KIRIM" style="width: 400px;">
     </div>

    </form>
 </div>    

 <table class="table container"> 
<form action="#" method="POST">    
    <tr>
         
        <td><input type="text" name="cari" placeholder="Pencarian" id=""></td>
        <td><input type="submit" value="Cari Data"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>ID_Obat</td>
        <td>Jenis</td>
        <td>Harga</td>
        <td>Stock</td>
        <td>ID_Supplier</td>
    </tr>
<?php
if (isset($_POST['apus'])) {
   $id=$_POST['id'];
   include"koneksi.php";
   $delete="delete from obat where ID_OBAT= $id";
   if (mysqli_query($conn,$delete)) {
       echo"<script>alert('Data Dihapus'); window.location='obat.php';</script>";
   }
   else {
     echo"<script>alert('Data Gagal Dihapus')</script>";

   }
}






if (isset($_POST['cari'])) {
$nama=$_POST['cari'];    
include"koneksi.php";
$filter=mysqli_query($conn,"select * from obat where JENIS like '%$nama%' order by ID_OBAT desc");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[ID_OBAT]</td>
    <td>$data[JENIS]</td>
    <td>$data[HARGA]</td>
    <td>$data[STOCK]</td>
    <td>$data[ID_SUPPLIER]</td>
    <td><form action=''>
        <a href='edit-obat.php?x=$data[ID_OBAT]'>Edit</a>
        <input type='hidden' name='id' value='$data[ID_OBAT]'>
        <input class='btn btn-danger kanan' name='apus' type='submit' value='Hapus'>
    </form></td>
    </tr>";
    $no++;
}

}
?>
</form>
</table>
</body>
</html>