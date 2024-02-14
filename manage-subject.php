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

            <div class="manage-subject">
                <div class="subject-table-head">
                    <div class="subject-title">
                        <p>Manage subject</p>
                    </div>
                    <div class="subject-search">
                        <input type="text" placeholder="Subject" />
                        <p>show</p>
                    </div>
                </div>
                <table class="msubject" style="overflow-x: scroll">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <th>S.No</th>
                            <th>Subject</th>
                            <th>subject Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><input type="checkbox" name="" id="" /></th>
                            <td>1</td>
                            <td>Tamil</td>
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
                            <td>1</td>
                            <td>English</td>
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
                            <td>1</td>
                            <td>Mobile computing</td>
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
                            <td>1</td>
                            <td>Web programming</td>
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
                            <td>1</td>
                            <td>Data mining</td>
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
                            <td>1</td>
                            <td>Communicative English</td>
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
    .manage-subject {
        background-color: var(--white);
        border-radius: 10px;
        padding: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .subject-table-head {
        padding: 20px 20px 30px 20px;
        display: flex;
        justify-content: space-between;
        color: var(--blue);
        font-size: 18px;
        font-weight: 600;
    }

    .subject-title {
        font-size: 24px;
    }

    .subject-search {
        display: flex;
    }

    .subject-search input {
        outline: none;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--grey);
    }

    .subject-search p {
        margin-left: 8px;
        font-size: 20px;
        cursor: pointer;
        color: var(--txt);
    }

    .msubject {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        overflow-x: scroll;
    }

    .msubject thead {
        background-color: #e5e5e5;
    }

    .msubject thead th,
    .msubject tbody td {
        padding: 10px 20px;
    }

    .msubject tbody tr {
        transition: 0.2s;
        border-bottom: 0.5px solid #e5e5e5;
    }

    .msubject tbody tr:hover {
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