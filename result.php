<?php
include("./config/session.php");
include("./Assets/links.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks | Admin</title>
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

            <div class="result-select">
                <h1>Marks</h1>
                <form action="./add-result.php" method="post">
                    <table>
                        <tr>
                            <td>Year</td>
                            <td>
                                <select name="year" id="atyear">
                                    <option value="1">I-year</option>
                                    <option value="2">II-year</option>
                                    <option value="3">III-year</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>
                                <select name="sem" id="sem">
                                    <option value="ISEM">I - SEMESTER</option>
                                    <option value="IISEM">II - SEMESTER</option>
                                    <option value="IIISEM">III - SEMESTER</option>
                                    <option value="IVSEM">IV - SEMESTER</option>
                                    <option value="VSEM">V - SEMESTER</option>
                                    <option value="VISEM">VI - SEMESTER</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>
                                <select name="subject" id="subject">
                                    <?php
                                    include('./config/connect.php');
                                    $sql = "SELECT * FROM `subject_details`";
                                    $result = $conn->query($sql);
                                    $numrows = mysqli_num_rows($result);
                                    if ($numrows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['subject_name'] . "'>" . $row['subject_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" name="submit" class="btn btn-sub">Submit</button>
                    </div>
                </form>
            </div>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .submit-btn {
        margin: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn {
        width: 90px;
        padding: 10px;
        background-color: var(--blue);
        outline: none;
        border: 0;
        border-radius: 10px;
        margin: 10px 20px;
        color: var(--white);
    }

    .btn-re {
        background-color: var(--txt);
    }

    .result-select {
        background-color: var(--white);
        padding: 20px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .result-select h1 {
        margin: 15px;
    }

    .result-select form table {
        border-collapse: collapse;
    }

    .result-select form table td {
        padding: 15px;
    }

    .result-select form table td input,
    .result-select form table select {
        width: 200px;
        padding: 10px 15px;
        outline: none;
        border: 1px solid var(--grey);
        border-radius: 10px;
    }
</style>

</html>