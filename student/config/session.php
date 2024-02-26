<?php
session_start();

if (!isset($_SESSION['u_id'])) {
    echo "<script>location.replace('../login.php')</script>";
}
