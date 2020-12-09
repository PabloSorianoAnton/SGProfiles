<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- <link href="../css/fontawesome-free-5.15.0-web/css/all.css" rel="stylesheet">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/code2.js"></script>
    <title>InstaPablo</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-6 mh-100 align-self-center d-flex justify-content-center">
      <form action="../controller/loginController.php" method="POST" id="form" class="form-group form">
      <h2>Iniciar sesión</h2>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="email..."> <br>
        
        <label for="psswd">Contraseña</label>
        <input type="password" id="psswd" class="form-control" name="passwd" placeholder="contraseña..."> <br>
        
        <input id="submit" type="submit" class="btn" value="Iniciar sesión">
        <p id="msg"></p>
      </form>
    </div>
    <!-- <div class="row-login"> -->
      <div class="texto-login">
          <h1>¡Crea tu propia cuenta en InstaPablo!</h1>
          <br>
          <a href="registrarse.php"><button class="btn">Registrarte</button></a>
      </div>
    <!-- </div> -->
    </div>
  </div>
</div>
</body>
</html>
