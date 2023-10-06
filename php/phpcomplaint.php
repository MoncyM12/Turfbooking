<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="swal/jquery.min.js"></script>
  <script type="text/javascript" src="swal/bootstrap.min.js"></script>
  <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>
<body>
<?php
require '../connect.php'; // Include your database connection code
session_start();
$email = $_SESSION['email'];
$sql1 = "SELECT * FROM login WHERE email = '$email'"; // Modify the query to retrieve user data based on the email

// Execute the SQL query and fetch the results
$result = select_data($sql1); // You should have a function like select_data to execute SQL queries

// Check if the query was successful
if ($result) {
    // Assuming you want to fetch a single row, you can use mysqli_fetch_assoc or another appropriate method
    $row = mysqli_fetch_assoc($result);

    // Check if the "usertype" column exists in the result
    if (isset($row['usertype'])) {
        $user_type = $row['usertype'];
        // Now, $user_type contains the value from the "usertype" column.
    }
}

$title = $_POST['title'];
$type = $_POST['type'];
$description = $_POST['description'];
$date = date("Y-m-d"); 

$sql = "INSERT INTO complaint (title, description, type, date, email, reply, usertype) VALUES ('$title', '$description', '$type', '$date', '$email', '0', '$user_type')";

insert_data($sql); // You should have a function like insert_data to execute INSERT queries

?>
<script>
    Swal.fire({
        icon: 'success',
        text: 'Complaint Submitted !!!',
        didClose: () => {
            window.location.replace('../player/profile.php');
        }
    });
</script>
</body>
</html>
