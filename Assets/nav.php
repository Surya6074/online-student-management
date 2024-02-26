<nav>
    <div class="head">
        <p>Admin panel</p>
        <button onclick="test()"><i class='bx bxs-user-circle'></i></button>
    </div>
    <div class="user-nav" id="user-profile" onmouseleave="clearuserprofile()">
        <div class="user-profile">
            <i class="bx bxs-user-circle"></i>
        </div>
        <div class="user-name">
            <?php
            echo "<p>" . $_SESSION['u_name'] . "</p>";
            echo "<p>" . $_SESSION['u_email'] . "</p>";
            echo "<p>" . $_SESSION['u_id'] . "</p>";
            ?>
        </div>
        <div class="user-logout">
            <button onclick="location.replace('login.php')">
                <p>Logout</p>
                <i class="bx bx-log-out"></i>
            </button>
        </div>
    </div>
</nav>
<style>
    nav {
        position: relative;
    }

    nav .head {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 70px;
        background-color: var(--white);
        z-index: 100;
        padding: 10px 60px;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #dbdbdb;
        align-items: center;
    }

    nav .head p {
        font-size: 26px;
        font-weight: 600;
        color: var(--blue);
    }

    nav .head button {
        outline: none;
        border: 0;
        background: none;
    }

    nav .head button i {
        padding: 6px 0 0 0;
        font-size: 36px;
        color: var(--txt);
    }



    .user-nav {
        position: absolute;
        top: 60px;
        right: 10px;
        height: 300px;
        width: 250px;
        background-color: var(--white);
        border-radius: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        color: var(--txt);
        transition: 5s ease-in-out;
        display: none;
        z-index: 1000;
    }

    .user-profile {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user-profile i {
        font-size: 62px;
    }

    .user-name {
        padding: 20px 0 25px 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .user-name p {
        margin-top: 10px;
    }

    .user-logout {
        display: flex;
        justify-content: space-evenly;
        width: 100%;
        border-top: 1px solid var(--grey);
        padding: 20px;
        cursor: pointer;
        align-items: center;
    }

    .user-logout button {
        outline: none;
        border: none;
        height: 100%;
        width: 100%;
        background: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }


    .user-logout i {
        font-size: 26px;
        margin-left: 10px;
    }

    .user-logout p {
        font-size: 18px;
    }

    .active {
        display: block;
    }
</style>
<script>
    function test() {
        console.log("hii");
        var test = document.getElementById("user-profile");
        test.classList.add("active");
    }

    function clearuserprofile() {
        var test = document.getElementById("user-profile");
        test.classList.remove("active");
    }
</script>