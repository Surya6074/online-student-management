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
            <?php include("./Assets/sidemenu.php") ?>
        </div>
        <div class="main-content">
            <!-- content of the page -->
            <div class="con">
                <h1>Add Subject</h1>
                <div class="notice">
                    <form action="./add-subject.php" method="post">
                        <table>
                            <tr>
                                <td>Subject Name : </td>
                                <td><input placeholder="Subject Title" type="text" name="subjectname" class="notice-input" required /></td>
                            </tr>
                            <tr>
                                <td>Subject Year : </td>
                                <td><select name="subjectsem" class="notice-input" id="sem">
                                        <option value="ISEM">I - SEMESTER</option>
                                        <option value="IISEM">II - SEMESTER</option>
                                        <option value="IIISEM">III - SEMESTER</option>
                                        <option value="IVSEM">IV - SEMESTER</option>
                                        <option value="VSEM">V - SEMESTER</option>
                                        <option value="VISEM">VI - SEMESTER</option>
                                    </select></td>
                            </tr>
                        </table>
                        <div class="submit-btn">
                            <button type="reset" class="btn btn-re">Reset</button>
                            <button type="submit" name="submit" class="btn btn-sub">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end of page -->
        </div>
    </div>
</body>

<?php
include('./config/connect.php');
if (array_key_exists('submit', $_POST)) {
    $subjectname = $_POST['subjectname'];
    $subjectsem = $_POST['subjectsem'];
    $sql = "INSERT INTO `subject_details`(`subject_name`, `subject_sem`) VALUES ('$subjectname','$subjectsem')";
    if ($conn->query($sql)) {
        echo "<script>alert('Subject Added successfully')</script>";
    }
}
?>
<style>
    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .con {
        background-color: var(--white);
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
        border-radius: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .notice {
        width: 70%;
        padding: 10px 20px;
    }

    .notice form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .notice form .notice-input {
        margin: 20px 10px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--txt);
        border-radius: 10px;
        width: 200px;
    }

    .notice form table {
        align-items: center;
    }


    .notice form textarea {
        resize: none;
    }

    .notice form button {
        width: 100px;
        height: 45px;
        margin: 10px;
        background-color: var(--blue);
        border: 0;
        color: var(--white);
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

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
</style>

</html>