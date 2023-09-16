<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
require("../connect.php");
if(isset($_POST["submit"])){
    
    $reg_name=$_POST['name'];
    $reg_email=$_POST['email'];
    $reg_phone_no=$_POST['phone'];
    $reg_password=$_POST['password'];
    $reg_user_type=$_POST['usertype'];
    $sql="INSERT INTO registration(name,email,phone_no) VALUES ('$reg_name','$reg_email',$reg_phone_no)";
    $sql2="INSERT INTO login(email,password,status,usertype) VALUES ('$reg_email','$reg_password',1,'$reg_user_type')";
    if (insert_data($sql) && insert_data($sql2)) { 
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Added Successfully',
                didClose: () => {
                    window.location.replace('../login/login.html');
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
                    window.location.replace('../index.html');
                }
            });
        </script>



    <?php
    }
}
   ?>
</body>
</html>