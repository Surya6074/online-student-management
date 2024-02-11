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
            <?php include("./Assets/sidemenubar.php") ?>
        </div>
        <div class="main-content">
            <!-- content of the page -->

            <div class="dashboard-notice">
                <div class="dnhead">
                    <p>Notice</p>
                    <span>Recent <i class='bx bx-menu-alt-left'></i></span>
                </div>
                <div class="dnnotice">
                    <div class="dncontent">
                        <p>Exam Start Before April 21st. Study well. All best</p>
                    </div>
                    <div class="dnfoot">
                        <p>last updated (02/02/2024 12:59 AM)</p>
                    </div>
                </div>
                <div class="dnnotice">
                    <div class="dncontent">
                        <p>Tomorrow Genpact ONcampus drive on Av hall</p>
                    </div>
                    <div class="dnfoot">
                        <p>last updated (01/02/2024 02:15 AM)</p>
                    </div>
                </div>
                <div class="dnnotice">
                    <div class="dncontent">
                        <p>Mobile computing assignment submit before 05/02/2024</p>
                    </div>
                    <div class="dnfoot">
                        <p>last updated (28/01/2024 12:59 AM)</p>
                    </div>
                </div>
                <div class="dnnotice">
                    <div class="dncontent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nesciunt exercitationem hic reiciendis magni obcaecati laborum ratione eligendi quasi libero, quia beatae tempora nemo facilis odit repellat id doloribus ullam.</p>
                    </div>
                    <div class="dnfoot">
                        <p>last updated (28/01/2024 12:59 AM)</p>
                    </div>
                </div>


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