<?php 
    require_once '../model/userDAO.php';
    $id = $_GET['id'];
    $userDAO = new UserDAO;
    $userDAO->desbloquear($id);
?>