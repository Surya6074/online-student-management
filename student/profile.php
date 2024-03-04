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
include('./config/connect.php');


if (array_key_exists('updatestudent', $_POST)) {
    $sname = $_POST['studname'];
    $semail = $_POST['studemail'];
    $sdob = $_POST['studdob'];
    $sphno = $_POST['studphno'];
    $sgender = $_POST['studgender'];
    $sstreet = $_POST['studstreet'];
    $scity = $_POST['studcity'];
    $sdis = $_POST['studdistrict'];
    $spin = $_POST['studpincode'];
    $sdept = $_POST['studdept'];
    $syear = $_POST['studyear'];
    $sql1 = "UPDATE `student_details` SET `stud_name`='$sname',`stud_dob`='$sdob',`stud_phno`='$sphno',`stud_email`='$semail',`stud_street`='$sstreet',`stud_city`='$scity',`stud_district`='$sdis',`stud_pincode`='$spin',`stud_year`='$syear',`stud_dept`='$sdept',`stud_gender`='$sgender' WHERE `stud_id`='" . $_SESSION['s_id'] . "'";
    if ($conn->query($sql1)) {
        echo "<script>alert('Data updated successfully')</script>";
    }
}





$sql = "SELECT * FROM `student_details` WHERE stud_id=" . $_SESSION['s_id'] . "";
$result = $conn->query($sql);
if ($row = mysqli_fetch_assoc($result)) {
?>

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
                <div class="container">
                    <center>
                        <h1>Profile Page</h1>
                    </center>
                    <form action="./profile.php" method="post" onSubmit="return confirm('Are you want update this ? ')">
                        <div class="container-display">
                            <table>
                                <tr>
                                    <td>
                                        <p>Roll no : </p>
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $row['stud_id'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Name : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studname" value="<?php echo $row['stud_name'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Gender : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studgender" value="<?php echo $row['stud_gender'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>DOB : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studdob" value="<?php echo $row['stud_dob'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Email : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studemail" value="<?php echo $row['stud_email'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Phone : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studphno" value="<?php echo $row['stud_phno'] ?>">
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>
                                        <p>Department : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studdept" value="<?php echo $row['stud_dept'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Year : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studyear" value="<?php echo $row['stud_year'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Address : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studstreet" value="<?php echo $row['stud_street'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>City : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studcity" value="<?php echo $row['stud_city'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>District : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studdistrict" value="<?php echo $row['stud_district'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Pincode : </p>
                                    </td>
                                    <td>
                                        <input type="text" name="studpincode" value="<?php echo $row['stud_pincode'] ?>">
                                    </td>
                                </tr>
                            </table>

                        <?php

                    }
                        ?>

                        </div>
                        <div class="submit-btn">
                            <button type="submit" name="updatestudent" class="btn btn-sub">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end of page -->
            </div>
        </div>
    </body>
    <style>
        .container {
            background-color: var(--white);
            margin: 10px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            height: 700px;
            width: 98%;
        }

        .container-display {
            display: flex;
            width: 100%;
            justify-content: space-around;
            margin-top: 40px;
        }



        .container table tr {
            height: 70px;
        }

        .container input {
            width: 100%;
            margin: 10px;
            padding: 10px;
            outline: none;
            border: 1px solid var(--grey);
            border-radius: 5px;
            background-color: var(--grey);
        }

        .submit-btn {
            margin: 20px 10px;
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
    </style>

</html>