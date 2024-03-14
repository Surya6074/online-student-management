<?php
include("./config/session.php");
include("./Assets/links.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marks | Admin</title>
</head>
<?php
include('./config/connect.php');

$subject = $_POST['subject'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$_SESSION['subject'] = $subject;
$_SESSION['year'] = $year;
$_SESSION['sem'] = $sem;


$sql1 = "SELECT `result_sem`, `subject_name` FROM `result_details` WHERE result_sem='" . $_SESSION['sem'] . "' AND subject_name='" . $_SESSION['subject'] . "'";
$result1 = $conn->query($sql1);
$numrows1 = mysqli_num_rows($result1);
if ($numrows1 > 0) {
    header('location: result.php');
}

?>

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
            <div class="result-head">
                <div class="year rth">
                    <p>Subject Name : </p>
                    <p><?php echo $subject; ?></p>
                </div>
                <div class="section rth">
                    <p>SEMESTER : </p>
                    <p><?php echo $sem; ?></p>
                </div>
                <div class="section rth">
                    <p>Year : </p>
                    <p><?php echo $year; ?></p>
                </div>
            </div>
            <form action="result-insert.php" method="post" onSubmit="return confirm('Are you sure to update marks?')">
                <div class="result">
                    <h1>Marks</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Subject Name</td>
                                <td>Internal Mark - I</td>
                                <td>Internal Mark - II</td>
                                <td>External Mark</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM `student_details` WHERE stud_year=$year";
                        $result = $conn->query($sql);
                        $numrows = mysqli_num_rows($result);
                        if ($numrows > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['stud_name'] . "</td>";
                                echo "<td><input type='text' name='" . $row['stud_id'] . "[]' id='inp' onkeyup='intern(this)' /></td>";
                                echo "<td><input type='text' name='" . $row['stud_id'] . "[]' id='inp' onkeyup='intern(this)' /></td>";
                                echo "<td><input type='text' name='" . $row['stud_id'] . "[]' id='inp' onkeyup='ext(this)' /></td>";
                                echo "</tr>";
                            }
                            $_POST['subject'] = $subject;
                        }





                        ?>
                        <!-- <tr>
                            <td>Tamil</td>
                            <td><input type='text' name id='inp' onkeyup='intern(this)' /></td>
                            <td><input type="text" id="inp" onkeyup="intern(this)" /></td>
                            <td><input type='text' id='inp' onkeyup='ext(this)' /></td>
                        </tr> -->
                    </table>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" name="update-mark" value='"<?php echo $_POST['year'] ?>"' class="btn btn-sub">Submit</button>
                    </div>
                </div>
            </form>

            <!-- end of page -->
        </div>
    </div>
</body>
<script>
    function ext(input) {
        if (input.value > 75) input.style.borderColor = 'tomato';
        if (input.value < 75) input.style.borderColor = '#e5e5e5';
    }

    function intern(input) {
        if (input.value > 40) input.style.borderColor = 'tomato';
        if (input.value < 40) input.style.borderColor = '#e5e5e5';
    }
</script>
<style>
    .submit-btn {
        margin: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn {
        width: 90px;
        padding: 15px;
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

    .result-head {
        background-color: var(--white);
        padding: 15px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: space-between;
    }

    .rth {
        display: flex;
        justify-content: space-between;
    }

    .rth p {
        margin-right: 10px;
        color: var(--txt);
    }

    .result {
        background-color: var(--white);
        margin: 30px 10px 10px 10px;
        padding: 20px 10px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .result table {
        text-align: center;
        border-collapse: collapse;
    }

    .result table thead tr td {
        color: var(--black);
    }

    .result td {
        padding: 10px;
        color: var(--txt);
    }

    .result td input {
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--grey);
        outline: none;
    }

    .result td span {
        color: var(--txt);
    }
</style>

</html>