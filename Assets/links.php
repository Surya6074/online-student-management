<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="./boxicons-2.1.4/css/boxicons.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    #loader {
        border: 12px solid #f3f3f3;
        border-radius: 50%;
        border-top: 12px solid #444444;
        width: 70px;
        height: 70px;
        animation: spin 1s linear infinite;
    }

    .center2loader {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    @keyframes spin {
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div id="loader" class="center2loader"></div>


<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#loader").style.visibility = "visible";
        } else {
            document.querySelector("#loader").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };
</script>
<style>
    :root {
        --blue: #2984FF;
        --lightblue: #4ea5ff;
        --white: #fff;
        --grey: #e5e5e5;
        --txt: #707070;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        overflow: hidden;
        background-color: #F8F8F9;
    }

    .body-content {
        display: flex;
    }

    .main-content {
        margin-top: 70px;
        overflow-y: scroll;
        height: 90vh;
        width: 100%;
        padding: 35px 35px;

    }

    .main-content::-webkit-scrollbar {
        width: 4px;
    }

    .main-content::-webkit-scrollbar-track {
        background-color: var(--white);
    }

    .main-content::-webkit-scrollbar-thumb {
        background-color: var(--blue);
        border-radius: 20px;
    }
</style>