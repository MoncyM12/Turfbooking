<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php
session_start();
$owner=$_SESSION['email'];
require("../connect.php");
if(isset($_POST["submit"])){
    
    $t_name=$_POST['name'];
    $t_email=$_POST['email'];
    $t_city=$_POST['city'];
    $t_about=$_POST['about'];
    $t_image=$_POST['image'];
    $t_id=$_POST['id_proof'];
    $t_price=$_POST['price'];
    $sql="select * from turf where owner_email='$owner'";
    $res=select_data($sql);
    $c=mysqli_num_rows($res);
    echo $c;
    if($c)
    {


        ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'Already Registered',
                didClose: () => {
                    window.location.replace('../turf2/header.php');
                }
            });
        </script>
        <?php
   
       
    }
    
if ($c==0)
{

    $sql="INSERT INTO turf(name,email,city,about,image,id_proof,price,owner_email) VALUES ('$t_name','$t_email','$t_city','$t_about','$t_image','$t_id','$t_price','$owner')";
    echo $sql;
    
    if (insert_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Added Successfully',
                didClose: () => {
                    window.location.replace('../turf2/header.php');
                }
            });
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'unsuccessfully',
                didClose: () => {
                    window.location.replace('../turf2/turfprofile.php');
                }
            });
        </script>



    <?php
    }
 }
}







if(isset($_POST["update"])){
    
    $t_name=$_POST['name'];
    $t_email=$_POST['email'];
    $t_city=$_POST['city'];
    $t_about=$_POST['about'];
    $t_image=$_POST['image'];
    $t_id=$_POST['id_proof'];
    $t_price=$_POST['price'];
    $sql="select * from turf where owner_email='$owner'";
    $res=select_data($sql);
    $c=mysqli_num_rows($res);
    #echo $sql;
    if($c)
    {
        $up="UPDATE turf SET `email`='$t_email' `name`='$t_name',`city`='$t_city',`about`='$t_about',`image`='$t_image',`id_proof`='$t_id',`price`='$t_price' WHERE `owner_email`='$owner';";
    }


    if($c==0)
    {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'Data not exists',
                didClose: () => {
                    window.location.replace('../turf2/header.php');
                }
            });
        </script>
        <?php   
    }
    
    if (update_data($up)) { 
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Updated. Successfully',
                didClose: () => {
                    window.location.replace('../turf2/header.php');
                }
            });
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'unsuccessfully',
                didClose: () => {
                    window.location.replace('../turf2/turfprofile.php');
                }
            });
        </script>



    <?php
    }
}
   






   ?>
</body>
</html>