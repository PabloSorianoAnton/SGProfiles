<?php 
    require_once '../model/user.php';
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: ../view/login.php');
    }
?>