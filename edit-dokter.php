<?php 
include"koneksi.php";
$filter=mysqli_query($conn,"select * from dokter where nik='$_GET[y]'");
$data=mysqli_fetch_array($filter);
?>

<form action="#" method="post" class="container">
        <div class="mb-3">
            <label for="" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" style="width: 400px;" value=" <?php echo $data['nik']  ?> ">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" style="width: 400px;"  value=" <?php echo $data['nama']  ?> ">    
   </div>

   <div class="mb-3">
    <label for="" class="form-label">ALAMAT</label>
    <input type="text" name="almt" class="form-control" style="width: 400px;"  value=" <?php echo $data['alamat']  ?> ">    
</div>

<div class="mb-3">
    <label for="" class="form-label">TLP</label>
    <input type="text" name="tp" class="form-control" style="width: 400px;"  value=" <?php echo $data['tlp']  ?> ">    
</div>

<div class="mb-3">
    <label for="" class="form-label">USIA</label>
    <input type="text" name="us" class="form-control" style="width: 400px;"  value=" <?php echo $data['usia']  ?> ">    
</div>

<input type="submit" value="SIMPAN" name="edit" class="btn-primary" style="width: 400px;">
    </form>

 <?php
 include"koneksi.php"; 
 if (isset($_POST['edit'])) {
   $filter=mysqli_query($conn,"UPDATE dokter SET nama='$_POST[nama]' ,alamat='$_POST[almt]' , tlp='$_POST[tp]' , usia=$_POST[us] WHERE nik='$_GET[y]'");  
   header("location:dokter.php");
 } 
  
  ?>   