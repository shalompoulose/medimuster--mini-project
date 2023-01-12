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

                <form method="POST" class="signin-form" enctype="multipart/form-data">
                    <div class="input-grids">
                        <input type="text" name="name" id="w3lName" placeholder="Vaccination Center Name*" class="contact-input" required="" />
                        <input type="email" name="email" id="w3lSender" placeholder="Vaccination Center Email*" class="contact-input" required="" />
                        <input type="number" name="regid" id="w3lSubect" placeholder="Registration Id*" class="contact-input" required="" />
                        <input type="number" name="phone" id="w3lSubect" placeholder="Vaccination Center Phone*" class="contact-input" required="" />
                        <input type="text" name="dist" id="w3lWebsite" placeholder="District*" class="contact-input" required="" />
                        <input type="password" name="psw" id="w3lWebsite" placeholder="Password*" class="contact-input" required="" />
                        <div class="file-upload-wrapper" data-text="Upload Vaccination Center Image!">
                            <input name="file" type="file" class="file-upload-field" value="">
                        </div>
                    </div>
                    <div class="form-input">
                        <textarea name="address" id="w3lMessage" placeholder="Type the address here*" required=""></textarea>
                    </div>

                    <div class="w3l-submit text-lg-right">
                        <button class="btn btn-style btn-primary" name="submit">Sign Up</button>
                    </div>
                </form>


                <?php
                include '../dbconnection.php';
                if (isset($_POST['submit'])) {
                    //                            
                    $name = $_POST['name'];
                    $dist = $_POST['dist'];
                    $regid = $_POST['regid'];
                    $number = $_POST['phone'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $psw = $_POST['psw'];

                    $folder = '../images/';
                    $file = $folder . basename($_FILES['file']['name']);
                    move_uploaded_file($_FILES['file']['tmp_name'], $file);
                    $folder = 'images/';
                    $file = $folder . basename($_FILES['file']['name']);

                    $sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `v_center` WHERE `reg_id`='$regid' OR `contact`='$number' OR `email`='$email'");

                    $fetch = mysqli_fetch_array($sel);
                    if ($fetch['COUNT'] > 0) {
                        echo '<script>alert("Already Registered")</script>';
                    } else {
                        $qry = "INSERT INTO `v_center`(`name`,`address`,`dist`,`reg_id`,`contact`,`email`,`img`)VALUES('$name','$address','$dist','$regid','$number','$email','$file')";

                        $exe = mysqli_query($conn, $qry);
                        if ($qry) {
                            $qry2 = mysqli_query($conn, "INSERT INTO `login`(`uid`,`uname`,`psw`,`type`,status)VALUES((SELECT MAX(`uid`) FROM `v_center`),'$number','$psw','VCenter','Approved')");

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