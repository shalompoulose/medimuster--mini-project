<?php
include '../dbconnection.php';
$vid = $_GET['id'];
$qry = "DELETE FROM `vaccine` WHERE `vid`='$vid'";
if(mysqli_query($conn,$qry)==TRUE){
    echo "<script>alert('Vaccine Deleted...');window.location='ViewVaccines.php'</script>";
}
