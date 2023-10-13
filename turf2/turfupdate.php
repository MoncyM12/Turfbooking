<?php

include("header.php");
$username = $_SESSION['email'];
   $sql="select * from turf where owner_email='$username' AND active=1" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);

   
   
?>

?>
<main id="main" class="main">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Turf Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method='post' action="../php/turfupdate.php">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Turf Name"  >
                    <label for="floatingName">Turf Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input disabled type="email" name="email" class="form-control" id="floatingEmail" placeholder="Turf Email">
                    <label for="floatingEmail">Turf Email :<span><?php echo $arr['email']; ?></span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="city" class="form-control" id="floatingCity" placeholder="City" >
                    <label for="floatingCity">City</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="about" class="form-control" placeholder="About Your Turf" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">About Turf</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="file" name="image" class="form-control" id="floatingImage" placeholder="Images">
                      <label for="floatingImage">Image</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input type="file" name="id_proof" class="form-control" id="floatingId" placeholder="ID or Proof">
                    <label for="floatingId">ID or Proof</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" name="price" class="form-control" id="floatingPrice" placeholder="Price">
                    <label for="floatingPrice">Price</label>
                  </div>
                </div>
                

                <div class="text-center">
                  
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
</main>
          <?php 

include 'footer.html';

?>
