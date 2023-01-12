<?php
session_start();
include './Header.php';
?>


<section class="w3l-serices-6 py-5" id="services1">
  <div class="container py-lg-5 py-md-4 py-2">
    <div class="title-content text-center">
      <h6 class="title-subhny text-center">
        Services
      </h6>
      <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Our Departments</h3>
    </div>
    <div class="grids-area-hny text-center row mt-lg-4">


      <?php
      include '../dbconnection.php';
      $qry = mysqli_query($conn, "select * from `v_center`");
      if (mysqli_fetch_array($qry) > 0) {
        $qry = mysqli_query($conn, "select * from `v_center`");

        while ($row = mysqli_fetch_array($qry)) {
      ?>


          <div class="col-lg-4 col-md-6 grids-feature" style="margin-bottom: 25px">
            <div class="area-box icon-blue">
              <a href="VaccineCentersById.php?id=<?php echo $row['uid'] ?>"> <img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid radius-image"></a>
              <h4><a href="VaccineCentersById.php?id=<?php echo $row['uid'] ?>" class="title-head"><?php echo $row['name'] ?></a></h4>
              <!--/des-->
              <div class="w3doctor-box-bottom">
                <div class="doctor-phone">
                  <p><?php echo $row['dist'] ?></p>
                </div>
                <div class="social-icons-dr">
                  <a href="mailto: <?php echo $row['email'] ?>" class="twitter"><span class="fa fa-envelope-o"></span></a>
                  <a href="tel: <?php echo $row['contact'] ?>" class="facebook"><span class="fa fa-phone"></span></a>
                </div>
              </div>
              <!--//des-->
            </div>
          </div>



        <?php
        }
      } else {
        ?>
        <img src="../nodata.png" height="20%" width="20%" style=" margin-left: 500px; margin-right: auto;" />

      <?php
      }
      ?>


    </div>
  </div>
</section>



<?php
include '../Footer.php';
?>