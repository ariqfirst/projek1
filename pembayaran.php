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
    <form action="proses_pembayaran.php" method="post" class="container">
        <label>id pembayaran</label> <input type="text" name="id_pembayaran" class="form-control"> <p></p>
        <select name="id_pasien" id="" class="form-select">
            <option value="">ID Pasien</option>
            <?php 
            include"k.php";
            $q="select * from pasien";
            $c=$conn->query($q);
            while($t=$c->fetch_assoc()){
                echo"<option value='$t[id_pasien]'>$t[id_pasien]</option>";
            }
            ?>
        </select> <p></p>
        
        <label>Total Biaya</label> <input type="text" name="total_biaya" class="form-control"> <p></p>
        
        <label>Metode Pembayaran</label> <input type="text" name="metode_pembayaran" class="form-control"> <p></p>
        
        <select name="tanggal_pembayaran" id="" class="form-select">
            <option value="">Tanggal Pembayaran</option>
            <?php 
            include"k.php";
            $q="select * from pembayaran";
            $c=$conn->query($q);
            while($t=$c->fetch_assoc()){
                echo"<option value='$t[tanggal_pembayaran]'>$t[tanggal_pembayaran]</option>";
            }
            ?>
        </select> <p></p>

        <input type="submit" name="input" value="Simpan" class="form-control btn btn-primary">

        
        <?php 
        if (isset($_POST['cari'])) {
           include"k.php";
           $nama=$_POST['cari'];
           $cari="select * from pembayaran where id_pembayaran like '%$nama%'";
           $cacari=$conn->query($cari);
        }
        
        ?>
        </form>

        <form action="#" class="container" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="Cari">
        <input type="submit" value="Cari" name="caridata">    
        </form>

        
        <table class="table container" style="margin-top: 10px; border"> 
        <tr>
            <td>No</td>
            <td>ID Pembayaran</td>
            <td>ID Pasien</td>            
            <td>Total Pembayaran</td>
            <td>Metode Pembayaran</td>
            <td>Tanggal Pembayaran</td>
        </tr>

        <?php
          if (isset($_POST['caridata'])) {
        include"k.php";
        $nama=$_POST['cari'];
        $q="select * from pembayaran where id_pembayaran ='$nama' or id_pembayaran like '%$nama%'";   
        $c=$conn->query($q);
        $x=$c->num_rows;
        
        if($x > 0)
        {
        $no=1;
        while ($t=$c->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>$t[id_pembayaran]</td>
                <td>$t[id_pasien]</td>
                <td>$t[total_biaya]</td>
                <td>$t[metode_pembayaran]</td>
                <td>$t[tanggal_pembayaran]</td>
                <td><a href='pembayaran.php?x=apus&d=$t[id_pembayaran]' class='btn btn-danger'>Hapus</a>
                <a href='edit_pembayaran.php?x=$t[id_pembayaran]' class='btn btn-warning'>Edit</a>
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
        $q2="select * from pembayaran";   
        $c2=$conn->query($q2);
        $no=1;
        while ($t=$c2->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>$t[id_pembayaran]</td>
                <td>$t[id_pasien]</td>
                <td>$t[total_biaya]</td>
                <td>$t[metode_pembayaran]</td>
                <td>$t[tanggal_pembayaran]</td>
                <td><a href='pembayaran.php?x=apus&d=$t[id_pembayaran]' class='btn btn-danger'>Hapus</a>
                <a href='edit_pembayaran.php?x=$t[id_pembayaran]' class='btn btn-warning'>Edit</a>
                </td>
            </tr>";
            $no++;
        }

        if (isset($_GET['x'])) {
            if ($_GET['x']=='apus') {
               $q3="DELETE FROM `pembayaran` WHERE id_pembayaran='$_GET[d]'";
               $c3=$conn->query($q3); 
            }
         }
        }

        if (isset($_GET['x'])){
            if($_GET['x']=='editr') {
                $q4="UPDATE `pembayaran` SET `id_pembayaran`='id_pembayaran',`id_pasien`='id_pasien',`total_biaya`='total_biaya',`metode_pembayaran`='metode_pembayaran',`tanggal_pembayaran`='tanggal_pembayaran' 
                WHERE id_pembayaran='$_GET[edit]'";
                $c4=$conn->query($q4);
            }
        }
        ?>
        
</table>
    
</body>
</html>