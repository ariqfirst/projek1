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
    <form action="cek-login.php" method="post">
        <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="user" class="form-control" style="width: 400px;">    
               </div>
        
               <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="text" name="pass" class="form-control" style="width: 400px;">    
               </div>
        
               <div class="mb-3">
                    <input type="submit" value="kirim" class="form-control btn btn-primary" style="width: 400px;">    
               </div>
            
        </form>
</body>
</html>