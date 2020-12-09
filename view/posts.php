<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ff2d632943.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Administrar Usuarios</title>
</head>
<body>
    <?php 
        require_once '../model/userDAO.php';
        include '../controller/session_controller.php';
        require_once '../model/user.php';
        $userDAO = new UserDAO;
        $result = $userDAO->usuarios();
        $post = $userDAO->posts();
        $profile = $_SESSION['email']->getProfile();
    ?>
        <ul class="navAdmin">
            <li><a class="active"> <?php echo $_SESSION['email']->getNombre() ?> </a></li>
            <li><a href="#post" data-toggle="modal" data-target="#exampleModalCenter">+</a></li>
            <li><a href="../controller/logoutController.php">logout</a></li>
            <li><a href="../view/posts.php">Administrar Publicaciones</a></li>
        </ul><br><br><br>
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
    <div class="table-style ">
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 300px;">Imagen</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Usuario</th>
                    <th></th>
                </tr>
            </thead>
            <?php 
                foreach ($post as $posts) {
            echo "<tbody>";
                    echo '<td><img style="width:300px" src="../'.$posts["path"].'" alt=""></td>';
                    echo "<td>{$posts['title']}</td>";
                    echo "<td>{$posts['fecha']}</td>";
                    echo "<td>{$posts['user']}</td>";
                    echo "<td><a href='eliminar.php?id={$posts['id']} && path={$posts['path']}'><button class='btn btn-danger'> <i class='fas fa-trash-alt'></i></button></a></td>";
                }
            echo "</tbody>";
            ?>
        </table>
    </div>
    
</body>
</html>