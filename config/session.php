<?php
session_start();

if (!isset($_SESSION['u_id'])) {
    header('location:login.php');
}
