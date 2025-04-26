<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        .kanan{float: right; margin: 5px;}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Kamus Sakti PHP</h1>
            <form action="proseskamus.php" method="post">
                <input class="form-control" type="text" name="judul" id="" placeholder="Judul"> <p></p>
                <textarea class="form-control" name="ket" id="" cols="30" rows="10" placeholder="Keterangan"></textarea> <p></p>
                <input type="submit" value="Simpan" class="btn form-control btn-primary"> <p></p>
            </form>
        </div>
    </div>
</div>    
<table class="table container"> 
<form action="#" method="post">    
    <tr>
         
        <td><input type="text" name="cari" placeholder="Pencarian" id=""></td>
        <td><input type="submit" value="Cari Data"></td>
        <td></td>
        <td><h2 class="kanan">Handle</h2></td>

    </tr>    


    <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Keterangan</td>
    </tr>
<?php
include"koneksi.php";
$filter=mysqli_query($conn,"select * from kamus");
$no=1;
while ($data=mysqli_fetch_array($filter)) {
    echo"<tr>
    <td>$no</td>
    <td>$data[judul]</td>
    <td>$data[keterangan]</td>
     <td>   
         <a href='edit-k.php?edit=$data[id]'  class='btn btn-warning kanan'>Edit</a> 
         <a href='kamus.php?x=apus&id=$data[id]' onclick='return confirm(\"apakah anda yakin?\")' class='btn btn-danger kanan' >Hapus</a>
    </td>  
    </tr>";

    $no++;
}

if (isset($_GET['x'])) {
    if ($_GET['x']=="apus") {
        $filter=mysqli_query($conn,"delete from kamus where id='$_GET[id]'");
        header("location:kamus.php");
    }
}

?>
</form>
</table>


</body>
</html>


