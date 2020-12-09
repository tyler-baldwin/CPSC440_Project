<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>
<?php
include "navbar.php"
?>
<header>
	<h1>Resident Assistant DATABASE - Organization Rosters</h1>
</header>
<body>
<main>

<script>
    function myfilter(orgID) {
        var filter, table, tr, td, i, txtValue;
        //this filters the table by the Org Selected 
        //get tables
        
        var listOfMembers = [];

        memtable = document.getElementById("memTable");
        mtr = memtable.getElementsByTagName("tr");        
        for (i = 0; i < mtr.length; i++) {
            mtd = mtr[i].getElementsByTagName("td")[0];
            if (mtd) {
                txtValue = mtd.textContent || mtd.innerText;
                if (txtValue.indexOf(orgID) > -1) {                    
                    std = mtr[i].getElementsByTagName("td")[1];
                    txtValue = std.textContent || std.innerText;
                    listOfMembers.push(txtValue);
                } else {
                    mtr[i].style.display = "none";
                }
            }
        }
        
        table = document.getElementById("stuTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                legit = false;
                for(j = 0;j < listOfMembers.length; j++){
                    if(txtValue.indexOf(listOfMembers[j]) > -1){
                        legit = true;
                    }
                }
                
                if (legit) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    //this is a listener for which RA was selected
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

    <div class="row">
        <div class="column">
            <h2>Select an Org</h2>
            <table id="raTable">
                <tr>
                    <th>Org ID</th>
                    <th>Org Name</th>
                   
                </tr>

                <?php

                include "db_connect.php";
                if ($mysqli->connect_errno) {
                    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }


                $sql = "SELECT orgid, orgname FROM organization";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";

                        echo "<td>" . $row["orgid"] . "</td>";
                        echo "<td>" . $row["orgname"] . "</td>";
                        

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
            <h2>Students in Org Selected</h2>
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
        <div class="column"  display = "none">
            <h2>member of</h2>
            <table id="memTable">
                <tr>
                    <th>orgid</th>
                    <th>studentid</th>                   
                </tr>

                <?php

                include "db_connect.php";
                if ($mysqli->connect_errno) {
                    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }


                $sql = "SELECT orgid, studentid FROM memberof ORDER BY orgid";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["orgid"] . "</td>";
                        echo "<td>" . $row["studentid"] . "</td>";
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