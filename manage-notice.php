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

            <div class="manage-notice">
                <div class="notice-table-head">
                    <div class="notice-title">
                        <p>Manage Notice</p>
                    </div>
                    <div class="notice-search">
                        <input type="date" />
                        <p>show</p>
                    </div>
                </div>
                <table class="mnotice" style="overflow-x: scroll">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Notice</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>1</td>
                            <td>Exam</td>
                            <td>09/02/2024</td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                asdfdfasdfasdfasdfad
                            </td>
                            <td class="action_btn">
                                <button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>2</td>
                            <td>Exam</td>
                            <td>09/02/2024</td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                asdfdfasdfasdfasdfad
                            </td>
                            <td class="action_btn">
                                <button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>3</td>
                            <td>Exam</td>
                            <td>09/02/2024</td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                asdfdfasdfasdfasdfad
                            </td>
                            <td class="action_btn">
                                <button class="edt"><i class="bx bxs-edit"></i></button>
                                <button class="del"><i class="bx bxs-message-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>4</td>
                            <td>Exam</td>
                            <td>09/02/2024</td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                asdfdfasdfasdfasdfad
                            </td>
                            <td class="action_btn">
                                <button class="edt"><i class="bx bxs-edit"></i></button>
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
    .manage-notice {
        background-color: var(--white);
        border-radius: 10px;
        padding: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .notice-table-head {
        padding: 20px 20px 30px 20px;
        display: flex;
        justify-content: space-between;
        color: var(--blue);
        font-size: 18px;
        font-weight: 600;
    }

    .notice-title {
        font-size: 24px;
    }

    .notice-search {
        display: flex;
    }

    .notice-search input {
        outline: none;
    }

    .notice-search p {
        margin-left: 8px;
        font-size: 20px;
        cursor: pointer;
        color: var(--txt);
    }

    .mnotice {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        overflow-x: scroll;
    }

    .mnotice thead {
        background-color: #e5e5e5;
    }

    .mnotice thead th,
    .mnotice tbody td {
        padding: 10px 20px;
    }

    .mnotice tbody tr {
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