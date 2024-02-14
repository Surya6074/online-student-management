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
            <?php include("./Assets/sidemenubar.php") ?>
        </div>
        <div class="main-content">
            <!-- content of the page -->

            <form action="add-result.php" method="post">
                <div class="result">
                    <h1>Result</h1>
                    <table>
                        <thead>
                            <th>S.no</th>
                            <th>Semester</th>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Marks</th>
                            <th>Result</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>VSEM</td>
                                <td>212703215</td>
                                <td>Tamil</td>
                                <td>80</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>VSEM</td>
                                <td>212703235</td>
                                <td>English</td>
                                <td>45</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>VSEM</td>
                                <td>212703225</td>
                                <td>Web programming</td>
                                <td>85</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>VSEM</td>
                                <td>212703255</td>
                                <td>Mobile computing</td>
                                <td>90</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>VSEM</td>
                                <td>212703265</td>
                                <td>Data Mining</td>
                                <td>40</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>VSEM</td>
                                <td>212703245</td>
                                <td>communicative English</td>
                                <td>75</td>
                                <td>P</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .result {
        background-color: var(--white);
        margin: 10px;
        padding: 20px 10px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .result h1 {
        padding: 0 0 15px 0;
    }

    .result table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    .result thead {
        background-color: #626262;
    }

    .result thead {
        color: var(--white);
    }

    .result tbody tr {
        border-bottom: 1px solid var(--grey);
    }

    .result tbody td,
    .result thead th {
        padding: 10px;
    }

    .result tbody tr:hover {
        background-color: #f3f3f3;
    }

    .result tbody td p {
        color: var(--txt);
    }
</style>

</html>