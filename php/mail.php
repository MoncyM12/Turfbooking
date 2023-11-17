<?php

include("../connect.php");

$email_id = $_GET['email'];
$book_id = $_GET['book_id'];

$sql="SELECT * FROM `payment` WHERE book_id='$book_id'";

$data = select_data($sql);

$row = mysqli_fetch_array($data);



?>
<?php
$to = $email_id;
$subject = 'Booking Confirmation';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: turftrackerm123@gmail.com' . "\r\n";

$message = 'PAYMENT SUCCESS';
$message = "Dear " . $row['name'] . ",\n\n";
    $message .= "Here is your receipt for the payment of " . $row['amount'] . ".\n";
    $message .= "Your booking: " . $row['exp'] . "\n";
    $message .= "Thank you !\n\n";
    $message .= "Best regards,\n Turf Tracker";



if(mail($to, $subject, $message, $headers)) 
{


  ?>
  <html>

  <head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
  </head>

  <body>
    <script>
      Swal.fire({
        icon: 'success',
        text: 'OTP Send To Your Email!!!',
        didClose: () => {
          window.location.replace('../player/header.php');
        }
      });
    </script>

  </body>

  </html>
  <?php
  return true;
}
else
{
  return false;
}


?>
