<?php
   include "connection.php";
   

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
   
     $sql="select * from user where email='$email' and password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    
    if($row>0){
        
        if($row['type']=='admin'){
            header("location:add.php");
        }
        elseif($row['type']=='user'){
            header("location:index.html");
        }

    }else{
        echo"incorrect user-name or password";
    }



 }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login password_get_info</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="formstyle.css">
<body >


      <div class="parent" class="container-sm" >

        <form action="#.php" method="post" >
            <input type="text" name="email" required placeholder="Enter Email Address" class="longinput"><br><br>
            <input type="password" name="password" required placeholder="Enter password" class="longinput"><br>
            <br><br>
            <input class="btn btn-outline-primary" type="submit" name="submit" value="Log-in" ><br><br>
        </form>
        <p  class="text-muted">only admin user permitted to Add! if not <a href="sign-up.php">sign-up</a> </p>
</div>        

</body>
</html>