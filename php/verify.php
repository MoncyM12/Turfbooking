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
    $sql="UPDATE turf SET active='1' WHERE email='$email'";
   if( mysqli_query($conn,$sql)){
    ?><script>
    Swal.fire({
        icon: 'success',
        text: 'Verified',
        didClose: () => {
            window.location.replace('../admin0/verifyturf.php');
        }
    });
</script><?php
   }
?>
</body>
</html>