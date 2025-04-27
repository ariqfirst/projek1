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
    <form action="" method="post">
        <input type="text" name="" class="" > 


    </form>
    <form action="proses_pasien1.php" method="post">
        <label for="">ID Pasien</label> <input type="text" name="id_pasien" class="form-control"><p></p>
        <label for="">Nama</label> <input type="text" name="nama" class="form-control"> <p></p>
        <label for="">Tanggal Lahir</label> <input type="text" name="tanggal-lahir" class="form-control"><p></p>
        <label for="">Jenis Kelamin</label> <input type="text" name="jenis_kelamin" class="form-control"><p></p>
        <label for="">Alamat</label> <input type="text" value="" class="form-control" name="alamat"><p></p>
        <label for="">No Telepon</label> <input type="text"  name="no_telepon"  value="" class="form-control"><p></p>
        <input type="submit" class="form-control btn btn-primary" name="kirim">

        <?php
        if(isset($_POST['pencarian']))
        {
            include"k.php";
            $nama=$_POST['pencarian'];
            $pencarian="SELECT * FROM `pasien` WHERE id_pasien like '%$nama%'";
            $cari=$conn->query($pencarian);
        }
        ?>
    </form>

    
</body>
</html>