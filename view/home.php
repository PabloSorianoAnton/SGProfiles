<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">    
    <script src="../js/code.js">
    </script>
    <title>Document</title>
</head>
<header>
    <?php 
        include '../controller/session_controller.php';
        require_once '../model/user.php';
        require_once '../model/userDAO.php';
        // session_start();
    
        $userDAO = new UserDAO;
        $post = $userDAO->posts();
        $id = $_SESSION['email']->getId();
    ?>
    <!-- Menú de navegación -->
    <ul>
        <li><a class="active"> <?php echo $_SESSION['email']->getNombre() ?> </a></li>
        <li><a href="#post" data-toggle="modal" data-target="#exampleModalCenter">+</a></li>
        <li><a href="../controller/logoutController.php">Cerrar sesión</a></li>
    </ul>
</header>
<body>

        <!-- The Modal -->
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
            </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-dark">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Crear Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form action="../controller/addPost.php" method="POST" enctype="multipart/form-data" class="form-group">
                            <input type="text" id="fname" class="form-control" name="title" placeholder="Título de la foto..."><br>
                            <!-- <label for="file-upload" class="file">
                                <i class="fa fa-cloud-upload"></i> Subir Archivo
                            </label> -->
                            <input id="file-upload" name="img"type="file" accept="image/*">
                            <br><br>
                            <input type="submit" class="btn btn-outline-dark" value="Crear Post">
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="myModal" class="modal">
        Modal content
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Crear Post</h2>
            </div>
            <div class="modal-body">
                <form action="../controller/addPost.php" method="POST" enctype="multipart/form-data">
                    <input type="text" id="fname" name="title" placeholder="Título de la foto...">
                    <label for="file-upload" class="file">
                        <i class="fa fa-cloud-upload"></i> Subir Archivo
                    </label>
                    <input id="file-upload" name="img" type="file" accept="image/*">
                    <input type="submit" value="Crear Post">
                </form>
            </div>
        </div>
    </div> -->


    <!-- Galeria -->
        <div class="card-deck">
            <?php
                    foreach ($post as $posts ) {
                        if ($id == $posts['user']) {
                            echo '<div class="three-column">';
                            echo '<div class="card border border-success rounded">';
                                echo '<img class="card-img-top" src="../'.$posts["path"].'" alt="Card image cap">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">'.$posts["title"].'</h5>';
                                echo '</div>';
                                echo '<div class="card-footer">';
                                echo '</div>';
                            echo '</div><br>';
                            echo '</div>';
                        }else {
                            echo '<div class="three-column">';
                            echo '<div class="card ">';
                                echo '<img class="card-img-top" src="../'.$posts["path"].'" height="300px" alt="Card image cap">';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">'.$posts["title"].'</h5>';
                                echo '</div>';
                                echo '<div class="card-footer">';
                                echo '</div>';
                            echo '</div><br>';
                            echo '</div>';
                        }
                    }
                ?>
        </div>

        <!-- Crear cards para los post -->
         
            <!-- foreach ($post as $posts){
                // echo $posts['path'];
                echo '<div class="three-column">';
                    echo '<img src="../'.$posts["path"].'" alt="'.$posts['title'].'">';
                echo '</div>';
            } -->
        
</body>
</html>