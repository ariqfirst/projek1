<?php 
include"k.php";
$q2="select * from resepobat where id_resep='$_GET[x]'";
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
        <h1>Edit</h1>
        <label for="">ID Resep</label> <input type="text" name="ir" id="" class="form-control" value="<?php echo $tampil['id_resep'] ?>"> <p></p>
        <select name="irm" id="" class="form-select">
            <option value="">ID Rekam Medis</option>
            <?php 
            include"k.php";
            $q="select * from rekammedis";
            $c=$conn->query($q);
            while($t=$c->fetch_assoc()){
                echo"<option value='$t[id_rekam_medis]'>$t[id_rekam_medis]</option>";
            }
            ?>
        </select> <p></p>
    
        <select name="id" id="" class="form-select">
            <option value="">ID Obat</option>
            <?php 
            include"k.php";
            $i="select * from obat";
            $j=$conn->query($i);
            while($t=$j->fetch_assoc()){
                echo"<option value='$t[id_obat]'>$t[id_obat]</option>";
            }
            ?>
        </select> <p></p>
    
        <label for="">Jumlah</label> <input type="text" name="jm" id="" class="form-control" value="<?php echo $tampil['jumlah'] ?>"> <p></p>
        <input type="submit" name="kirim" value="Edit" class="form-control btn btn-primary">
    </form>
</body>
</html>

<?php 
if (isset($_POST['kirim'])) {
    $q3="UPDATE  resepobat  SET  id_resep =$_POST[ir]   , id_rekam_medis =  $_POST[irm] , id_obat =$_POST[id]   , jumlah =$_POST[jm]    WHERE id_resep='$_GET[x]'";
    $c3=$conn->query($q3);
    header("location:resep obat.php");
}
?>