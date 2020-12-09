<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/code.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Registrar usuario</title>
</head>
<body>
    
    <div class="container-fluid height">
    <div class="">
            <div class="col-12 align-self-center d-flex justify-content-center ">
                <div class="border form-border d-flex justify-content-center">
                    <form action="./registrarse.php" method="POST" id="form" class="form-group form-registro ">
                        <h2>Registrate a InstaPablo!</h2> <br>
                        <input type="text" id="fname" class="form-control" name="name" placeholder="Nombre">
                        <br>
                        <input type="text" id="lname" class="form-control" name="surname" placeholder="Apellido">
                        <br>
                        <input type="email" id="lname" class="form-control" name="email" placeholder="Email">
                        <br>
                        <input type="password" id="passwd" class="form-control" name="passwd" placeholder="Contraseña">
                        <br>
                        <input type="password" id="passwd2" class="form-control" name="passwd2" placeholder="Repitir contraseña">
                        <br>
                        <input type="submit" value="Enviar" class="btn" name="enviar">
                        <p id="msg"></p>
                        <p id="msgPasswd"></p>
                        <?php 
                            require_once '../model/userDAO.php';
                            if (isset($_POST['enviar'])) {
                                $user = new UserDAO;
                                $user->validarEmail();
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>