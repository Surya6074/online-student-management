<?php
include("./config/session.php");
include("./Assets/links.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report | Admin</title>
</head>

<body>
    <nav>
        <?php include("./Assets/nav.php") ?>
    </nav>
    <div class="body-content">
        <div class="sidemenubar">
            <?php include("./Assets/sidemenu.php") ?>
        </div>
        <div class="main-content">
            <!-- content of the page -->

            <div class="atten-report-head">
                <h1>Attendance Report</h1>
                <div class="atten-head">
                    <?php
                    include('./config/connect.php');
                    $numofdays = "SELECT DISTINCT atten_date FROM `attendance_details`";
                    $totdays = mysqli_num_rows($conn->query($numofdays));
                    echo "<p>No.of.Days : <span>" . $totdays . "</span></p>"
                    ?>

                    <form action="./atten-report.php" method="get">
                        <select name="attendanceyear" id="atyear" value="<?php echo $a; ?>">
                            <option value="1">I-year</option>
                            <option value="2">II-year</option>
                            <option value="3">III-year</option>
                        </select>
                        <button type="submit">search</button>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_GET['attendanceyear'])) {
                $a = $_GET['attendanceyear'];
                echo "<script>document.getElementById('atyear').value = '" . $_GET['attendanceyear'] . "';</script>";
            ?>
                <div class="atten-report">
                    <table class="msubject">
                        <thead>
                            <th>S.No</th>
                            <th>Register No</th>
                            <th>Attendance Percentage</th>
                            <th>Attendance Report</th>
                        </thead>

                        <tbody>
                            <?php
                            $studsql = "SELECT stud_id FROM `student_details` WHERE stud_year=" . $a . "";
                            $studresult = $conn->query($studsql);
                            $i = 1;
                            while ($studrow = mysqli_fetch_assoc($studresult)) {

                                $attensql = "SELECT * FROM `attendance_details` WHERE stud_id=" . $studrow['stud_id'] . " AND atten_status=1";
                                $attenresult = mysqli_num_rows($conn->query($attensql));


                                $attenpercentage = number_format(($attenresult / $totdays * 100), 2);

                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $studrow['stud_id'] . "</td>";
                                echo "<td>" . $attenpercentage . "</td>";
                                if ($attenpercentage > 75) {
                                    echo "<td><p class='gr'>Fine</p></td>";
                                } elseif ($attenpercentage > 65 and $attenpercentage < 75) {
                                    echo "<td><p class='ye'>Lack</p></td>";
                                } elseif ($attenpercentage > 50 and $attenpercentage < 65) {
                                    echo "<td><p class='rd'>Special Lack</p></td>";
                                } else {
                                    echo "<td><p class='rd'>RC</p></td>";
                                }
                                echo "</tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            <?php

            }
            ?>


            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .atten-report-head {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px 50px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
    }

    .atten-head {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    form {
        display: flex;
    }

    form select {
        height: 40px;
        width: 200px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--grey);
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    form button {
        height: 40px;
        background-color: var(--blue);
        outline: none;
        border: 0;
        padding: 5px 10px;
        color: var(--white);
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }


    .atten-report {
        margin-top: 20px;
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px 50px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .msubject {
        width: 100%;
        text-align: center;
    }

    .msubject thead {
        background-color: #e5e5e5;
    }

    .msubject thead th,
    .msubject tbody td {
        padding: 10px 20px;
    }

    .msubject tbody tr {
        transition: 0.2s;
        border-bottom: 0.5px solid #e5e5e5;
    }

    .msubject tbody tr:hover {
        background-color: #f3f3f3;
    }

    .gr {
        color: greenyellow;
    }

    .rd {
        color: tomato;
    }

    .ye {
        color: orange;
    }
</style>

</html>