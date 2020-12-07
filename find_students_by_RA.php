<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<center>


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            background-color: powderblue;
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

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
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
        #stuTable {
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #stuTable th,
        #stuTable td {
            text-align: left;
            padding: 12px;
        }

        #stuTable tr {
            border-bottom: 1px solid #ddd;
        }

        #stuTable tr.header,
        #stuTable tr:hover {
            background-color: #f1f1f1;
        }

        #raTable {
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #raTable th,
        #raTable td {
            text-align: left;
            padding: 12px;
        }

        #raTable tr {
            border-bottom: 1px solid #ddd;
        }

        #raTable tr.header,
        #raTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
        <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
        <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
        <li><a href="find_students_by_RA.php">Find Students by RA</a></li>

    </ul>

    <div class="row">
        <div class="column">
            <h2>Select an RA</h2>
            <table id="raTable">
                <tr>
                    <td>RA ID</td>
                    <td>Student ID</td>
                    <td>Hall Director</td>
                    <!-- <td>
                            <button type="button" class="use-address">Select</button>
                        </td> -->
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