<?php
session_start();
include './Header.php';
?>


<section class="w3l-bottom-grids-6 py-5" id="services1">
  <div class="container py-lg-5 py-md-4 py-2">
    <div class="title-content text-center">
      <h6 class="title-subhny text-center">Vaccines</h6>
      <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Vaccine Lists</h3>
    </div>
    <div class="grids-area-hny text-center row mt-lg-4">


      <?php
      include '../dbconnection.php';
      $qry = mysqli_query($conn, "SELECT * FROM `vaccine`");
      if (mysqli_fetch_array($qry) > 0) {
        $qry = mysqli_query($conn, "SELECT * FROM `vaccine`");

        while ($row = mysqli_fetch_array($qry)) {
      ?>

          <div class="col-lg-4 col-md-6 grids-feature" style="margin-bottom: 25px">
            <div class="area-box icon-blue">
              <span class="fa fa-pencil-square-o"></span>
              <h4><a href="ViewVaccineById.php?id=<?php echo $row['vid'] ?>" class="title-head"><?php echo $row['type'] ?></a></h4>
              <p><?php echo $row['description'] ?>.</p><br>
              <a href="deleteVaccine.php?id=<?php echo $row['vid'] ?>">Delete</a>

            </div>
            <hr style="border: 2px solid #2CAEE2; ">
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