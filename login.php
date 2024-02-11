<?php include("./Assets/links.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
</head>

<body>
    <div class="login-form">
        <div class="container">
            <div class="quote">
                <p>
                    “Winners are not those who never fail but those who never quit.”
                </p>
                <div class="login-link">
                    <button class="login-form-link" onclick="studloginpage()">
                        Student Login
                    </button>
                    <button class="login-form-link" onclick="staffloginpage()">
                        Staff Login
                    </button>
                </div>
            </div>
            <div class="form">
                <form name="studlogin" id="studlogin" action="login.php" method="post">
                    <p class="form-header">Student Login</p>
                    <input type="text" placeholder="Register no" id="sname" name="studreg" class="inputfield" />
                    <input type="password" placeholder="Password" id="spass" name="studpass" class="inputfield" />
                    <div class="check-box">
                        <input type="checkbox" />
                        <p>Remember me</p>
                    </div>
                    <button type="submit" name="studlog" class="studlogin">login</button>
                </form>
                <form name="stafflogin" id="stafflogin" action="login.php" method="post">
                    <p class="form-header">Staff Login</p>
                    <input type="text" placeholder="Username" name="staffname" class="inputfield" />
                    <input type="password" placeholder="Password" name="staffpass" class="inputfield" />
                    <div class="check-box">
                        <input type="checkbox" />
                        <p>Remember me</p>
                    </div>
                    <button type="submit" class="stafflogin" name="stafflog">login</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
if (array_key_exists('studlog', $_POST)) {

    $studuser = $_POST['studreg'];
    $studpass = $_POST['studpass'];


    if ($studuser == "user" && $studpass == "test") {
        echo "<script> location.replace('./student/index.php'); </script>";
        header("location: ./student/index.php");
    }
}

if (array_key_exists('stafflog', $_POST)) {
    $staffuser = $_POST['staffname'];
    $staffpass = $_POST['staffpass'];

    if ($staffuser == "user" && $staffpass == "test") {
        echo "<script> location.replace('dashboard.php'); </script>";
        header("location: ./dashboard.php");
    }
}


?>
<style>
    body {
        background-color: #fff;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        height: 400px;
        width: 600px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        background-color: #fff;
        display: flex;
    }

    .container .quote {
        width: 300px;
        height: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--blue);
        flex-direction: column;
    }

    .container .quote p {
        margin-top: 20px;
        font-size: 22px;
        color: var(--white);
    }

    .login-link {
        display: flex;
        flex-direction: column;
        margin-top: 50px;
    }

    .login-form-link {
        margin: 10px;
        width: 200px;
        padding: 10px;
        border: 0;
        outline: none;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background-color: var(--white);
    }

    .container {
        position: relative;
        overflow: hidden;
    }

    #stafflogin {
        top: 500px;
    }

    .container form {
        padding: 6px 60px;
        height: 400px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        position: absolute;
        transition: 0.5s;
    }

    .container form .form-header {
        font-size: 25px;
        font-weight: 600;
        margin-bottom: 20px;
        color: var(--blue);
        display: flex;
        justify-content: center;
    }

    .container form .inputfield {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 0;
        outline: none;
        background-color: var(--grey);
        border-radius: 10px;
    }

    .container form .check-box {
        display: flex;
        margin: 8px 0 15px 0;
    }

    .container form .check-box input {
        background-color: var(--grey);
        margin-right: 10px;
    }

    .container form .check-box p {
        font-size: 14px;
    }

    .container form button {
        padding: 9px;
        background-color: var(--blue);
        outline: none;
        border: 0;
        border-radius: 10px;
        color: var(--white);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>
<script>
    var x = document.getElementById("studlogin");
    var y = document.getElementById("stafflogin");

    function studloginpage() {
        y.style.top = "500px";
        x.style.top = "0";
    }

    function staffloginpage() {
        y.style.top = "0";
        x.style.top = "500px";
    }
</script>

</html>