<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="./boxicons-2.1.4/css/boxicons.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    :root {
        --blue: rgb(64, 112, 244);
        --lightblue: #4ea5ff;
        --white: #f5f7fa;
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
        background-color: var(--grey);
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