<?php
session_start();

if (!isset($_SESSION['s_id'])) {
    echo "<script>location.replace('../login.php')</script>";
}
