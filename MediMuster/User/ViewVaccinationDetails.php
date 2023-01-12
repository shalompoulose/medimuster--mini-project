<?php
session_start();
include './Header.php';
?>


<?php
include '../dbconnection.php';
$uid = $_SESSION['USERID'];
$qry = mysqli_query($conn, "SELECT DISTINCT b.`bid`,b.`date`,b.`vaccine`,b.`status`,s.`date` AS slotdate,s.`vaccine`AS vname,s.`slot`,u.*,v.`name` AS hname,v.`address` AS vaddress,v.`contact` AS vcontact,v.`email` AS vemail FROM `booking` b,`slots` s,`user` u,`v_center` v WHERE b.`sid`=s.`sid` AND s.`vid`=v.`uid` AND b.`uid`=u.`uid` AND u.`uid`='$uid'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT DISTINCT b.`bid`,b.`date`,b.`vaccine`,b.`status`,s.`date` AS slotdate,s.`vaccine`AS vname,s.`slot`,u.*,v.`name` AS hname,v.`address` AS vaddress,v.`contact` AS vcontact,v.`email` AS vemail FROM `booking` b,`slots` s,`user` u,`v_center` v WHERE b.`sid`=s.`sid` AND s.`vid`=v.`uid` AND b.`uid`=u.`uid` AND u.`uid`='$uid'");

    while ($row = mysqli_fetch_array($qry)) {
?>



        <section class="w3l-two-servicses py-5" id="services2">
            <div class="container py-lg-5 py-md-4 py-2">

                <div class="row bottom-ab-grids">
                    <div class="col-lg-6 bottom-ab-left align-self">

                        <h3 class="title-w3l mb-4"><?php echo $row['name'] ?></h3>
                        <hr style="border: 2px solid #2CAEE2; ">
                        <p class="">Address : <?php echo $row['address'] ?>. </p>
                        <p class="">Aadhar : <?php echo $row['aadhar'] ?> </p>
                        <p class="">District : <?php echo $row['dist'] ?> </p>
                        <p class="">Age : <?php echo $row['age'] ?> </p>
                        <p class="">Gender : <?php echo $row['gender'] ?> </p>
                        <hr style="border: 2px solid #2CAEE2; ">


                        <p class="">Dose : <?php echo $row['vaccine'] ?> </p>
                        <p class="">Booking Date : <?php echo $row['date'] ?> </p>
                        <p class="">Vaccination Date : <?php echo $row['slotdate'] ?> </p>
                        <p class="">Status : <?php echo $row['status'] ?> </p>
                        <p class="">Vaccine : <?php echo $row['vname'] ?> </p>
                        <p class="">Remaining Slots : <?php echo $row['slot'] ?> </p>
                        <hr style="border: 2px solid #2CAEE2; ">
                        <p class="">Hospital : <?php echo $row['hname'] ?>. </p>
                        <p class="">Address : <?php echo $row['vaddress'] ?> </p>
                        <a href="mailto: <?php echo $row['vemail'] ?>">
                            <p class=""><span class="fa fa-envelope-o"></span> <?php echo $row['vemail'] ?> </p>
                        </a>
                        <a href="tel: <?php echo $row['vcontact'] ?>">
                            <p class=""><span class="fa fa-phone"></span> <?php echo $row['vcontact'] ?> </p>
                        </a>


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