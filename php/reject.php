<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
<?php 
    require("../connect.php");
    $email=$_GET['email'];
    $sql="UPDATE turf SET active='0' WHERE email='$email'";
   if( mysqli_query($conn,$sql)){
    ?><script>
    Swal.fire({
        icon: 'error',
        text: 'Rejected',
        didClose: () => {
            window.location.replace('../admin0/user_view/turf_view.php');
        }
    });
</script><?php
   }
?>
</body>
</html>