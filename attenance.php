<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include('./Assets/links.php') ?>

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

            <div class="attenance-select">
                <h1>Attenance</h1>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Year</td>
                            <td>
                                <select name="year" id="atyear">
                                    <option value="I-year">I-year</option>
                                    <option value="II-year">II-year</option>
                                    <option value="III-year">III-year</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Section</td>
                            <td>
                                <select name="section" id="atsection">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><input type="date" name="atten-date" /></td>
                        </tr>
                    </table>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" class="btn btn-sub">Submit</button>
                    </div>
                </form>
            </div>

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

    .attenance-select {
        background-color: var(--white);
        padding: 20px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .attenance-select h1 {
        margin: 15px;
    }

    .attenance-select form table {
        border-collapse: collapse;
    }

    .attenance-select form table td {
        padding: 15px;
    }

    .attenance-select form table td input,
    .attenance-select form table select {
        width: 200px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--grey);
        border-radius: 10px;
    }
</style>

</html>