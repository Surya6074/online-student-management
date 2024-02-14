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

            <div class="manage-stud">
                <div class="stud-table-head">
                    <div class="stud-title">
                        <p>Manage students</p>
                    </div>
                    <div class="stud-search">
                        <input type="text" placeholder="roll no" />
                        <p>show</p>
                    </div>
                </div>
                <form action="manage-student.php" method="post" onSubmit="return confirm('Are you sure to delete?')">
                    <table class=" mstud" style="overflow-x: scroll">
                        <thead>
                            <tr>
                                <th><input type="checkbox" name="" id="" /></th>
                                <th>Reg no</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>phoneno</th>
                                <th>Year</th>
                                <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            include('./config/connect.php');

                            if (array_key_exists('delrecord', $_POST)) {
                                $delrecord = "DELETE FROM `student_details` WHERE stud_id = '" . $_POST['delrecord'] . "'";
                                if ($conn->query($delrecord)) {
                                    echo "<script>alert('" . $_POST['delrecord'] . " deleted successfully')</script>";
                                }
                            }



                            $sql = "select `stud_id`, `stud_name`,  `stud_email`, `stud_phno`,  `stud_year`, `stud_dept`, `stud_gender` from `student_details`";
                            $result = $conn->query($sql);
                            $numrows = mysqli_num_rows($result);
                            if ($numrows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><input type='checkbox' name='' id=''></td>";
                                    echo "<td>" . $row['stud_id'] . "</td>";
                                    echo "<td>" . $row['stud_name'] . "</td>";
                                    echo "<td>" . $row['stud_gender'] . "</td>";
                                    echo "<td>" . $row['stud_email'] . "</td>";
                                    echo "<td>" . $row['stud_phno'] . "</td>";
                                    echo "<td>" . $row['stud_year'] . "</td>";
                                    echo "<td class='action_btn'><button  type='submit' name='delrecord' value='" . $row['stud_id'] . "' class='del' ><i class='bx bxs-message-x'></i></button></td>";
                                    echo "</tr>";
                                }
                            }


                            // table actions button
                            // <td class='action_btn'><button class='edt'><i class='bx bxs-edit'></i></button>
                            //       <button class='del'><i class='bx bxs-message-x'></i></button>
                            //  </td>

                            ?>
                        </tbody>
                    </table>
                </form>
            </div>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .manage-stud {
        background-color: var(--white);
        border-radius: 10px;
        padding: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .stud-table-head {
        padding: 20px 20px 30px 20px;
        display: flex;
        justify-content: space-between;
        color: var(--blue);
        font-size: 18px;
        font-weight: 600;
    }

    .stud-title {
        font-size: 24px;
    }

    .stud-search {
        display: flex;
    }

    .stud-search input {
        outline: none;
        padding: 0 10px;
        border: 1px solid var(--grey);
        border-radius: 10px;

    }

    .stud-search p {
        margin-left: 8px;
        font-size: 20px;
        cursor: pointer;
        color: var(--txt);
    }

    .mstud {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        overflow-x: scroll;
    }

    .mstud thead {
        background-color: #e5e5e5;
    }

    .mstud thead th,
    .mstud tbody td {
        padding: 10px 20px;
    }

    .mstud tbody tr {
        transition: 0.2s;
        border-bottom: 0.5px solid #e5e5e5;
    }

    .mnotice tbody tr:hover {
        background-color: #f3f3f3;
    }

    .action_btn {
        display: flex;
    }

    .action_btn button {
        padding: 10px;
        margin: 4px;
        color: var(--white);
        outline: none;
        border: 0;
        cursor: pointer;
        border-radius: 4px;
    }

    .action_btn button i {
        font-size: 18px;
    }

    .edt {
        background-color: var(--blue);
    }

    .del {
        background-color: #d11919;
    }
</style>

</html>