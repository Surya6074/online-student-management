<?php
include("./config/session.php");
include("./Assets/links.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | student</title>
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

            <div class="dashboard-notice">
                <div class="dnhead">
                    <p>Notice</p>
                    <span>Recent <i class='bx bx-menu-alt-left'></i></span>
                </div>
                <?php
                include('./config/connect.php');
                $sql = "Select * From `notice_details` Order By `notice_id` Desc  ";
                $result = $conn->query($sql);
                $numrows = mysqli_num_rows($result);
                if ($numrows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='dnnotice'>";
                        echo "<div class='dncontent'><p>" . $row['notice_descripttion'] . "</p></div>";
                        echo "<div class='dnfoot'><p>last updated (" . $row['notice_date'] . ")</p></div>";
                        echo "</div>";
                    }
                }
                ?>
            </div>

            <!-- end of page -->
        </div>
    </div>
</body>
<style>
    .dashboard-notice {
        display: flex;
        flex-direction: column;
        margin: 30px 0px;
    }

    .dashboard-notice .dnhead {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dashboard-notice .dnhead p {
        margin: 0 0 10px 20px;
        color: black;
        font-size: 28px;
        font-weight: 500;

    }

    .dashboard-notice .dnhead span {
        margin-right: 10px;
    }

    .dnnotice {
        background-color: var(--white);
        border-radius: 10px;
        margin: 10px;
        padding: 15px 20px;
        color: black;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .dncontent {
        padding: 10px 0;
    }

    .dnfoot {
        color: var(--txt);
        font-size: 12px;
        display: flex;
        justify-content: end;
        user-select: none;
    }
</style>

</html>