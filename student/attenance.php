<?php
include("./config/session.php");
include("./Assets/links.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <?php include("./Assets/nav.php") ?>
    </nav>
    <div class="body-content">
        <div class="sidemenubar">
            <?php include("./Assets/sidemenubar.php") ?>
        </div>
        <div class="main-content">
            <!-- content of the page -->

            <form action="add-attenance.php" method="post">
                <div class="attenance">
                    <h1>Attenance</h1>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Present/Absent</th>
                        </thead>
                        <tbody>
                            <?php
                            include('./config/connect.php');
                            $studid = $_SESSION['s_id'];
                            $sql = "SELECT * FROM `attendance_details` WHERE stud_id='$studid' ORDER BY attendance_id DESC";
                            $result = $conn->query($sql);
                            $numrows = mysqli_num_rows($result);
                            if ($numrows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><p>" . $row['atten_date'] . "</p></td>";
                                    if ($row['atten_status'] == 0) {
                                        echo "<td><p class='abs'>Absent</p></td>";
                                    } else {
                                        echo "<td><p class='pre'>Present</p></td>";
                                    }
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .attenance {
        background-color: var(--white);
        margin: 10px;
        padding: 20px 10px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .attenance h1 {
        padding: 0 0 15px 0;
    }

    .attenance table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    .attenance thead {
        background-color: #626262;
    }

    .attenance thead {
        color: var(--white);
    }

    .attenance tbody tr {
        border-bottom: 1px solid var(--grey);
    }

    .attenance tbody td,
    .attenance thead th {
        padding: 10px;
    }

    .attenance tbody tr:hover {
        background-color: #f3f3f3;
    }

    .attenance tbody td p {
        color: var(--txt);
    }

    .attenance tbody td .pre {
        color: greenyellow;
    }

    .attenance tbody td .abs {
        color: tomato;
    }
</style>

</html>