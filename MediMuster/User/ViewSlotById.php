<?php
session_start();
include './Header.php';
?>


<?php
include '../dbconnection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT s.`sid`,s.`vaccine`,s.`date`,s.`slot`,c.`name`,c.`address`,c.`contact`,c.`email`,v.`description`,v.`price` FROM `slots` s,`v_center` c,`vaccine` v WHERE s.`vid`=c.`uid` AND s.`vaccine`=v.`type` AND s.`sid`='$id'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT s.`sid`,s.`vaccine`,s.`date`,s.`slot`,c.`name`,c.`address`,c.`contact`,c.`email`,v.`description`,v.`price` FROM `slots` s,`v_center` c,`vaccine` v WHERE s.`vid`=c.`uid` AND s.`vaccine`=v.`type` AND s.`sid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
        $_SESSION["SID"] = $row["sid"];
        $_SESSION["SLOT"] = $row["slot"];
?>



        <div class="w3l-content-1 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row w3l-content-inf mt-lg-5 pt-lg-5">
                    <div class="col-lg-5 w3l-content-left mt-lg-4">

                        <h3 class="title-w3l mb-4"><?php echo $row['vaccine'] ?></h3>
                        <img src="../vaccin.png" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="col-lg-7 w3l-content-right pl-lg-5 mt-lg-4">
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Description : <?php echo $row['description'] ?>
                        </p>
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Price : &#8377;<?php echo $row['price'] ?>
                        </p>
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Slots Available : <?php echo $row['slot'] ?>
                        </p>
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Date : <?php echo $row['date'] ?>
                        </p>
                        <hr style="border: 2px solid #0ABF53; ">
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Hospital : <?php echo $row['name'] ?>
                        </p>
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Address : <?php echo $row['address'] ?>
                        </p>
                        <a href="tel:<?php echo $row['contact'] ?>">
                            <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto"><span class="fa fa-phone"></span> <?php echo $row['contact'] ?>
                            </p>
                        </a>
                        <a href="mailto:<?php echo $row['email'] ?>">
                            <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto"><span class="fa fa-envelope-o"></span> <?php echo $row['email'] ?>
                            </p>
                        </a>

                        <hr style="border: 2px solid #2CAEE2; ">
                        <a href="complatePayment.php?id=<?php echo $row['price'] ?>"> <button type="button" class="btn btn-outline-success">Book Slot</button></a>

                    </div>
                </div>
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


<?php
include '../Footer.php';
?>