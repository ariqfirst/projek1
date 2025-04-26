<?php
include"koneksi.php";
$a=mysqli_query($conn,"select * from pasien where nik='$_GET[edit]'");
$b=mysqli_fetch_array($a);

?>

<h1 class="container">Pengeditan</h1>
    <form action="#" method="post" class="container">
       <div class="mb-3">
        <label for="" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" style="width: 400px;"  value="<?php echo $b['nama'] ?>">    
   </div>

   <div class="mb-3">
    <label for="" class="form-label">ALAMAT</label>
    <input type="text" name="almt" class="form-control" style="width: 400px;"  value="<?php echo $b['alamat'] ?>">    
</div>

<div class="mb-3">
    <label for="" class="form-label">TLP</label>
    <input type="text" name="tp" class="form-control" style="width: 400px;"  value="<?php echo $b['tlp'] ?>">    
</div>

<div class="mb-3">
    <label for="" class="form-label">USIA</label>
    <input type="text" name="us" class="form-control" style="width: 400px;"  value="<?php echo $b['usia'] ?>">    
</div>

<input type="submit" value="SIMPAN" class="btn-primary" name="edita" style="width: 400px;">
    </form>

<?php
if (isset($_POST['edita'])) {
  $a=mysqli_query($conn,"UPDATE pasien SET nama='$_POST[nama]' ,alamat= '$_POST[almt]' ,tlp='$_POST[tp]' ,usia=$_POST[us]  WHERE nik='$_GET[edit]'");
  header("location:pasien.php");
}


?>

