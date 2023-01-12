<?php
session_start();
include './Header.php';
?>


<?php
include '../dbconnection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM `v_center` WHERE `uid`='$id'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT * FROM `v_center` WHERE `uid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
?>



        <section class="w3l-two-servicses py-5" id="services2">
            <div class="container py-lg-5 py-md-4 py-2">

                <div class="row bottom-ab-grids">
                    <div class="col-lg-6 bottom-ab-left align-self">

                        <h3 class="title-w3l mb-4"><?php echo $row['name'] ?></h3>
                        <hr style="border: 2px solid #2CAEE2; ">
                        <p class="">Address : <?php echo $row['address'] ?>. </p>
                        <p class="">District : <?php echo $row['dist'] ?> </p>
                        <p class="">Registration Id : <?php echo $row['reg_id'] ?> </p>
                        <hr style="border: 2px solid #2CAEE2; ">
                        <a href="mailto: <?php echo $row['email'] ?>">
                            <p class=""><span class="fa fa-envelope-o"></span> <?php echo $row['email'] ?> </p>
                        </a>
                        <a href="tel: <?php echo $row['contact'] ?>">
                            <p class=""><span class="fa fa-phone"></span> <?php echo $row['contact'] ?> </p>
                        </a>
                        <hr style="border: 2px solid #2CAEE2; ">
                        <a href="../Action/RejectRequest.php?id=<?php echo $row['uid'] ?>"><button type="button" class="btn btn-outline-primary">Remove</button></a>
                        <hr style="border: 2px solid #2CAEE2; ">

                    </div>
                    <div class="col-lg-6 bottom-right-grids pl-lg-5 mt-lg-0 mt-5">
                        <img src="../<?php echo $row['img'] ?>" alt="" class="radius-image img-fluid">
                    </div>
                </div>
            </div>
        </section>


    <?php
    }
} else {
    ?>
    <img src="../nodata.png" height="20%" width="20%" style=" margin-left: 500px; margin-right: auto;" />

<?php
}
?>


<?php
include '../Footer.php';
?>