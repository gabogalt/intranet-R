


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RE/MAX RIO Login</title>


    

    <!-- Bootstrap core CSS -->
<!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="prueba_cookies.php" method="post">
    <img class="mb-4" src="imagenes/logo.png" alt="" width="180" height="57">
    <?php if(isset($_GET['sf']) and $_GET['sf']):?>
      <div class="alert alert-warning" role="alert">
        TIEMPO DE SESIÓN EXPIRADO, POR FAVOR INGRESE NUEVAMENTE
      </div>
      
      <?php endif;?>

    <div class="form-floating">
      <input type="email" name="EMAIL"  class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating">
      <input type="password" name="PASS" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

   
    <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>
