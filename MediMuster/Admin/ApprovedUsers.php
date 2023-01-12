<?php
session_start();
include './Header.php';
?>

<section class="w3l-team">
  <div class="team py-5">
    <div class="container py-lg-5 py-md-4">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">New</h6>
        <h3 class="title-w3l mb-sm-3 text-center">User Request</h3>
      </div>
      <div class="row team-row">


        <?php
        include '../dbconnection.php';
        $qry = mysqli_query($conn, "SELECT DISTINCT l.`lid`,u.* FROM `login` l,`user` u WHERE l.`uid`=u.`uid` AND l.`status`='Approved' AND l.`type`='User'");
        if (mysqli_fetch_array($qry) > 0) {
          $qry = mysqli_query($conn, "SELECT DISTINCT l.`lid`,u.* FROM `login` l,`user` u WHERE l.`uid`=u.`uid` AND l.`status`='Approved' AND l.`type`='User'");

          while ($row = mysqli_fetch_array($qry)) {
        ?>



            <div class="col-lg-3 col-6 team-wrap mt-4 pt-lg-2" style="margin-bottom: 25px">
              <div class="team-info">
                <div class="column position-relative img-circle">
                  <a href="ApprovedUsersById.php?id=<?php echo $row['lid'] ?>"><img src="../<?php echo $row['img'] ?>" alt="" class="img-fluid" /></a>
                </div>
                <div class="column-btm">
                  <h3 class="name-pos"><a href="ApprovedUsersById.php?id=<?php echo $row['lid'] ?>"><?php echo $row['name'] ?>
                    </a></h3>
                  <p><?php echo $row['dist'] ?></p>

                </div>
              </div>
            </div>
            <!-- end team member -->



          <?php
          }
        } else {
          ?>
          <img src="../nodata.png" height="20%" width="20%" style=" margin-left: 500px; margin-right: auto;" />

        <?php
        }
        ?>


        <!-- end team member -->
      </div>
    </div>
  </div>
</section>


<?php
include '../Footer.php';
?>