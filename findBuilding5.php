<head>
    <title> RA Database </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="radatabase.css">
</head>
<?php
include "navbar.php"
?>
<!-- Inlcudes all of the deafault nav, Header -->
<header>
    <h1>Resident Assistant DATABASE - James River</h1>
</header>

<div class="column">
    <h2>York</h2>
    <table id="stuTable">
        <tr>
            <th>Student ID</th>
            <th>Year</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Room</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Building ID</th>
            <th>RAID</th>
        </tr>

        <?php

        include "db_connect.php";
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }


        $sql = "SELECT *         FROM student        WHERE buildingID LIKE '%5%' ;        ";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $row["studentID"] . "</td>";
                echo "<td>" . $row["studentYear"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["roomNum"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";
                echo "<td>" . $row["buildingID"] . "</td>";
                echo "<td>" . $row["raID"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }


        ?>
    </table>

</div>