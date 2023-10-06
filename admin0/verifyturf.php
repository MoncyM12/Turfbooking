<?php

include("header.php");



   
   $username = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Turf Verfication</h1>
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
              Turf List
            </h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Slno.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Owner Email</th>
                  <th scope="col">Email</th>
                  <th scope="col">City</th>
                  <th scope="col">About</th>
                  <th scope="col">Images</th>
                  <th scope="col">License Details</th>
                  <th scope="col">Price</th>
                  <th scope="col">Verfication</th>
                  <th scope="col"><i class="fa fa-check-circle" aria-hidden="true"></i></th>
                  <th scope="col"><i class="fa fa-times-circle" aria-hidden="true"></i></th>
            
                 
                  
                  <!--<th scope="col">Bloodgroup</th>
                  <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT * FROM `turf` WHERE active=0";


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
                      <?php echo $row['owner_email'] ?>
                    </td>
                    <td>
                      <?php echo $row['email'] ?>
                    </td>
                    

                    <td>
                      <?php echo $row['city'] ?>
                    </td>
                    <td>  
                     <?php echo $row['about'] ?>
                    </td>
                    <td>  
                        <?php echo $row['image'] ?>
                    </td>
                    <td> 
                         <?php echo $row['id_proof'] ?>
                    </td>
                    <td>
                      <?php echo $row['price'] ?>
                      
                </td>
                <td>
    <a href="../php/verify.php?email=<?php echo $row['email']; ?>" class="btn btn-primary">Verify</a>
</td>
<td>
    <a href="reject.php?email=<?php echo $row['email']; ?>" class="btn btn-danger">Reject</a>
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
