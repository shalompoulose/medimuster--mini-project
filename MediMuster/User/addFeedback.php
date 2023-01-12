<?php
session_start();
include './Header.php';
include './SearchCss.php';
include "../dbconnection.php";
?>

<section class="w3l-bottom-grids-6 py-5" id="services1">
    <div class="container py-lg-5 py-md-4 py-2">

        <div class="title-content text-center">
            <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Feedback</h3>

        </div>
        <form class="example" style="margin:auto;max-width:300px" method="POST">
            <textarea name="feedback" id="" cols="50" rows="10"></textarea>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
        <div class="grids-area-hny text-center row mt-lg-4">


        </div>
    </div>
</section>

<?php
if (isset($_REQUEST['submit'])) {
    $uid = $_SESSION["USERID"];
    $feedback = $_REQUEST['feedback'];
    $qry = "INSERT INTO `feedback`(`uid`,`feedback`,`date`) VALUES ('$uid','$feedback',(SELECT SYSDATE()))";
    if (mysqli_query($conn, $qry) == TRUE) {
        echo '<script>alert("Feedback Added")</script>';
    }
}
include '../Footer.php';
?>