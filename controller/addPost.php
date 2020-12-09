<?php
require_once "../model/connection.php";
include '../model/user.php';
include "../controller/session_controller.php";

$profile = $_SESSION['email']->getProfile();
$id = $_SESSION['email']->getId();
$titulo= $_POST['title'];
$path = 'public/'.time().$_FILES['img']['name'];
// $profile = $_GET['profile'];
// echo $profile;

if (move_uploaded_file($_FILES['img']['tmp_name'],'../'.$path)) {
    // El ID del user se ha de colocar de manera correcta
    $query = "INSERT INTO posts (title, path ,user) VALUES (?,?,?)";
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(1,$titulo);
    $sentencia->bindParam(2,$path);
    $sentencia->bindParam(3,$id);
    $sentencia->execute();
    if ($profile == 3) {
        echo "subido a admin";
        header('Location: ../view/admin.php');
    }elseif ($profile == 2) {
        header('Location: ../view/mod.php');
    }else{
        header('Location: ../view/home.php');
        echo "subido a home";
    }
}


