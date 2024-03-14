<?php
include("./config/session.php");
include("./Assets/links.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student | Admin</title>
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

            <div class="stud-form">
                <form action="add-student.php" method="post">
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
                                    <input type="text" name="studname" placeholder="Name" required />
                                </div>

                                <div class="inp">
                                    <label>DOB</label>
                                    <input type="date" name="studdob" placeholder="DOB" required />
                                </div>
                                <div class="inp">
                                    <label>Gender</label>
                                    <select name="studgender" id="">
                                        <option value="Male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <label>Email</label>
                                    <input type="email" name="studemail" placeholder="Email" required />
                                </div>
                                <div class="inp">
                                    <label>Phone number</label>
                                    <input type="text" name="studphno" placeholder="Phone number" required />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Street</label>
                                    <input type="text" name="studstreet" placeholder="Street" required />
                                </div>
                                <div class="inp">
                                    <label>City</label>
                                    <input type="text" name="studcity" placeholder="City" required />
                                </div>

                                <div class="inp">
                                    <label>District</label>
                                    <input type="text" name="studdistrict" placeholder="District" required />
                                </div>
                                <div class="inp">
                                    <label>Pincode</label>
                                    <input type="text" name="studpincode" placeholder="Pincode" required />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Father's Name</label>
                                    <input type="text" name="studfname" placeholder="Father's Name" required />
                                </div>
                                <div class="inp">
                                    <label>Father's phone no</label>
                                    <input type="text" name="studfno" placeholder="Father's phone no" required />
                                </div>

                                <div class="inp">
                                    <label>Mother's Name</label>
                                    <input type="text" name="studmname" placeholder="Mother's Name" required />
                                </div>

                                <div class="inp">
                                    <label>Mother's phone no</label>
                                    <input type="text" name="studmno" placeholder="Mother's phone no" required />
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div class="tab-form">
                                <div class="inp">
                                    <label>Department</label>
                                    <select name="studdept" id="">
                                        <option value="BCA">BCA</option>
                                        <option value="MCA">MCA</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <label>Year</label>
                                    <select name="studyear" id="">
                                        <option value="3">III YEAR</option>
                                        <option value="2">II YEAR</option>
                                        <option value="1">I YEAR</option>
                                    </select>
                                </div>

                                <div class="inp">
                                    <label>Section</label>
                                    <select name="studsection">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                    </select>
                                </div>
                                <div class="inp">
                                    <label>Register no</label>
                                    <input type="text" name="studregno" placeholder="Reg no" />
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="submit-btn">
                        <button type="reset" class="btn btn-re">Reset</button>
                        <button type="submit" name="addstudentbtn" class="btn btn-sub">Submit</button>
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

<?php
if (array_key_exists('addstudentbtn', $_POST)) {
    include_once('./config/connect.php');
    $sname = $_POST['studname'];
    $semail = $_POST['studemail'];
    $sdob = $_POST['studdob'];
    $sphno = $_POST['studphno'];
    $sgender = $_POST['studgender'];
    $sstreet = $_POST['studstreet'];
    $scity = $_POST['studcity'];
    $sdis = $_POST['studdistrict'];
    $spin = $_POST['studpincode'];
    $sfname = $_POST['studfname'];
    $sfno = $_POST['studfno'];
    $smname = $_POST['studmname'];
    $smno = $_POST['studmno'];
    $sdept = $_POST['studdept'];
    $syear = $_POST['studyear'];
    $sregno = $_POST['studregno'];
    $ssec = $_POST['studsection'];

    $sql = "INSERT INTO `student_details`(`stud_id`, `stud_name`, `stud_dob`, `stud_phno`, `stud_email`, `stud_street`, `stud_city`, `stud_district`, `stud_pincode`, `stud_fathername`, `stud_fatherno`, `stud_mothername`, `stud_motherno`, `stud_year`, `stud_dept`, `stud_gender`) VALUES ('$sregno','$sname','$sdob','$sphno','$semail','$sstreet','$scity','$sdis','$spin','$sfname','$sfno','$smname','$smno','$syear','$sdept','$sgender')";
    if ($conn->query($sql)) {
        echo "<script>alert('inserted  successfully')</script>";
    }
}



?>