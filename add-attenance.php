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
            <div class="attenance-head">
                <div class="year ath">
                    <p>Year :</p>
                    <p>III</p>
                </div>
                <div class="section ath">
                    <p>Section :</p>
                    <p>A</p>
                </div>
                <div class="date ath">
                    <p>Date :</p>
                    <input type="date" />
                </div>
            </div>
            <form action="add-attenance.php" method="post">
                <div class="attenance">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Present/Absent</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>suryakumar <span>(212703131)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ragava <span>(212703125)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Yuvaaa <span>(212703134)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Santhosh <span>(212703128)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Manthi <span>(212703116)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Sriram <span>(212703130)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Water <span>(212703133)</span></p>
                                </td>
                                <td>
                                    <label class="checkbox">
                                        <input name="check5" type="checkbox" class="checkbox__input" />
                                        <span class="checkbox__inner"></span>
                                    </label>
                                </td>
                            </tr>

                        </tbody>
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

    .attenance-head {
        background-color: var(--white);
        padding: 15px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: flex;
        justify-content: space-between;
    }

    .ath {
        display: flex;
    }

    .ath p {
        margin-right: 10px;
    }

    .attenance {
        background-color: var(--white);
        margin: 30px 10px 10px 10px;
        padding: 20px 10px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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

    .attenance tbody td span {
        color: var(--txt);
    }

    .checkbox {
        position: relative;
        overflow: hidden;
    }

    .checkbox__input {
        visibility: hidden;
    }

    .checkbox__inner {
        display: inline-block;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 1px solid #626262;
        background: transparent no-repeat center;
    }

    .checkbox__input:checked+.checkbox__inner {
        border-color: #52c6c4;
        background-color: #52c6c4;
        background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='14px' height='10px' viewBox='0 0 14 10' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3C!-- Generator: Sketch 59.1 (86144) - https://sketch.com --%3E%3Ctitle%3Echeck%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='ios_modification' transform='translate(-27.000000, -191.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cg id='Group-Copy' transform='translate(0.000000, 164.000000)'%3E%3Cg id='ic-check-18px' transform='translate(25.000000, 23.000000)'%3E%3Cpolygon id='check' points='6.61 11.89 3.5 8.78 2.44 9.84 6.61 14 15.56 5.05 14.5 4'%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        background-size: 14px 10px;
    }
</style>

</html>