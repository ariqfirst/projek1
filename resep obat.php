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
    <form action="resep.php" method="post" class="container">
        <label for="">ID Resep</label> <input type="text" name="ir" id="" class="form-control"> <p></p>
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

        <label for="">Jumlah</label> <input type="text" name="jm" id="" class="form-control"> <p></p>
        <input type="submit" value="Simpan" class="form-control btn btn-primary">
        <?php 
        if (isset($_POST['cari'])) {
           include"k.php";
           $nama=$_POST['cari'];
           $cari="select * from resepobat where id_resep like '%$nama%'";
           $cacari=$conn->query($cari);
        }
        
        ?>
    </form>


    <form action="#" class="container" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="Cari">
        <input type="submit" value="Cari" name="caridata">    
    </form>   

    <table class="table container" style="margin-top: 10px;"> 
        <tr>
            <td>No</td>
            <td>ID Resep</td>
            <td>ID Rekam Medis</td>
            <td>ID Obat</td>
            <td>Jumlah</td>
            <td>Handle</td>
        </tr>
        <?php
          if (isset($_POST['caridata'])) {
        include"k.php";
        $nama=$_POST['cari'];
        $q="select * from resepobat where id_resep ='$nama' or id_resep like '%$nama%'";   
        $c=$conn->query($q);
        $x=$c->num_rows;
        
        if($x > 0)
        {
        $no=1;
        while ($t=$c->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>$t[id_resep]</td>
                <td>$t[id_rekam_medis]</td>
                <td>$t[id_obat]</td>
                <td>$t[jumlah]</td>
                <td><a href='resep obat.php?x=apus&d=$t[id_resep]' class='btn btn-danger'>Hapus</a>
                <a href='editr.php?x=$t[id_resep]' class='btn btn-warning'>Edit</a>
                </td>
            </tr>";
            $no++;
        }
    }
    else{
        echo"data tidak ditemukan";
    }
}

        else {
        $q2="select * from resepobat";   
        $c2=$conn->query($q2);
        $no=1;
        while ($t=$c2->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>$t[id_resep]</td>
                <td>$t[id_rekam_medis]</td>
                <td>$t[id_obat]</td>
                <td>$t[jumlah]</td>
                <td><a href='resep obat.php?x=apus&d=$t[id_resep]' class='btn btn-danger'>Hapus</a>
                <a href='editr.php?x=$t[id_resep]' class='btn btn-warning'>Edit</a>
                </td>
            </tr>";
            $no++;
        }

        if (isset($_GET['x'])) {
            if ($_GET['x']=='apus') {
               $q3="DELETE FROM `resepobat` WHERE id_resep='$_GET[d]'";
               $c3=$conn->query($q3); 
            }
         }
        }
        ?>
</table>
</body>
</html>