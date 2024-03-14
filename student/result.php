<?php
include("./config/session.php");
include("./Assets/links.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks | student</title>
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
                        <h1>Marks</h1>
                        <div class="result-search">
                            <select name="sem" id="sem">
                                <option value="ISEM">I - SEMESTER</option>
                                <option value="IISEM">II - SEMESTER</option>
                                <option value="IIISEM">III - SEMESTER</option>
                                <option value="IVSEM">IV - SEMESTER</option>
                                <option value="VSEM">V - SEMESTER</option>
                                <option value="VISEM">VI - SEMESTER</option>
                            </select>
                            <button type="submit" name="search">search</button>
                        </div>
                    </div>
                    <?php
                    if (array_key_exists('search', $_POST)) {

                    ?>

                        <div class="result-report">
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
                                    echo "<script>document.getElementById('sem').value = '" . $_POST['sem'] . "';</script>";
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
                        </div>
                    <?php
                    } ?>
                </div>
            </form>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .result-head {
        background-color: var(--white);
        margin: 10px;
        padding: 10px 30px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .result-head h1 {
        margin-top: 10px;
    }

    .result-search {
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

    .result-report {
        margin-top: 20px;
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px 50px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    .result h1 {
        padding: 0 0 15px 0;
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