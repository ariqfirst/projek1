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
        .kanan{float:right; margin:5px;}
    </style>
</head>
<body>
 <div class="container">   
    <h1>KARYAWAN</h1>

    <form action="proses-karyawan.php" method="POST" >
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
        <label for="" class="form-label">STATUS</label>
        <input type="text" name="status" class="form-control" style="width: 400px;">  
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
        <td></td>
        
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Kota</td>
        <td>Status</td>
        <td>Telepon</td>
    </tr>
<?php    
include"koneksi.php";
$filter=mysqli_query($conn,"select * from karyawan");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[nama]</td>
    <td>$data[alamat]</td>
    <td>$data[kota]</td>
    <td>$data[status]</td>
    <td>$data[tlp]</td>
    <td>
        <a href='karyawan-edit.php?edit=$data[id_karyawan]' class='btn btn-warning kanan'>Edit</a>
        <a href='karyawan.php?x=apus&id=$data[id_karyawan]' class='btn btn-danger kanan' onclick='return confirm(\"Apakah anda yakin?\")'>Hapus</a>
    </td>
    </tr>";
    $no++;
}
if (isset($_GET['x'])) {
    if ($_GET['x']=="apus") {
        $filter=mysqli_query($conn,"delete from karyawan where id_karyawan='$_GET[id]'");
        header("location:karyawan.php");
    }
}



?>
</form>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="proses-karyawan.php" method="POST" >
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
        <label for="" class="form-label">STATUS</label>
        <input type="text" name="status" class="form-control" style="width: 400px;">  
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
    </div>
  </div>
</body>
</html>