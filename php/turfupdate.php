<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php
require("../connect.php");
if(isset($_POST["update"])){
    
    $t_name=$_POST['name'];
    $t_email=$_POST['email'];
    $t_city=$_POST['city'];
    $t_about=$_POST['about'];
    $t_image=$_POST['image'];
    $t_id=$_POST['id_proof'];
    $t_price=$_POST['price'];
    $sql="select * from turf where email='$t_email'";
    $res=select_data($sql);
    $c=mysqli_num_rows($res);
    #echo $sql;
    if($c)
    {
        $up="UPDATE turf SET  name='$t_name',city='$t_city',about='$t_about',`image`='$t_image',`id_proof`='$t_id',`price`='$t_price' WHERE `email`='$t_email';";
    }


    if($c==0)
    {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'Data not exists',
                didClose: () => {
                    window.location.replace('../turf2/user_view/turf_view.php');
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
                    window.location.replace('../turf2/user_view/turf_view.php');
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
                    window.location.replace('../turf2/user_view/turf_view.php');
                }
            });
        </script>



    <?php
    }
}
   






   ?>
</body>
</html>