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
                    <form action="" method="post">
                        <input placeholder="Subject Title" type="text" class="notice-input" />
                        <textarea placeholder="Subject Description" class="notice-input" name="noticemsg" cols="40" rows="6"></textarea>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
            <!-- end of page -->
        </div>
    </div>
</body>
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
    }

    .notice form .notice-input {
        margin: 20px 10px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--txt);
        border-radius: 10px;
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
</style>

</html>