<?php

include("header.php");
?>
<main id="main" class="main">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Turf Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method='post' action="../php/turfprofile.php">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name"  >
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="city" class="form-control" id="floatingCity" placeholder="city" >
                    <label for="floatingCity">City</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="about" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">About Turf</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="file" name="image" class="form-control" id="floatingImage" placeholder="image">
                      <label for="floatingImage">Image</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input type="file" name="id_proof" class="form-control" id="floatingId" placeholder="id_proof">
                    <label for="floatingId">ID or Proof</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" name="price" class="form-control" id="floatingPrice" placeholder="price">
                    <label for="floatingPrice">Price</label>
                  </div>
                </div>
                

                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
</main>
          <?php 

include 'footer.html';

?>
