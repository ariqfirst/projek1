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
 <?php 
 include"koneksi.php";
 ?>   
    <h1 class="container">FAKTUR_SUPPLY</h1>
    <form action="prosessupply.php" method="post" class="container">
        <div class="mb-3">
            <label for="" class="form-label">NO</label>
            <input type="text" name="no" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">TANGGAL</label>
        <input type="text" name="tgl" class="form-control" style="width: 400px;">    
   </div>
   <select name="id_k" id="">
       <option name="id_k">ID_OBAT</option>
      <?php
       $id_k=msqli_querry($conn,"select ID_OBAT,nama from obat");
       while($x=mysqli_fecth_array($id_k))
       {
           echo"<option value='$x[ID_OBAT]'>$x[nama]</option>";
       }
      
      ?>
    </select>

  

<input type="submit" value="SIMPAN" class="btn-primary" style="width: 400px;">
    </form>
</body>
</html>