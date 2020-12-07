<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>
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
	<h1>Resident Assistant DATABASE - Junior Emails</h1>
</header>

<div class="column">
            <h2>Junior Emails</h2>
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


                $sql = "SELECT email, studentid               FROM student                WHERE studentYear = 'Junior';                ";
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