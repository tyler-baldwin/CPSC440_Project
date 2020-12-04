<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<center>


<style>
body {
          font-family: 'Roboto', sans-serif;
          font-size: 16px;
          background-color:powderblue;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #999;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 45%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* end all formatting  */

#raTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#raTable th, #raTable td {
  text-align: left;
  padding: 12px;
}

#raTable tr {
  border-bottom: 1px solid #ddd;
}

#raTable tr.header, #raTable tr:hover {
  background-color: #f1f1f1;
}


}
</style>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>

</ul>
<?php

// include "db_connect.php";

// // if there are any values in the table, display them one at a time.
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// echo $mysqli->host_info . "<br>";

// echo"<h2>Current list of all Student Resident Assistants</h2>";
// $sql = "SELECT raid, rainfo, halldirectorid FROM ra ORDER BY rainfo";
// $result = $mysqli->query($sql);


// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "RA ID: " . $row["raid"].
// 	"  -student ID: " . $row["rainfo"].
// 	"  -Hall Director: " . $row["halldirectorid"].
// 	"<br>";
//   }
// } else {
//   echo "0 results";
// }

?>
<div class="row">
  <div class="column">
    <h2>Select an RA</h2>
    <table id = "raTable">
            <tr>
                <td>RA ID</td>
                <td>Student ID</td>
                <td>Hall Director</td>
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
                    echo "<td>".$row["raid"]."</td>";
                    echo "<td>".$row["rainfo"]."</td>";
                    echo "<td>".$row["halldirectorid"]."</td>";
                   
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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  
</div>