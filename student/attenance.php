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

            <form action="add-attenance.php" method="post">
                <div class="attenance">
                    <h1>Attenance</h1>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Present/Absent</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>12/02/2024</p>
                                </td>
                                <td>
                                    <p class="pre">Present</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>11/02/2024</p>
                                </td>
                                <td>
                                    <p class="pre">Present</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>10/02/2024</p>
                                </td>
                                <td>
                                    <p class="pre">Present</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>09/02/2024</p>
                                </td>
                                <td>
                                    <p class="abs">Absent</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>08/02/2024</p>
                                </td>
                                <td>
                                    <p class="abs">Absent</p>
                                </td>
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
    .attenance {
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

    .attenance h1 {
        padding: 0 0 15px 0;
    }

    .attenance table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    .attenance thead {
        background-color: #626262;
    }

    .attenance thead {
        color: var(--white);
    }

    .attenance tbody tr {
        border-bottom: 1px solid var(--grey);
    }

    .attenance tbody td,
    .attenance thead th {
        padding: 10px;
    }

    .attenance tbody tr:hover {
        background-color: #f3f3f3;
    }

    .attenance tbody td p {
        color: var(--txt);
    }

    .attenance tbody td .pre {
        color: greenyellow;
    }

    .attenance tbody td .abs {
        color: tomato;
    }
</style>

</html>