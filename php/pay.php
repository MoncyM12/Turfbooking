<html>
<head>
<script type="text/javascript" src="swal/jquery.min.js"></script>
<script type="text/javascript" src="swal/bootstrap.min.js"></script>
<script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>

<?php
session_start();
include("../connect.php"); // Check that your connect.php is correctly configured for MySQLi

echo "NAme";
$username = $_SESSION['email'];
$book_id= $_SESSION['book_id'];
echo $username;
if (isset($_POST['bill'])) {
    // Get data from the form
   // $book_id= $_SESSION['book_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $exp = $_POST['exp'];
    $amount = $_POST['amount'];
    
    echo "Book ID: " . $book_id . "<br>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Expiration Date: " . $exp . "<br>";
echo "Amount: " . $amount . "<br>";


    $sql1 = "INSERT INTO payment (`book_id`, `name`, `email`, `exp`, `amount`) VALUES ('$book_id','$name','$email','$exp','$amount')";
    $re=insert_data($sql1);
    
    $sql2="UPDATE booking SET status='1' WHERE booking_id='$book_id'";
    $re2=insert_data($sql2);
    if($re&&$re2)
    {
  ?><script>
     Swal.fire({
         icon: 'success',
         text: 'Verified',
         didClose: () => {
            window.location.replace('mail.php?email=<?php echo $email ?>&book_id=<?php echo $book_id ?>');
         }
     });
 </script>
        <?php
   }

   else
   {


    ?><script>
    Swal.fire({
        icon: 'error',
        text: 'Cannot complete payment',
        didClose: () => {
            window.location.replace('../player/payment/pay.php');
        }
    });
</script>
       <?php



    } }
?>
</body>
</html>
