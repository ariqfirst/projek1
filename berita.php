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
    <form action="prosesberita.php" method="post" class="container" enctype="multipart/form-data">
               
        <div class="mb-3">
            <label for="" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" style="widh: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">kategori</label>
        <select name="kategori" class="form-select">
            <option value="" class="form-select">Katagori</option>
            <?php 
             include"koneksi2.php";
             $q="select * from kategori";
             $c=$conn->query($q);
             $no=1;
             while ($tampil=$c->fetch_array()) {
             echo"<option value='$tampil[id]'>$tampil[nama_kategori]</option>'";
             $no++;
            }
            ?>
        </select>
   </div>

   <div class="mb-3">
    <label for="" class="form-label">Headline</label>
    <textarea name="head" id="" cols="30" rows="10" class="form-control"></textarea>  
</div> 

<div class="mb-3">
    <label for="" class="form-label">Berita</label>
    <textarea name="berita" id="" cols="30" rows="10" class="form-control"></textarea>  
</div> 

<div class="mb-3">
    <label for="" class="form-label">Gambar</label>
    <input type="file" name="gambar" class="form-control" style="wdth: 400px;">    
</div>

         
<div class="mb-3">
    <input type="submit" name="kirim" value="Kirim" class="form-control btn btn-primary" style="widh: 400px;">    
</div>

    </form>
</body>
</html>