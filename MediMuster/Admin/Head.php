<?php
include '../Dropdown.php';
?>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mx-lg-auto">
        <li class="nav-item active">
            <a class="nav-link" href="AdminHome.php">Home</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="nav-link dropbtn">New</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="AddVaccineCenter.php">Add Vaccine Centers </a>
                    <a class="nav-link" href="VaccineCenters.php">Vaccine Centers </a>
                    <a class="nav-link" href="AddVaccine.php">Add Vaccine </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="nav-link dropbtn">View</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="ViewuserRequest.php">User Request</a>
                    <a class="nav-link" href="ApprovedUsers.php">User List</a>
                    <a class="nav-link" href="ViewVaccines.php">View Vaccine</a>
                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="viewFeedback.php">Feedback</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Login/Login.php">Sign Out</a>
        </li>


    </ul>

</div>