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
    <h1 style="text-align: center;">User Login</h1>
    <form action="prosesu.php" class="container" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" style="width: 400px;">    
      </div>

     <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" name="un" class="form-control" style="width: 400px;">    
       </div>

       <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" name="p" class="form-control" style="width: 400px;">    
   </div>

   <div class="mb-3">
    <input type="submit" name="kirim" class="btn btn-primary" value="KIRIM" style="width: 400px;">
</div>

<div class="mb-3">
 <a href="login.php" class="btn btn-primary" style="width: 400px;">Login</a>    
</div>
    </form>
</body>
</html>