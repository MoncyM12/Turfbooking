<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
require("../connect.php");
session_start();
if(isset($_POST["submit"])){

    $reg_name=$_POST['name'];
    $reg_email=$_SESSION['email'];
    $reg_phone_no=$_POST['phone'];
    $reg_pincode_no=$_POST['pincode'];
    $reg_house=$_POST['house'];
    $reg_city=$_POST['city'];
    $reg_district=$_POST['district'];

    
    $sql="UPDATE registration SET `name`='$reg_name',`phone_no`='$reg_phone_no',`pincode_no`='$reg_pincode_no',`house_name`='$reg_house',`city_name`='$reg_city',`district_name`='$reg_district' WHERE `email`='$reg_email';";
    #echo $sql;
if(update_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../player/profile.php');
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
                    window.location.replace('../user/profile.php');
                }
            });
        </script>



    <?php
    }
    }
   ?>
</body>
</html>