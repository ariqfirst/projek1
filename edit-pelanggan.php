<?php  
include"koneksi2.php";
$f="select * from pelanggan where id_pelanggan='$_GET[x]'";
$c=$conn->query($f);
$t=$c->fetch_assoc();

?>

<form action="#" method="POST">

<div class="mb-3">
  <label for="" class="form-label">NAMA</label>
  <input type="text" name="nama" class="form-control" style="width: 400px;" value="<?php echo$t['nama']?>">    
</div>

<div class="mb-3">
<label for="" class="form-label">ALAMAT</label>
<input type="text" name="almt" class="form-control" style="width: 400px;" value="<?php echo$t['alamat']?>">     
</div>

<div class="mb-3">
<label for="" class="form-label">JENIS_KELAMIN</label>
<input type="text" name="jk" class="form-control" style="width: 400px;" value="<?php echo$t['jenis_kelamin']?>">  
</div>

<div class="mb-3">
<label for="" class="form-label">PEKERJAAN</label>
<input type="text" name="pekerjaan" class="form-control" style="width: 400px;" value="<?php echo$t['pekerjaan']?>">     
</div>

<div class="mb-3">
<input type="submit" class="btn-primary" value="KIRIM" name="edita" style="width: 400px;">
</div>

</form>

<?php  
if (isset($_POST['edita'])) {
    $f="UPDATE pelanggan SET  nama='$_POST[nama]'  ,alamat='$_POST[almt]'  ,jenis_kelamin='$_POST[jk]'  ,pekerjaan='$_POST[pekerjaan]'   WHERE id_pelanggan='$_GET[x]'";
    $c=$conn->query($f);
    header("location:pelanggan.php");

}
   
?>