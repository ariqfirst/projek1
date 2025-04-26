<form action="#" method="POST">
    <label for="">username</label> <input type="text" name="username" id="" style="border-radius: 5px;"> <p></p>
    <label for="">password</label> <input type="text" name="password" id="" style="border-radius: 5px;"><p></p>
     <label for=""><p></p></label> <input type="submit" value="kirim" name="send">
</form>




<?php
if (isset($_POST['send']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    if ($username !='top' and $password !='123')
    
        echo"username dan password salah";
    

    else 
        echo"ok";
    
}


?>