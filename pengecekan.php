<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="post" class="container">

        <label for="" class="form-label">ID Rekam Medis</label> <input type="text" name="ir" id="" class="form-control"><p></p>


          <select name="id" id="" class="form-select">
            <option value="">Nama Pasien</option>
          <?php 
          include"k.php";
          $i="select * from pasien";
          $b=$conn->query($i);
           while ($t=$b->fetch_assoc()) {
               echo"<option value='$t[id_pasien]'>$t[nama]($t[id_pasien])</option>";
           }
          ?>
        </select> <p></p>

        <select name="idd" id="" class="form-select">
            <option value="">Nama Dokter</option>
          <?php 
          include"k.php";
          $q="select * from dokter";
          $c=$conn->query($q);
           while ($t=$c->fetch_assoc()) {
               echo"<option value='$t[id_dokter]'>$t[nama]($t[id_dokter])</option>";
           }
          ?>
        </select> <p></p>
        <label for="">Diagnosa</label> <input type="text" name="di" id="" class="form-control"><p></p>
        <label for="">Pengobatan</label> <input type="text" name="pe" id="" class="form-control"><p></p>
        <label for="">Tanggal periksa</label> <input type="date" name="tg" id="" class="form-control"><p></p>
        <label for=""><p></p></label> <input type="submit" value="Kirim" class="form-control btn btn-primary">
    </form>
</body>
</html>