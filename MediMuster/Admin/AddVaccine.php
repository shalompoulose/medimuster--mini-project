<?php
include './Header.php';
?>

<!-- banner bottom shape -->
<!--/contact-->
<section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        <h6 class="title-subhny mb-1">Get in Touch</h6>
        <h3 class="title-w3l mb-2">Join Us</h3>
        <div class="contact-grids d-grid">

            <div class="contact-right">

                <form method="POST" class="signin-form">
                    <div class="input-grids">
                        <input type="text" name="cat" id="w3lSubect" placeholder="Enter the vaccine*" class="contact-input" required="" />
                        <input type="number" name="stock" id="w3lSubect" placeholder="Enter the stock*" class="contact-input" required="" />
                        <input type="number" name="price" id="w3lSubect" placeholder="Enter the price*" class="contact-input" required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="dec" id="w3lMessage" placeholder="Enter the description here*" required=""></textarea>
                    </div>

                    <div class="w3l-submit text-lg-right">
                        <button class="btn btn-style btn-primary" name="submit">Add</button>
                    </div>
                </form>


                <?php
                include '../dbconnection.php';
                if (isset($_POST['submit'])) {
                    //                            
                    $cat = $_POST['cat'];
                    $stock = $_POST['stock'];
                    $price = $_POST['price'];
                    $dec = $_POST['dec'];
                    $date = date('y/m/d');
                    $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `vaccine` WHERE `type`='$cat'");

                    $fetch = mysqli_fetch_array($sel);
                    if ($fetch['COUNT'] > 0) {
                        echo '<script>alert("Already Added")</script>';
                    } else {
                        $qry = "INSERT INTO `vaccine`(`type`,`description`,`stock`,`price`,`date`)VALUES('$cat','$dec','$stock','$price','$date')";

                        $exe = mysqli_query($conn, $qry);
                        if ($qry) {

                            echo '<script>alert("Added Succesfull")</script>';
                        } else {
                            echo '<script>alert("Failed to Add")</script>';
                        }
                    }
                }
                ?>





            </div>
        </div>
</section>
<!-- /map-->

<?php
include '../Footer.php';
?>