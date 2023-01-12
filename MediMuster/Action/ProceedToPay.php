<?php

session_start();
include '../dbconnection.php';
$uid = $_SESSION['USERID'];
$slot = $_SESSION['SLOT'];
$sid = $_SESSION['SID'];
$date = date('y/m/d');
$remain = $slot - 1;

$sel = mysqli_query($conn, "SELECT COUNT(*) AS COUNT FROM `booking` WHERE `uid`='$uid' AND `date`<=DATE_SUB(NOW(),INTERVAL 2 MONTH)AND `vaccine`='SecondDose'");
$fetch = mysqli_fetch_array($sel);
if ($fetch['COUNT'] > 0) {
    echo '<script>alert("You are already Vaccinated")</script>';
    echo '<script>location.href="../User/ViewSlots.php"</script>';
} else {
    $sel1 = mysqli_query($conn, "SELECT COUNT(*) AS COUNT,`vaccine` FROM `booking` WHERE `uid`='$uid' AND `date`>=DATE_SUB(NOW(),INTERVAL 2 MONTH)");
    $fetch1 = mysqli_fetch_array($sel1);
    if ($fetch1['COUNT'] == 0) {
        if ($fetch1['vaccine'] != "FirstDose") {
            $qry = "INSERT INTO `booking`(`uid`,`sid`,`date`,vaccine)VALUES('$uid','$sid','$date','FirstDose')";
            $exe = mysqli_query($conn, $qry);
            if ($exe) {
                $upd = mysqli_query($conn, "UPDATE `slots` SET `slot`='$remain' WHERE `sid`='$sid'");
                echo '<script>alert("You have Successfully booked for your first vaccine")</script>';
                //                echo '<script>location.href="../User/ViewSlots.php"</script>';
            } else {
                echo '<script>alert("Failed to Pay")</script>';
                echo '<script>location.href="../User/ViewSlots.php"</script>';
            }
        } else {
            $qry1 = "INSERT INTO `booking`(`uid`,`sid`,`date`,vaccine)VALUES('$uid','$sid','$date','SecondDose')";
            $exe1 = mysqli_query($conn, $qry1);
            if ($exe1) {
                $upd = mysqli_query($conn, "UPDATE `slots` SET `slot`='$remain' WHERE `sid`='$sid'");
                echo '<script>alert("You have Successfully booked for your Second vaccine")</script>';
                echo '<script>location.href="../User/ViewSlots.php"</script>';
            } else {
                echo '<script>alert("Failed")</script>';
                echo '<script>location.href="../User/ViewSlots.php"</script>';
            }
        }
    } else {
        echo '<script>alert("You are Two Months Early For Your Vaccination")</script>';
        echo '<script>location.href="../User/ViewSlots.php"</script>';
    }
}
