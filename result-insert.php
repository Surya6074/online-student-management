<?php
include('./config/session.php');
include('./config/connect.php');
if (array_key_exists('update-mark', $_POST)) {
    $sql1 = "SELECT * FROM `student_details` WHERE stud_year=" . $_POST['update-mark'] . "";
    $result1 = $conn->query($sql1);
    $numrows1 = mysqli_num_rows($result1);
    if ($numrows1 > 0) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $studid = $row1['stud_id'];
            $marks[] = $_POST[$studid];
            print_r($marks);
            for ($i = 0; $i < $numrows1; $i++) {
                $sql = "INSERT INTO `result_details`(`stud_id`, `result_sem`, `result_int1`, `result_int2`, `result_ext`, `subject_name`) VALUES ('$studid','" . $_SESSION['sem'] . "','" . $marks[$i][0] . "','" . $marks[$i][1] . "','" . $marks[$i][2] . "','" . $_SESSION['subject'] . "')";
                $conn->query($sql);
            }
        }
    }
    echo "<script>alert('marks successfully updated')</script>";
    header('location:result.php');
}
