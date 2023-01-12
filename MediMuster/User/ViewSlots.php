<?php
session_start();
include './Header.php';
include './SearchCss.php';
?>
<section class="w3l-bottom-grids-6 py-5" id="services1">
    <div class="container py-lg-5 py-md-4 py-2">

        <div class="title-content text-center">
            <h6 class="title-subhny text-center">Vaccines</h6>
            <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Vaccine Lists</h3>

        </div>
        <form class="example" style="margin:auto;max-width:300px" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="grids-area-hny text-center row mt-lg-4">

            <?php
            include '../dbconnection.php';
            if (isset($_POST['submit'])) {
                $search = $_POST['search'];
                $uid = $_SESSION['USERID'];
                $qry = mysqli_query($conn, "SELECT c.*,s.* FROM `v_center` c,`slots` s WHERE s.`vid`=c.`uid` AND s.`date`>=NOW() AND c.`dist` LIKE '$search%'");

                if (mysqli_fetch_array($qry) > 0) {
                    $qry = mysqli_query($conn, "SELECT c.*,s.* FROM `v_center` c,`slots` s WHERE s.`vid`=c.`uid` AND s.`date`>=NOW() AND c.`dist` LIKE '$search%'");

                    while ($row = mysqli_fetch_array($qry)) {
            ?>
                        <div class="col-lg-4 col-md-6 grids-feature" style="margin-bottom: 25px">
                            <div class="area-box icon-blue">
                                <img src="../vaccin.png" style="height: 60px"><br>
                                <h4><a href="ViewSlotById.php?id=<?php echo $row['sid'] ?>" class="title-head"><?php echo $row['vaccine'] ?></a></h4>
                                <p>Slots Available : <?php echo $row['slot'] ?></p>
                                <p>Date : <?php echo $row['date'] ?></p>
                                <p>Hospital : <?php echo $row['name'] ?></p>
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
            }
            ?>


        </div>
    </div>
</section>

<?php
include '../Footer.php';
?>