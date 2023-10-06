<?php

include("header.php");



   
   $username = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Users</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="activeuser.php">Home</a></li>
        <!--<li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Active Users</li>-->
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

          <div class="card"> 
          <div class="card-body"> 
            <h5 class="card-title"> 
              User List
            </h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Slno.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone no</th>
                  <th scope="col">Address</th>
            
                 
                  
                  <!--<th scope="col">Bloodgroup</th>
                  <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT * FROM `registration` WHERE email IN (SELECT email FROM `login` WHERE usertype = 1)";


                $data = select_data($sql);

                $n = 1;

                while ($row = mysqli_fetch_assoc($data)) {

                  ?>
                  <tr>
                    <th scope='row'>
                      <?php echo $n++; ?>
                    </th>
                    <td>
                      <?php echo $row['name'] ?>
                    </td>
                    <td>
                      <?php echo $row['email'] ?>
                    </td>
                    <td>
                      <?php echo $row['phone_no'] ?>
                    </td>
                    

                    <td>
                      <?php echo $row['pincode_no'] ?>,
                      <?php echo $row['house_name'] ?>,
                      <?php echo $row['city_name'] ?>,
                      <?php echo $row['district_name'] ?>
                    </td>

                   
                  </tr>

                  <?php
                }
                ?>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

    </div>
    </div>
  </section>

</main><!-- End #main -->




</div>
</section>

</main><!-- End #main -->

<?php




include 'footer.html';

?>
