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

            <form action="result.php" method="post">
                <div class="result">
                    <div class="result-head">
                        <h1>Result</h1>
                        <form action="result.php" method="post">
                            <select name="sem" id="sem">
                                <option value="ISEM">I - SEMESTER</option>
                                <option value="IISEM">II - SEMESTER</option>
                                <option value="IIISEM">III - SEMESTER</option>
                                <option value="IVSEM">IV - SEMESTER</option>
                                <option value="VSEM">V - SEMESTER</option>
                                <option value="VISEM">VI - SEMESTER</option>
                            </select>
                            <button type="submit" name="search">search</button>
                        </form>
                    </div>
                    <?php
                    if (array_key_exists('search', $_POST)) {

                    ?>
                        <table>
                            <thead>
                                <th>S.no</th>
                                <th>Semester</th>
                                <th>Subject Name</th>
                                <th>Marks</th>
                                <th>Result</th>
                            </thead>
                            <tbody>
                                <?php
                                include('./config/connect.php');
                                $sql = "SELECT * FROM `result_details` WHERE result_sem='" . $_POST['sem'] . "' AND stud_id='" . $_SESSION['s_id'] . "'";
                                $result = $conn->query($sql);
                                $numrows = mysqli_num_rows($result);
                                if ($numrows > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>$i</td>";
                                        echo "<td>" . $row['result_sem'] . "</td>";
                                        echo "<td>" . $row['subject_name'] . "</td>";
                                        echo "<td>" . $row['result_ext'] . "</td>";
                                        if ($row['result_ext'] > 27) {
                                            echo  "<td class='pass'>P</td>";
                                        } else {
                                            echo  "<td class='re'>RA</td>";
                                        }
                                        echo "</tr>";
                                        $i++;
                                    }
                                }
                                ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>VSEM</td>
                                    <td>212703215</td>
                                    <td>Tamil</td>
                                    <td>80</td>
                                    <td>P</td>
                                </tr> -->
                            </tbody>
                        </table>
                    <?php
                    } ?>
                </div>
            </form>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .result {
        background-color: var(--white);
        margin: 10px;
        padding: 30px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }



    .result h1 {
        padding: 0 0 15px 0;
    }

    .result-head form {
        width: 100%;
        display: flex;
        justify-content: end;
    }

    .result table {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    .result thead {
        background-color: #626262;
    }

    .result thead {
        color: var(--white);
    }

    .result tbody tr {
        border-bottom: 1px solid var(--grey);
    }

    .result tbody td,
    .result thead th {
        padding: 10px;
    }

    .result tbody tr:hover {
        background-color: #f3f3f3;
    }

    .result tbody td p {
        color: var(--txt);
    }

    .pass {
        color: greenyellow;
    }

    .re {
        color: tomato;
    }
</style>

</html>