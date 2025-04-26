<?php
include"koneksi.php";
$filter=mysqli_query($conn,"select * from kamus where id='$_GET[edit]'");
$data=mysqli_fetch_array($filter);
?>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.bundle.js"></script>



<div class="container">
<div class="row">
        <div class="col">
            <h1>Pengeditan</h1>
            <form action="#" method="post">
                <input class="form-control" type="text" name="judul" id="" placeholder="Judul" value="<?php echo" $data[judul]"; ?>"> <p></p>
                <textarea class="form-control" name="keterangan" id="" cols="30" rows="10" placeholder="keterangan"  <?php echo "$data[keterangan]"; ?> > <?php echo "$data[keterangan]"; ?></textarea> <p></p>
                <input type="submit" value="Ubah" name="edita" class="form-control btn-primary"  onclick='return confirm(\"apakah anda yakin?\" ) '> <p></p>
            </form>
        </div>
    </div>
</div>    

<?php
if (isset($_POST['edita'])) {

    $filter=mysqli_query($conn,"UPDATE kamus SET judul='$_POST[judul]' ,keterangan='$_POST[keterangan]' where id='$_GET[edit]' ");
    header("location:kamus.php");
}
?>