<?php
// Start the session
session_start();

require("../connect.php");

$username = $_SESSION['email'];
$temail=$_SESSION['t_email'];
$book_id=$_SESSION['book_id'];
echo $book_id;

$sql = "select * from booking where booking_id=$book_id";
$res = select_data($sql);
$arr = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- This script got from frontendfreecode.com -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<style>
body {
    background: #f5f5f5;
    margin: 20px;
}
.rounded {
    border-radius: 1rem;
}
.nav-pills .nav-link {
    color: #555;
}
.nav-pills .nav-link.active {
    color: white;
}
input[type="radio"] {
    margin-right: 5px;
}
.bold {
    font-weight: bold;
}
</style>

</head>
<body>

                
<div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                    <!-- Credit card form tabs -->
                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                        <li class="nav-item">
                            <a data-toggle="pill" href="#credit-card" class="nav-link active"> <i class="fas fa-credit-card mr-2"></i> Credit Card </a>
                        </li>
                        <!--li class="nav-item">
                            <a data-toggle="pill" href="#paypal" class="nav-link"> <i class="fab fa-paypal mr-2"></i> Paypal </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="pill" href="#net-banking" class="nav-link"> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a>
                        </li-->
                    </ul>
                </div>
                <!-- End -->
                <!-- Credit card form content -->
                <div class="tab-content">
                    <!-- credit card info-->
                    <div id="credit-card" class="tab-pane fade show active pt-3">
                        <form action="/Turfbooking/php/pay.php"  method="POST">
                            <div class="form-group">
                                <label for="username">
                                    <h6>Card Owner</h6>
                                </label>
                            
                                <input type="text" name="name" placeholder="Card Owner Name" required class="form-control" value="<?php echo $arr['name'];?>" />
                            </div>
                            <div class="form-group">
                                <label for="username">
                                    <h6>Card Owner Email</h6>
                                </label>
                            
                                <input type="email" name="email" placeholder="Card Owner Name" required class="form-control"  value="<?php echo $arr['email'];?>"/>
                            </div>
                           
                            <div class="form-group">
    <label for="cardNumber">
        <h6>Card number</h6>
    </label>
    <div class="input-group">
        <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control" maxlength="12" pattern="\d{12}" title="Please enter exactly 12 digits" required />
        <div class="input-group-append">
            <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label>
                <span class="hidden-xs">
                    <h6>Expiration Date</h6>
                </span>
            </label>
            <div class="input-group">
                <select name="month" class="form-control" required>
                    <option value="" disabled selected>Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="year" class="form-control" required>
                    <option value="" disabled selected>Year</option>
                    <?php
                        $currentYear = date("Y");
                        for ($i = $currentYear; $i <= $currentYear + 10; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="form-group mb-4">
        <label data-toggle="tooltip" title="Three-digit CV code on the back of your card">
            <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
        </label>
        <input type="number" maxlength="4" pattern="[0-9]{4}" title="Please enter 4 digits" required class="form-control" />
    </div>
</div>

                                <div class="col-sm-4">
                                    <div class="form-group mb-4">
                                        <label data-toggle="tooltip" title="The amount you should have payed">
                                            <h6>Amount <i class="fa fa-question-cirle d-inline"></i></h6>
                                        </label>
                                        
                                        <input type="text" name="amount1" disabled  required class="form-control" value="<?php echo $arr['amount'];?>"/>
                                        <input type="hidden" name="amount"  required class="form-control" value="<?php echo $arr['amount'];?>"/>
                                    </div>
                                </div>
 
                            </div>
                            <div class="card-footer"><button name="bill" type="submit" class="subscribe btn btn-primary btn-block shadow-sm">Confirm Payment</button></div>
                        </form>
                    </div>
                    <!-- End -->
                    <!-- Paypal info -->
                    <!--div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group">
                            <label class="radio-inline"> <input type="radio" name="optradio" checked /> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5" />International </label>
                        </div>
                        <p>
                            <button type="button" class="btn btn-primary"><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button>
                        </p>
                        <p class="text-muted">
                            Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.
                        </p>
                    </div-->
                    <!-- End -->
                    <!-- bank transfer info -->
                    <!--div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group">
                            <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label>
                            <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>
                                <button name="bill" type="button" class="btn btn-primary"><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button>
                            </p>
                        </div>
                        <p class="text-muted">
                            Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.
                        </p>
                    </div-->
                    <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
        
    </div>
    
</div><div id="bcl"><a style="font-size:8pt;text-decoration:none;" href="http://www.devanswer.com">Free Frontend</a></div>
<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>