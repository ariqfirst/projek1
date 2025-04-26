<?php
include"koneksi.php";
$filter=mysqli_query($conn,"select * from karyawan where id_karyawan='$_GET[edit]'");
$t=mysqli_fetch_array($filter);
?>

<div class="container">   
    <h1>KARYAWAN</h1>

    <form action="#" method="POST" >
       <div class="mb-3">
            <label for="" class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" style="width: 400px;" value="<?php echo $t['nama']?>">   
       </div>

       <div class="mb-3">
        <label for="" class="form-label">ALAMAT</label>
        <input type="text" name="almt" class="form-control" style="width: 400px;" value="<?php echo $t['alamat']?>">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">KOTA</label>
        <input type="text" name="kota" class="form-control" style="width: 400px;" value="<?php echo $t['kota']?>">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">STATUS</label>
        <input type="text" name="status" class="form-control" style="width: 400px;" value="<?php echo $t['status']?>">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">TELP</label>
        <input type="text" name="tp" class="form-control" style="width: 400px;" value="<?php echo $t['tlp']?>">     
     </div>

     <div class="mb-3">
         <input type="submit" name="edita" class="btn-primary" value="KIRIM" style="width: 400px;">
     </div>

    </form>
 </div>    

 <?php
 if (isset($_POST['edita'])) {
    
   $filter=mysqli_query($conn,"UPDATE  karyawan  SET  nama ='$_POST[nama]' , alamat ='$_POST[almt]' , kota ='$_POST[kota]' , status ='$_POST[status]' , tlp ='$_POST[tp]' WHERE id_karyawan= '$_GET[edit]'");
   header("location:karyawan.php");
 }
 
 
 ?>