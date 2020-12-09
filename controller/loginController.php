<?php 
    include '../model/user.php';
    include '../model/userDAO.php';

    if (isset($_POST['email'])) {
        $user = new User($_POST['email'], md5($_POST['passwd']));
        $userDAO = new UserDAO();

        if ($userDAO->login($user)) {
            if ($user->getStatus() == 0) {
                header('Location: ../view/userLock.php');
            }else {
                if ($user->getProfile() == 3) {
                    header('Location: ../view/admin.php');
                }elseif ($user->getProfile() == 2) {
                    header('Location: ../view/mod.php');
                }
                elseif ($user->getProfile() == 1) {
                    header('Location: ../view/home.php');
                }          
            }
        }else {
            header('Location: ../view/login.php');
            // echo 'No entra al segundo IF';
            // print_r($userDAO->login($user));
        }
    }else {
        // echo 'no entra al if';
        header('Location: ../view/login.php');

    }
?>