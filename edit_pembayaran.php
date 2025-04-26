<?php 
include"k.php";
$q2="select * from pembayaran where id_pembayaran='$_GET[x]'";
$c2=$conn->query($q2);
$tampil=$c2->fetch_array();

?>

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
<form action="#" method="post" class="container">
        <label>id pembayaran</label> <input type="text" name="id_pembayaran" value="<?php echo $tampil['id_pembayaran']  ?>" class="form-control"> <p></p>
        <select name="id_pasien" id="" class="form-select" value="">
            <option value="<?php echo $tampil['id_pasien'] ?>">ID Pasien</option>
            <?php 
            include"k.php";
            $q="select * from pasien";
            $c=$conn->query($q);
            while($t=$c->fetch_assoc()){
                echo"<option value='$t[id_pasien]'>$t[id_pasien]</option>";
            }
            ?>
        </select> <p></p>
        
        <label>Total Biaya</label> <input type="text" name="total_biaya" class="form-control" value="<?php echo $tampil['total_biaya'] ?>"> <p></p>
        
        <label>Metode Pembayaran</label> <input type="text" name="metode_pembayaran" class="form-control" value="<?php echo $tampil['metode_pembayaran'] ?>"> <p></p>
        
        <select name="tanggal_pembayaran" id="" class="form-select" value="">
            <option value="<?php echo $tampil['tanggal_pembayaran'] ?>">Tanggal Pembayaran</option>
            <?php 
            include"k.php";
            $q="select * from pembayaran";
            $c=$conn->query($q);
            while($t=$c->fetch_assoc()){
                echo"<option value='$t[tanggal_pembayaran]'>$t[tanggal_pembayaran]</option>";
            }
            ?>
        </select> <p></p>

        <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
        </form>
</body>
</html>

<?php 
if (isset($_POST['edit'])) {
    $q3="UPDATE `pembayaran` SET `id_pembayaran`='$_POST[id_pembayaran]',`id_pasien`='$_POST[id_pasien]',`total_biaya`='$_POST[total_biaya]',`metode_pembayaran`='$_POST[metode_pembayaran]',`tanggal_pembayaran`='$_POST[tanggal_pembayaran]' WHERE id_pembayaran='$_GET[x]'";
    $c3=$conn->query($q3);
    header("location:pembayaran.php");
}
?>