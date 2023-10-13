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
                  <th scope="col">Sl no:</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone no</th>
                  <th scope="col">Date</th>
                  <th scope="col">Starting Time</th>
                  <th scope="col">End Time</th>
                  <th scope="col">Amount Time</th>
                  <th scope="col">Turf Email</th>
            
                 
                  
                  <!--<th scope="col">Bloodgroup</th>
                  <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT * FROM `booking`";


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
                      <?php echo $row['phone'] ?>
                    </td>
                     <td>
                      <?php echo $row['date'] ?>
                </td>
                <td>
                    <?php echo $row['stime'] ?>
                </td>
                <td>
                     <?php echo $row['etime'] ?>
                </td>
                <td>
                    <?php echo $row['amount'] ?>
                </td>
                <td>
                    <?php echo $row['turf_mail'] ?>
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
