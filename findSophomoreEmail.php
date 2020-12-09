<html lang="en">

<head>
    <title> RA Database </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="radatabase.css">
</head>
<!-- Inlcudes all of the deafault nav, Header -->
<?php
include "navbar.php"
?>

<header>
    <h1>Resident Assistant DATABASE - Sophomore Emails</h1>
</header>

<div class="column">
    <h2>Sophomore Emails</h2>
    <table id="stuTable">
        <tr>
            <th>Email</th>
            <th>Student ID</th>
        </tr>

        <?php

        include "db_connect.php";
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }


        $sql = "SELECT email, studentid               FROM student                WHERE studentYear = 'Sophomore';                ";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["studentid"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }


        ?>
    </table>

</div>

</html>