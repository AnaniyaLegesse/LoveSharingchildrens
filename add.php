<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
<div class="parent">
            <h1>Add Student</h1>
        <form action="#.php" method="post">
                <input type="text" name="name" required placeholder="full name" class="longinput"><br><br>

                <input type="number" name="age" required placeholder="age" class="shorterinput">
                <select name="sex" class="shorterinput">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                <input type="number" name="class" required placeholder="class" class="shorterinput">

                <br><br>
               
                <input type="file" name="photo" required placeholder="photo" class="shortinput">
                <input type="number" name="phone" required placeholder="phone number" class="shortinput"><br><br>
                <input type="text" name="passion" required placeholder="Passion" class="longinput"><br><br>
            <input type="submit" name="register" value="register" class="btn">
            
            
            
        </form>
</div>
    <?php

    include "connection.php";

    if(isset($_POST['register'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        $class=$_POST['class'];
        $photo=$_POST['photo'];
        $phone=$_POST['phone'];
        $passion=$_POST['passion'];

        
            $sql="INSERT INTO student(name,age,sex,class,photo,phone,passion)
            VALUES (?,?,?,?,?,?,?)";
            $stmt=mysqli_prepare($con,$sql);
            mysqli_stmt_bind_param($stmt,"sssssss",$name,$age,$sex,$class,$photo,$phone,$passion);

             if(mysqli_stmt_execute($stmt))
             {
                echo"successfully registerd";
             }
             mysqli_stmt_close($stmt);
             header("Location:add.php");
    }
    
    mysqli_close($con);
    

    ?>

    
              

</body>
</html>



