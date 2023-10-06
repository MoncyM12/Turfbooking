<?php

include("header.php");




   
   $username = $_SESSION['email'];
   $sql="select * from registration where email='$username'" ;
   $res=select_data($sql);
   $arr=mysqli_fetch_assoc($res);
   ?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-im.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $arr['name'];?></h2>
              <h3></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Your Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings"></button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Alert</h5>
                  <p class="small fst-italic">You have to fill  the balance details</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['email'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['phone_no'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pincode</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['pincode_no'];?></div>
                  </div>
                       <div class="row">
                    <div class="col-lg-3 col-md-4 label">House Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['house_name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['city_name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">District</div>
                    <div class="col-lg-9 col-md-8"><?php echo $arr['district_name'];?></div>
                  </div>

                  <!--div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div-->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../php/pupdate.php" method="post">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/prfile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value=<?php echo $arr['name'];?>>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" disabled type="email" class="form-control" id="Email" value="<?php echo $arr['email'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value=<?php echo $arr['phone_no'];?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="pincode" type="text" class="form-control" id="Phone" value=<?php echo $arr['pincode_no'];?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">House Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="house" type="text" class="form-control" id="company" value=<?php echo $arr['house_name'];?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">City Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="city" type="text" class="form-control" id="Job" value=<?php echo $arr['city_name'];?>>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Distirct</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="district" type="text" class="form-control" id="Country" value=<?php echo $arr['district_name'];?>>
                      </div>
                    </div>

                    <!--div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                      </div>
                    </div>

                                       
                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div-->

                    <div class="text-center">
                      <button name="submit" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="../php/passwordupdate.php" method="post">

                  <!-- Current Password -->
<div class="row mb-3">
    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
    <div class="col-md-8 col-lg-9">
        <div class="input-group">
            <input name="cpass" type="password" class="form-control" id="currentPassword">
            <button class="btn btn-outline-secondary toggle-password" type="button">
                <i class="bi bi-eye"></i>
            </button>
        </div>
    </div>
</div>

<!-- New Password -->
<div class="row mb-3">
    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
    <div class="col-md-8 col-lg-9">
        <div class="input-group">
            <input name="npass" type="password" class="form-control" id="newPassword">
            <button class="btn btn-outline-secondary toggle-password" type="button">
                <i class="bi bi-eye"></i>
            </button>
        </div>
    </div>
</div>

<!-- Re-enter New Password -->
<div class="row mb-3">
    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
    <div class="col-md-8 col-lg-9">
        <div class="input-group">
            <input name="cnpass" type="password" class="form-control" id="renewPassword">
            <button class="btn btn-outline-secondary toggle-password" type="button">
                <i class="bi bi-eye"></i>
            </button>
        </div>
    </div>
</div>

<script>
    const togglePasswordButtons = document.querySelectorAll(".toggle-password");

    togglePasswordButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const passwordInput = button.previousElementSibling; // Find the associated password input field
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    });
</script>
<div class="text-center">
                      <button name="submit" type="submit" class="btn btn-primary">Change Password</button>
                    </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <?php 

include 'footer.html';

?>