<?php

include("header.php");



   
  // $username = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Complaints</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="header.php">Home</a></li>
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
              Complaint List
            </h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Title.</th>
                  <th scope="col">Description</th>
                  <th scope="col">Type</th>
                  <th scope="col">Date</th>
                  <th scope="col">Email</th>
                  <th scope="col">User Type</th>

                 
                  
                  <!--<th scope="col">Bloodgroup</th>
                  <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT * FROM `complaint`WHERE reply=0";


                $data = select_data($sql);

                $n = 1;

                while ($row = mysqli_fetch_assoc($data)) {

                  ?>
                  <tr>
                    <th scope='row'>
                      <?php echo $n++; ?>
                    </th>
                    <td>
                      <?php echo $row['title'] ?>
                    </td>
                    <td>
                      <?php echo $row['description'] ?>
                    </td>
                    <td>
                      <?php echo $row['type'] ?>
                    </td>
                    <td>
                      <?php echo $row['date'] ?>
                    </td>
                    <td>
                      <?php echo $row['email'] ?>
                    </td>
                    <td><?php
                        if($row['usertype']==1)
                        echo "Player";
                        else  if($row['usertype']==2)
                        echo "Turf";
                      ?>
                    </td>

                    <td>
    <a href="../php/reply.php?complaint_id=<?php echo $row['complaint_id']; ?>" class="btn btn-primary">Reply</a>
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
