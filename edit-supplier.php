<?php 
include"koneksi.php";
$filter=mysqli_query($conn,"select * from supplier where id_supplier='$_GET[x]'");
$data=mysqli_fetch_array($filter);

?>

<form action="#" method="POST">  

<div class="mb-3">
        <label for="" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" style="width: 400px;" value=" <?php echo $data['nama']  ?> " >  
     </div>

          <div class="mb-3">
            <label for="" class="form-label">ALAMAT</label>
            <input type="text" name="almt" class="form-control" style="width: 400px;"  value=" <?php echo $data['alamat']  ?> ">    
       </div>
 
       <div class="mb-3">
        <label for="" class="form-label">KOTA</label>
        <input type="text" name="kota" class="form-control" style="width: 400px;"  value=" <?php echo $data['kota']  ?> ">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">TLP</label>
        <input type="text" name="tp" class="form-control" style="width: 400px;"  value=" <?php echo $data['tlp']  ?> ">  
     </div>

          <div class="mb-3">
         <input type="submit" class="btn-primary" name="edit" value="KIRIM" style="width: 400px;">
     </div>

    </form>
<?php 
if (isset($_POST['edit'])) {
    $filter=mysqli_query($conn,"UPDATE supplier SET nama='$_POST[nama]',alamat='$_POST[almt]',kota='$_POST[kota]',tlp='$_POST[tp]' WHERE id_supplier='$_GET[x]'");
    header("location:supplier.php");
}

?>