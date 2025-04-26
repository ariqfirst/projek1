<?php 
include"koneksi.php";
$filter=mysqli_query($conn,"select * from obat where ID_OBAT='$_GET[x]'");
$data=mysqli_fetch_array($filter);

?>

<form action="#" method="POST">  
          <div class="mb-3">
            <label for="" class="form-label">JENIS</label>
            <input type="text" name="jenis" class="form-control" style="width: 400px;"  value=" <?php echo $data['JENIS']  ?> ">    
       </div>
 
       <div class="mb-3">
        <label for="" class="form-label">HARGA</label>
        <input type="text" name="harga" class="form-control" style="width: 400px;"  value=" <?php echo $data['HARGA']  ?> ">     
     </div>

      <div class="mb-3">
        <label for="" class="form-label">STOCK</label>
        <input type="text" name="stock" class="form-control" style="width: 400px;"  value=" <?php echo $data['STOCK']  ?> ">  
     </div>

     <div class="mb-3">
        <label for="" class="form-label">ID_SUPPLIER</label>
        <input type="text" name="id_supplier" class="form-control" style="width: 400px;" value=" <?php echo $data['ID_SUPPLIER']  ?> " >  
     </div>

     <div class="mb-3">
         <input type="submit" class="btn-primary" name="edit" value="KIRIM" style="width: 400px;">
     </div>

    </form>
<?php 
if (isset($_POST['edit'])) {
    $filter=mysqli_query($conn,"UPDATE obat SET JENIS='$_POST[jenis]',HARGA='$_POST[harga]',STOCK=$_POST[stock],ID_SUPPLIER=$_POST[id_supplier] WHERE ID_OBAT='$_GET[x]'");
    header("location:obat.php");
}

?>