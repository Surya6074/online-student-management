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

<?php
$attenyear = $_GET['attendanceyear'];
$attendate = $_GET['attendancedate'];
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
            <div class="attenance-head">
                <div class="year ath">
                    <?php
                    echo "<p>Year :</p>";
                    if ($attenyear == 3) {
                        echo "<p>III</p>";
                    } elseif ($attenyear == 2) {
                        echo "<p>II</p>";
                    } else {
                        echo "<p>I</p>";
                    }
                    ?>
                </div>
                <!-- <div class="section ath">
                    <p>Section :</p>
                    <p>A</p>
                </div> -->
                <div class="date ath">
                    <p>Date :</p>
                    <input type="date" value="<?php echo "$attendate"; ?>" />
                </div>
            </div>
            <form action="add-attenance.php" method="post" onSubmit="return confirm('confirm to upload')">
                <div class="attenance">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Present/Absent</th>
                        </thead>
                        <tbody>

                            <?php
                            include("./config/connect.php");
                            $date = date("Y-m-d");
                            $sql = "SELECT `stud_id`, `stud_name` FROM `student_details` where stud_year = '$attenyear'";
                            $result = $conn->query($sql);
                            $nums = mysqli_num_rows($result);
                            if ($nums > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><p>" . $row['stud_name'] . "<span>(" . $row['stud_id'] . ")</span></p></td>";
                                    echo "<td><div class='wrapper'><div class='card'><input class='input' type='radio' name='check[" . $row['stud_id'] . "]' value='1' /><span class='check'></span><label class='label'><div class='title'>P</div></label></div><div class='card'><input class='input' type='radio' name='check[" . $row['stud_id'] . "]' value='0' /><span class='check'></span><label class='label'><div class='title'>A</div></label></div></div></td>";
                                    echo "</tr>";
                                }
                            }

                            //upload attendance
                            if (array_key_exists('submit', $_POST)) {
                                $at = $_POST['check'];
                                $atyear = $_POST['submit'];
                                //check for attendance

                                $checkatten = "SELECT * FROM `attendance_details` WHERE atten_date='$date' AND atten_year='$atyear'";
                                $attenresult = $conn->query($checkatten);
                                $checknum = mysqli_num_rows($attenresult);
                                if ($checknum > 0) {
                                    echo "<script>alert('already take attenance')</script>";
                                    echo "<script>location.replace('attenance.php')</script>";
                                } else {

                                    foreach ($at as $key => $item) {
                                        $insertsql = "INSERT INTO `attendance_details`(`stud_id`, `atten_date`, `atten_status`,`atten_year`) VALUES ('$key','$date','$item','$atyear')";
                                        $conn->query($insertsql);
                                    }
                                    echo "<script>alert('Attenance success uploaded')</script>";
                                    echo "<script>location.replace('attenance.php')</script>";
                                }
                            }



                            ?>
                        </tbody>
                    </table>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" name="submit" value="<?php echo $attenyear ?>" class="btn btn-sub">Submit</button>
                    </div>
                </div>
            </form>
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

    .attenance-head {
        background-color: var(--white);
        padding: 15px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: space-between;
    }

    .ath {
        display: flex;
    }

    .ath p {
        margin-right: 10px;
    }

    .attenance {
        background-color: var(--white);
        margin: 30px 10px 10px 10px;
        padding: 20px 10px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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

    .attenance tbody td span {
        color: var(--txt);
    }

    .attenance tbody td {
        padding: 10px 150px;
    }

    .wrapper {
        position: relative;
        display: flex;
        flex-direction: row;
        gap: 10px;
        margin: 0 10px;
    }

    .card {
        position: relative;
        width: 80px;
        height: 50px;
        background: #fff;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .input {
        position: relative;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
        appearance: none;
        border: 1px solid #e5e5e5;
        border-radius: 10px;
        z-index: 10;
    }

    .input:checked+.check::after {
        content: "";
        position: absolute;
        top: 19px;
        right: 19px;
        width: 12px;
        height: 12px;
        background-color: rgba(255, 0, 0, 0.7);
        border-radius: 50%;
    }

    .input[value="1"]:checked+.check::after {
        background-color: rgba(0, 128, 0, 0.7);
    }

    .input[value="0"]:checked {
        border: 1.5px solid rgba(255, 0, 0, 0.7);
    }

    .input[value="1"]:checked {
        border: 1.5px solid rgba(0, 128, 0, 0.7);
    }

    .label {
        color: #323232;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .label .title {
        margin: 15px 0 0 15px;
        font-weight: 900;
        font-size: 15px;
        letter-spacing: 1.5px;
    }

    .label .price {
        margin: 20px 0 0 15px;
        font-size: 20px;
        font-weight: 900;
    }

    .label .span {
        color: gray;
        font-weight: 700;
        font-size: 15px;
    }
</style>

</html>