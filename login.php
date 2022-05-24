<?php include("includes/header.php")?> <?php //Llamamos a nuestro archivo header?>
<?php include("db.php")?> <?php //Llamar a nuestro archivo db?>
<?php //Barra de Navegación?>
<nav class="navbar navbar-dark" id="barr"style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <?php //El logo y el texto nos llevará a la página de Inicio?>
      <img src="./img/logo.ico" alt="" width="30" height="30" class="d-inline-block align-text-top"> 
       LOGIN
    </a> <?php //Boton que nos llevará a Registrarnos?>
    <form class="d-flex" action="registrar.php">
      <button class="btn btn-outline-light" type="submit">Crear Cuenta</button>
    </form>
  </div>
</nav>
<br>
<?php //DIV QUE CONTIENE TODO?>
<div class="padre">
<div class="padre2">
<?php //Tarjeta para el login?>
<div class="card text-black bg-dark mb-3" id="cart" style="width: 24rem; text-align: center;">
  <div class="card-body">
    <h5 class="card-title">LOGIN</h5> <?php //Texto Decorativo?>
    <p class="card-text">Ingrese los datos correspondientes en cada casilla.</p> <?php //Texto Informativo?>
    <form method="POST" action="consultar.php"> <?php //Consultar los datos en el archivo Consultar.php?>

  <div class="mb-3"> <?php // Solicitud de ingreso de un usuario?>
    <label for="exampleInputNombre1" class="form-label">Ingrese su Usuario</label>
    <input type="name" class="form-control" id="exampleInputNombre1" aria-describedby="nameHelp" name="txtnom">
  </div>
  <div class="mb-3"> <?php //Solicitud de Contraseña?>
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="txtcontra">
  </div>
  <div class="mb-3 form-check"> <?php //ChecjBox llamativo ?>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Haz clic para confirmar los datos.</label>
  </div>
  <br>
  <div class="d-grid gap-2"> <?php //Botón de ingresar y verificar si los datos estan correctos?>
  <button type="submit" class="btn btn-outline-dark">Ingresar</button>
</div>
</form>
<br> <?php //Mensaje de si no tenemos cuenta y poder dirigirnos a crear una?>
<h7 class="card-text2">¿No tienes cuenta? </h7><a id="ccuent" href="registrar.php"> <b> Crear Cuenta </b></a>
  </div>
</div>
</div>
</div>

<?php //FOOTER?>
<?php include("includes/footer.php")?>