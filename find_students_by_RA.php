<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<html lang="en">
    
<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>

<body>
<main>

<script>
    function myfilter(x) {
        var filter, table, tr, td, i, txtValue;
        
        table = document.getElementById("stuTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[8];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.indexOf(x) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    $(document).on(".use-address").click(function() {
        $(".use-address").click(function() {
            var $row = $(this).closest("tr"),
                $tds = $row.find("td:nth-child(1)");

            $.each($tds, function() {
                myfilter($(this).text());
            });

        });
    });
</script>

<nav>
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
	  <li><a href="add_new_student.php">Add A New Student</a></li>
	  <li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Email by Class</a>
		<div class="dropdown-content">
		  <a href="findFreshmanEmail.php">Freshman</a>
		  <a href="findSophomoreEmail.php">Sophomore</a>
		  <a href="findJuniorEmail.php">Junior</a>
		  <a href="findSeniorEmail.php">Senior</a>
		</div>
	  </li>

	</ul>
</nav>

<header>
	<h1>Resident Assistant DATABASE - Find A student by RA</h1>
</header>

    <div class="row">
        <div class="column">
            <h2>Select an RA</h2>
            <table id="raTable">
                <tr>
                    <th>RA ID</th>
                    <th>Student ID</th>
                    <th>Hall Director</th>
                </tr>

                <?php

                include "db_connect.php";
                if ($mysqli->connect_errno) {
                    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }


                $sql = "SELECT raid, rainfo, halldirectorid FROM ra ORDER BY rainfo";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";

                        echo "<td>" . $row["raid"] . "</td>";
                        echo "<td>" . $row["rainfo"] . "</td>";
                        echo "<td>" . $row["halldirectorid"] . "</td>";

                ?>
                        <td>
                            <button type="button" class="use-address">Select</button>
                        </td>
                <?php
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }


                ?>
            </table>
        </div>

        <div class="column">
            <h2>RA's Students</h2>
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


                $sql = "SELECT studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid  FROM student";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";

                        echo "<td>" . $row["studentid"] . "</td>";
                        echo "<td>" . $row["studentyear"] . "</td>";
                        echo "<td>" . $row["gender"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["roomnum"] . "</td>";
                        echo "<td>" . $row["fname"] . "</td>";
                        echo "<td>" . $row["lname"] . "</td>";
                        echo "<td>" . $row["buildingid"] . "</td>";
                        echo "<td>" . $row["raid"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }


                ?>
            </table>

        </div>



    </div>

</main>
</body>
</html>

    </div>