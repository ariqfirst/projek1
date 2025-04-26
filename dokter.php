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
        .kanan{float: right;}
    </style>
</head>
<body>
    <h1 class="container">DOKTER</h1>
    <form action="prosesdokter.php" method="post" class="container">
        <div class="mb-3">
            <label for="" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" style="width: 400px;">    
   </div>

   <div class="mb-3">
    <label for="" class="form-label">ALAMAT</label>
    <input type="text" name="almt" class="form-control" style="width: 400px;">    
</div>

<div class="mb-3">
    <label for="" class="form-label">TLP</label>
    <input type="text" name="tp" class="form-control" style="width: 400px;">    
</div>

<div class="mb-3">
    <label for="" class="form-label">USIA</label>
    <input type="text" name="us" class="form-control" style="width: 400px;">    
</div>

<input type="submit" value="SIMPAN" class="btn-primary" style="width: 400px;">
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
        
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>Nik</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Telepon</td>
        <td>Usia</td>
    </tr>
<?php   
include"koneksi.php";
$filter=mysqli_query($conn,"select * from dokter ");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[nik]</td>
    <td>$data[nama]</td>
    <td>$data[alamat]</td>
    <td>$data[tlp]</td>
    <td>$data[usia]</td>
    <td><a href='edit-dokter.php?y=$data[nik]' class='btn btn-warning kanan'>Edit</a>
        <a href='dokter.php?x=apus&nik=$data[nik]' onclick='return confirm(\"apakah anda yakin?\") ' class='btn btn-danger kanan' >Hapus</a>
     </td>
    </tr>";
    $no++;
}

if (isset($_GET['x'])) {
    if ($_GET['x']=="apus") {
       $filter=mysqli_query($conn,"delete from dokter where nik='$_GET[nik]'");
       header("location:dokter.php");
    }
}


?>
</form>
</table>
</body>
</html>