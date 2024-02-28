<div class="sidebar">
    <ul class="menu-content">
        <li class="menu-items" onclick="location.replace('index.php')">
            <a href="index.php">Dashboard</a>
        </li>
        <li class="menu-items" onclick="location.replace('profile.php')">
            <a class="links">Profile</a>
        </li>
        <li class="menu-items link" onclick="location.replace('attenance.php')">
            <a href="attenance.php" class="links">Attenance</a>
        </li>
        <li class="menu-items link" onclick="location.replace('result.php')">
            <a href="result.php" class="links">Results</a>
        </li>
    </ul>
    <div class="btm" onclick="location.replace('logout.php')">
        <p>Logout</p>
        <p><i class='bx bx-log-out'></i></p>
    </div>
</div>
<style>
    .sidebar {
        margin-top: 10px;
        width: 260px;
        background-color: var(--white);
        padding: 20px;
        height: 100vh;
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        overflow: hidden;
        color: var(--txt);
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .menu-content {
        overflow: scroll;
        padding: 60px 0;
        transition: 1s ease-in-out;
    }

    .menu-content::-webkit-scrollbar {
        display: none;
    }

    .menu-content .menu-items {
        list-style: none;
        padding: 10px;
        cursor: pointer;
    }

    .sub-menu {
        list-style: none;
        padding-left: 20px;
        display: none;
        transition: 1s ease-in-out;
        margin-top: 8px;
    }

    .menu-items:hover {
        width: 100%;
        background-color: var(--blue);
        border-radius: 10px;
        text-decoration-color: white;
    }

    .menu-items:hover a {
        color: var(--white);
    }

    .menu-items a {
        text-decoration: none;
        color: var(--txt);
    }

    .sub-menu li {
        padding: 10px;
    }

    .sub-menu li:hover {
        background-color: var(--white);
        border-radius: 10px;
    }

    .sub-menu li:hover a {
        color: var(--txt);
    }

    .btm {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: var(--white);
        width: 100%;
        padding: 20px;
        display: flex;
        justify-content: space-around;
        border-top: 1px solid #dbdbdb;
        cursor: pointer;
    }

    .btm p {
        font-size: 18px;
    }

    .btm p i {
        font-size: 26px;
    }

    .active {
        display: block;
    }



    @media only screen and (max-width: 700px) {
        .sidebar {
            display: none;
        }
    }
</style>
<script>
    document.querySelectorAll(".link").forEach(function(link) {
        link.addEventListener("click", function(e) {
            if (e.target.children[1].classList.contains("active")) {
                e.target.children[1].classList.remove("active");
                console.log("active");
            } else {
                e.target.children[1].classList.add("active");
                console.log("not");
            }
        });
    });
    document.querySelectorAll(".links").forEach(function(links) {
        links.addEventListener("click", function(e) {
            if (e.target.parentNode.children[1].classList.contains("active")) {
                e.target.parentNode.children[1].classList.remove("active");
                console.log("active");
            } else {
                e.target.parentNode.children[1].classList.add("active");
                console.log("not");
            }
        });
    });
</script>