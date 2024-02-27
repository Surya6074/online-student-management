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

            <div class="result-head">
                <div class="year rth">
                    <p>Roll no :</p>
                    <p>212703131</p>
                </div>
                <div class="section rth">
                    <p>Year :</p>
                    <p>III</p>
                </div>
            </div>
            <form action="add-attenance.php" method="post">
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
                        <tr>
                            <td>Tamil</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Communicative English</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Mobile Computing</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Web programming</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Data Mining</td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                            <td><input type="text" /></td>
                        </tr>
                    </table>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" class="btn btn-sub">Submit</button>
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