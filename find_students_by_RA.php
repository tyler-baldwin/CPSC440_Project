<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
<ul>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  
</ul>
<?php

include "db_connect.php";

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

echo"<h2>Current list of all Student Resident Assistants</h2>";
$sql = "SELECT raid, rainfo, halldirectorid FROM ra ORDER BY rainfo";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "RA ID: " . $row["raid"].
	"  -student ID: " . $row["rainfo"].
	"  -Hall Director: " . $row["halldirectorid"].
	"<br>";
  }
} else {
  echo "0 results";
}

?>
<div class="row">
  <div class="column">
    <h2>Select an RA</h2>

  </div>
  
  <div class="column">
    <h2>RA's Students</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  
</div>