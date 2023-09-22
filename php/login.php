<?php
session_start();
?>
<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
<?php
require("../connect.php");
if (isset($_POST['sub'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    // echo "username=".$usersname;
    // echo "<br>";
    // echo "password=".$password;
    $sql = "select * from login where email='$username';";
    $res = count_data($sql);
    if ($res > 0) {

        $res = select_data($sql);
        
        if ($res) {
            $rows=mysqli_fetch_assoc($res);
            if ($password == $rows['password']) {
                $status = $rows['status'];
                if ($status == 1) {
                    $status = $rows['usertype'];
                    if ($status == 0) {
                        $_SESSION['email']=$rows['email'];
                        ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                text: 'Welcome Back',
                                didClose: () => {
                                window.location.replace('../admin0/index.html');
                                }
                                });
                        </script>
                        <?php
                    } else if ($status == 1) {
                        $_SESSION['email']=$rows['email'];
                        ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                text: 'Welcome Back',
                                didClose: () => {
                                window.location.replace('../player/index.php');
                                }
                                });
                        </script>
                        <?php
            
                    } 
                    else if ($status == 2) {
                        $_SESSION['email']=$rows['email'];
                        ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                text: 'Welcome Back',
                                didClose: () => {
                                window.location.replace('../turf2/index.php');
                                }
                                });

                        </script>
                        <?php
                    }
                    
                    else {
                        ?>
                        <script>
                    Swal.fire({
                         icon: 'error',
                         text: 'Invalid User type',
                            didClose: () => {
                            window.location.replace('../index.html');
                         }
                          });
                        </script>
                        <?php
                    }
                } else {
                    ?>
                    <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'User not valide',
                    didClose: () => {
                        window.location.replace('../index.html');
                         }
                          });
                        </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'Incorrect',
                    didClose: () => {
                        window.location.replace('../index.html');
                         }
                          });
                        </script>
                <?php
            }
        } else {
            ?>
            <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'Error Occurred',
                    didClose: () => {
                        window.location.replace('../index.html');
                         }
                          });
                        </script>
            <?php
        }
    } else {
        ?>
        <script>
                    Swal.fire({
                    icon: 'error',
                    text: 'Account not exist',
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