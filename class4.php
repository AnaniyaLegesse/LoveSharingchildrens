
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>love-sharing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="icon/logo.png" width="2%" height="2%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="childrens.php">Children affairs</a>
            </li>
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            /Class
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="class1.php">class 1</a></li>
                            <li><a class="dropdown-item" href="class2.php">class 2</a></li>
                            <li><a class="dropdown-item" href="class3.php">class 3</a></li>
                            <li><a class="dropdown-item" href="class4.php">class 4</a></li>
                           </ul>
                        </li>
           

            </ul>   
        </div>
        </div>
    </nav>


<?php
    include "connection.php";
    $sql="SELECT name,age,passion,photo,phone, sex FROM student where class='4' ";
            $result=mysqli_query($con,$sql);
 ?>   

 <br><br>       
<div class="container">
<h2>CLASS 4</h2>
<p> &nbsp;&nbsp; Under this class we have students age between 5-7. most of our childrens are active and distarbing.Therfore we need to hand them wisely.
    Most time it's prefered to use there language to communicate with them, this means gaomogna speaker member is neccassary. <br>
    Beside that we will use game and art tools in order to grab there attaintion more and the will enjoy while they are having fun. 
</p>     
 </div>



                      <!-- STUDENTS INFO -->
<br><br>
<div class="container">
    <h4>STUDENTS INFORMATION</h4>
            <?php
             echo'<div class="class-container"> ';
             if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    
                    echo'
                                <div class="class-content">
                                <div class="cover"><img src="students/'.$row['photo'].'" width="100%" height="100%"></div><br>
                                <div class="description">'.$row["name"].' <br> 
                                                        Age:  '.$row["age"].'  sex: '.$row["sex"].'<br/>
                                                                                passion : '.$row["passion"].' <br/>
                                                                                phone: '.$row["phone"].'</p>

                                </div>
                                </div>';

                  
                }
                }else{
                echo"o result";
                }
                echo'</div>';
    


                mysqli_close($con);
            ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>