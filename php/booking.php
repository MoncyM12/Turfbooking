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

$username = $_SESSION['email'];
if (isset($_POST['pay'])) {
    // Get data from the form
    $email = $_SESSION['t_email'];
    $name = $_POST['name'];
    $phone = $_POST['contact'];
    $date = $_POST['date'];
   
    $start_time = strtotime($_POST['stime']);
    $end_time = strtotime($_POST['etime']);
    $hrs=abs($start_time-$end_time)/3600;
    echo $hrs;
    $stime= $_POST['stime'];
    $etime=$_POST['etime'];

    // Check if the slot is available
    $available = checkSlotAvailability($date, $stime, $etime, $conn);
    $sql1 = "SELECT price FROM turf WHERE email = '$email'";
    $res = mysqli_query($conn, $sql1);
    
    if ($res) {
        // Fetch the result from the query
        $row = mysqli_fetch_assoc($res);
    
        if ($row) {
            $price = $row['price'];
    
            // Now you can calculate the total
            $amount = $hrs * $price;
    
            // Use $total for further processing
        }}

    if ($available === true) {
        // Insert the booking into the 'booking' table
        $sql = "INSERT INTO `booking`(`booking_id`, `name`, `email`, `phone`, `date`, `stime`, `etime`, `amount`, `turf_mail`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        //$sql2="select max(booking_id) from booking";
        //$res=select_data($sql2);
        //$book_id=mysqli_fetch_array($res);
        //$_SESSION['book_id']=$book_id[0];

        if ($stmt) {
            $stmt->bind_param("ssssssds", $name, $username, $phone, $date, $stime, $etime, $amount, $email);
            if ($stmt->execute()) {
                // Redirect to the payment PHP script
                // header("Location: ../player/payment/index.html"); // Assuming payment.php handles payment processing
                // exit();
                $sql2="select max(booking_id) from booking";
                $res=select_data($sql2);
                $book_id=mysqli_fetch_array($res);
                $_SESSION['book_id']=$book_id[0];
        
                
?>
                <script>
                Swal.fire({
                    icon: 'success',
                    text: 'Booked',
                    didClose: () => {
                    window.location.replace('../player/payment/pay.php');
                    }
                    });
            </script>
            <?php
            } else {
                // Handle database insertion error
                // echo "Error inserting the booking into the database.";
              ?>
                <script>
                Swal.fire({
                    icon: 'error',
                    text: 'ERROR',
                    didClose: () => {
                    window.location.replace('../player/user_view/booking.php');
                    }
                    });
            </script>

            <?php
            }
        }
    } else {
        // Slot is not available, display available time slots
        ?>
                <script>
                Swal.fire({
                    icon: 'error',
                    text: ' Slot is already booked.',
                    didClose: () => {
                    window.location.replace('../player/user_view/booking.php');
        
                    }
                    });
            </script>

            <?php
        $e="Please choose from the available time slots: " . implode(', ', $available);
    }
}

function checkSlotAvailability($date, $start_time, $end_time, $conn) {
    // Use prepared statements with MySQLi
    $sql = "SELECT stime, etime FROM booking WHERE date = ? AND (stime < ? AND etime > ?) AND status=1";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sss", $date, $end_time, $start_time);
        $stmt->execute();
        
        $stmt->store_result();
        $count = $stmt->num_rows;
        
        if ($count > 0) {
            $stmt->bind_result($stime, $etime);
            $unavailableSlots = array();
            
            while ($stmt->fetch()) {
                $unavailableSlots[] = $stime . ' - ' . $etime;
            }
            
            return $unavailableSlots;
        }
        
        $stmt->close();
        
        // No conflicting bookings, return true
        return true;
    } else {
        // Handle the case where the prepared statement fails
        echo "Error in the prepared statement.";
        return false;
    }
}
?>
