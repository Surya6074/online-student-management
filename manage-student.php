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
                <table class="mstud" style="overflow-x: scroll">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <th>S.No</th>
                            <th>Reg no</th>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Section</th>
                            <th>course</th>
                            <th>phoneno</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>1</td>
                            <td>212703131</td>
                            <td>suryakumar</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>8754044756</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>2</td>
                            <td>212703133</td>
                            <td>water</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>1234567890</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>3</td>
                            <td>212703128</td>
                            <td>santhosh</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>9876541230</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>4</td>
                            <td>212703116</td>
                            <td>manthi</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>4567981230</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>5</td>
                            <td>212703125</td>
                            <td>bd</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>8846513021</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>6</td>
                            <td>212703134</td>
                            <td>siva siva</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>7545424510</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>7</td>
                            <td>212703130</td>
                            <td>sriram</td>
                            <td>III</td>
                            <td>A</td>
                            <td>BCA</td>
                            <td>8745129630</td>
                            <td class="action_btn"><button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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