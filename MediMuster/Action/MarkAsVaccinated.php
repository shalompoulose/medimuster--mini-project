<?php
session_start();
include '../dbconnection.php';
$id = $_GET['id'];
$qry = "UPDATE `booking` SET `status`='Vaccinated' WHERE `bid`='$id'";
$exe = mysqli_query($conn, $qry);
if ($qry) {
    echo '<script>alert("Marked As Vaccinated")</script>';

    echo '<script>location.href="../VCenter/VaccineRequest.php"</script>';
} else {
    echo '<script>alert("Failed to Mark")</script>';
    echo '<script>location.href="../VCenter/VaccineRequest.php"</script>';
}
?><a href=""