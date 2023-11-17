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
    $t_image=$_FILES['image']['name'];
    $t_id = $_FILES['id_proof']['name'];
    $t_price=$_POST['price'];
    $sql="select * from turf where email='$t_email'";
    $res=select_data($sql);
    $c=mysqli_num_rows($res);
    if($c)
    {


        ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'Already Registered',
                didClose: () => {
                    window.location.replace('../turf2/turfprofile.php');
                }
            });
        </script>
        <?php
   
       
    }
    
    
   
       
    }
    
if ($c==0)
{

    $sql="INSERT INTO turf(name,email,city,about,image,id_proof,price,owner_email) VALUES ('$t_name','$t_email','$t_city','$t_about','$t_image','$t_id','$t_price','$owner')";
    #echo $sql;
    #insert_data($sql);

    $targetDirectory = "../image/";
    $target_file = $targetDirectory . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    if (insert_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Added Successfully',
                didClose: () => {
                    window.location.replace('../turf2/turfprofile.php');
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