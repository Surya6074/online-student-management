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

            <div class="stud-form">
                <form action="">
                    <div class="stud-tab-head">
                        <p class="tab-active">Student</p>
                        <p class="">Address</p>
                        <p class="">Parent's Details</p>
                        <p class="">Course</p>
                    </div>
                    <div class="stud-tab-content">
                        <div class="tab active">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Name</label>
                                    <input type="text" placeholder="Name" />
                                </div>

                                <div class="inp">
                                    <label>DOB</label>
                                    <input type="date" placeholder="DOB" />
                                </div>

                                <div class="inp">
                                    <label>Email</label>
                                    <input type="email" placeholder="Email" />
                                </div>
                                <div class="inp">
                                    <label>Phone number</label>
                                    <input type="text" placeholder="Phone number" />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Street</label>
                                    <input type="text" placeholder="Street" />
                                </div>

                                <div class="inp">
                                    <label>City</label>
                                    <input type="text" placeholder="City" />
                                </div>

                                <div class="inp">
                                    <label>District</label>
                                    <input type="email" placeholder="District" />
                                </div>
                                <div class="inp">
                                    <label>Pincode</label>
                                    <input type="text" placeholder="Pincode" />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Father's Name</label>
                                    <input type="text" placeholder="Father's Name" />
                                </div>
                                <div class="inp">
                                    <label>Father's phone no</label>
                                    <input type="email" placeholder="Father's phone no" />
                                </div>

                                <div class="inp">
                                    <label>Mother's Name</label>
                                    <input type="text" placeholder="Mother's Name" />
                                </div>

                                <div class="inp">
                                    <label>Mother's phone no</label>
                                    <input type="text" placeholder="Mother's phone no" />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Department</label>
                                    <select name="section">
                                        <option value="a">BCA</option>
                                        <option value="b">Bsc</option>
                                        <option value="c">MCA</option>
                                        <option value="c">BsC IT</option>
                                        <option value="c">MCA</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <label>Year</label>
                                    <select name="section">
                                        <option value="a">III year</option>
                                        <option value="b">II year</option>
                                        <option value="c">I year</option>
                                    </select>
                                </div>

                                <div class="inp">
                                    <label>Section</label>
                                    <select name="section">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                    </select>
                                </div>

                            </div>
                            <div class="submit-btn">
                                <button type="reset" class="btn btn-re">Reset</button>
                                <button type="submit" class="btn btn-sub">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- end of page -->
        </div>
    </div>
</body>
<script>
    let tabs = document.querySelectorAll(".stud-tab-head p");
    let tabContents = document.querySelectorAll(".stud-tab-content .tab");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            tabContents.forEach((content) => {
                content.classList.remove("active");
            });
            tabs.forEach((tab) => {
                tab.classList.remove("tab-active");
            });
            tabContents[index].classList.add("active");
            tabs[index].classList.add("tab-active");
        });
    });
</script>
<style>
    .stud-form {
        background-color: var(--white);
        margin: 10px;
        padding: 20px 10px 10px;
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        height: 500px;
        width: 98%;
    }

    .stud-form form {
        display: flex;
        height: 100%;
    }

    .stud-tab-head {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-right: 1px solid var(--grey);
        width: 300px;
        height: 100%;
        user-select: none;
    }

    .stud-tab-head p {
        padding: 10px;
        transition: 0.2s;
        margin: 10px 0;
        cursor: pointer;
        font-size: large;
    }

    .stud-tab-head button:hover {
        color: var(--blue);
    }

    .tab-active {
        color: var(--blue);
        display: block;
    }

    .stud-tab-content {
        padding: 20px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
    }

    .tab-form {
        display: flex;
        flex-direction: column;
        margin: 10px 60px;
        width: 100%;
    }

    .tab-form input {
        width: 70%;
        margin: 10px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--grey);
        border-radius: 5px;
        background-color: var(--grey);
    }

    .tab {
        width: 100%;
        display: none;
    }

    .active {
        display: block;
    }

    .inp {
        display: flex;
        flex-direction: column;
    }

    .inp label {
        margin-left: 10px;
    }

    .inp select {
        width: 70%;
        margin: 10px;
        padding: 10px;
        outline: none;
        border: 1px solid var(--grey);
        border-radius: 5px;
        background-color: var(--grey);
    }

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
</style>

</html>