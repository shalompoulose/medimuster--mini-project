<?php
session_start();
include './Header.php';
?>


<?php
include '../dbconnection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM `vaccine` WHERE `vid`='$id'");
if (mysqli_fetch_array($qry) > 0) {
    $qry = mysqli_query($conn, "SELECT * FROM `vaccine` WHERE `vid`='$id'");

    while ($row = mysqli_fetch_array($qry)) {
?>



        <div class="w3l-content-1 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row w3l-content-inf mt-lg-5 pt-lg-5">
                    <div class="col-lg-5 w3l-content-left mt-lg-4">

                        <h3 class="title-w3l mb-4"><?php echo $row['type'] ?></h3>
                        <img src="../vaccin.png" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="col-lg-7 w3l-content-right pl-lg-5 mt-lg-4">
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Description : <?php echo $row['description'] ?>
                        </p>
                        <p class="para-sub pr-lg-5 mt-md-4 mt-3 mx-auto">Price : &#8377;<?php echo $row['price'] ?>
                        </p>
                        &nbsp;
                        <div class="contact-grids d-grid">
                            <div class="contact-right">
                                <form method="POST" class="signin-form">
                                    <div class="input-grids">

                                        <input type="number" name="stock" id="w3lSubect" placeholder="Current Stock <?php echo $row['stock'] ?>*" class="contact-input" required="" />
                                        <div class="w3l-submit text-lg-right">
                                            <button class="btn btn-style btn-primary" name="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        include '../dbconnection.php';
                        if (isset($_POST['submit'])) {
                            $stock = $_POST['stock'];

                            $qry = "UPDATE `vaccine` SET `stock`='$stock' WHERE `vid`='$id'";

                            $exe = mysqli_query($conn, $qry);
                            if ($qry) {
                                echo '<script>location.href="ViewVaccines.php"</script>';
                                echo '<script>alert("Stock Updated Succesfull")</script>';
                            } else {
                                echo '<script>alert("Failed to Update")</script>';
                                echo '<script>location.href="ViewVaccines.php"</script>';
                            }
                        }
                        ?>

                        <a href="" </div>
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