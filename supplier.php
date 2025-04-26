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
        .kanan{float:right;}
    </style>
</head>
<body>
<div class="container">    
    <h1>SUPPLIER</h1>

    <form action="proses-supplier.php" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">ALAMAT</label>
        <input type="text" name="almt" class="form-control" style="width: 400px;">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">KOTA</label>
        <input type="text" name="kota" class="form-control" style="width: 400px;">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">TELP</label>
        <input type="text" name="tp" class="form-control" style="width: 400px;">     
     </div>

     <div class="mb-3">
         <input type="submit" class="btn-primary" value="KIRIM" style="width: 400px;">
     </div>

    </form>
</div>    

<table class="table container"> 
<form action="#" method="post">    
    <tr>
         
        <td><input type="text" name="cari" placeholder="Pencarian" id=""></td>
        <td><input type="submit" value="Cari Data"></td>
        <td></td>
        <td></td>
        <td></td>
        
        
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>kota</td>
        <td>Telepon</td>
        
    </tr>
<?php
if (isset($_POST['apus'])) {
  $id=$_POST['id'];
  include"koneksi.php";
  $delete="delete from supplier where id_supplier = $id";
  if (mysqli_query($conn,$delete)) {
      echo"<script>alert('data berhasil dihapus'); window.location='supplier.php'</script>";
  }
  else {
      echo"<script>alert('data berhasil dihapus')</script>";
  }
}


if (isset($_POST['cari'])) {
$nama=$_POST['cari'];    
include"koneksi.php";
$filter=mysqli_query($conn,"select * from supplier where nama like '%$nama%' order by nama desc");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[nama]</td>
    <td>$data[alamat]</td>
    <td>$data[kota]</td>
    <td>$data[tlp]</td>
    
    <td><form action=''>
        <a href='edit-supplier.php?x=$data[id_supplier]' class='btn btn-warning kanan'>Edit</a>
        <input type='hidden' name='id' value='$data[id_supplier]'> 
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