<?php include("includes/header.php")?> <?php //Llamamos a nuestro archivo header?>
<?php include("db.php")?> <?php //Llamar a nuestro archivo db?>
<?php //Barra de Navegación?>
<nav class="navbar navbar-dark" id="barr"style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <?php //El logo y el texto nos llevará a la página de Inicio?>
      <img src="./img/logo.ico" alt="" width="26" height="26" class="d-inline-block align-text-top"> 
       LOGIN
    </a> <?php //Boton que nos llevará a Registrarnos?>
    <form class="d-flex" action="login.php">
      <button class="btn btn-outline-light" type="submit">Ingresar</button>
    </form>
  </div>
</nav>
<br><br>
<?php //DIV QUE CONTIENE TODO?>
<div class="padre">
<div class="padre2">
<?php //Tarjeta para el login?>
<div class="card text-black bg-light mb-3" id="cart" style="width: 24rem; text-align: center;">
  <div class="card-body">
    <h5 class="card-title">REGISTRARSE</h5> <br> <?php //Texto Decorativo?>
    <p class="card-text">Ingrese los datos necesarios para crear su cuenta.</p> <?php //Texto Informativo?>
    <form method="POST" action="insertar.php"> <?php //Consultar los datos en el archivo insertar.php?>
    <div class="mb-3"> <?php // Solicitud de ingreso de un usuario?>
    <label for="exampleInputNombre1" class="form-label">Ingrese un Usuario</label>
    <input type="name" class="form-control" id="exampleInputNombre1" aria-describedby="nameHelp" name="txtnom">
  </div>
  <div class="mb-3"> <?php // Solicitud de ingreso de un correo?>
    <label for="exampleInputEmail1" class="form-label">Ingrese una Dirección de Correo Electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtcor">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico.</div> <?php //Mensaje Informativo?>
  </div>
  <div class="mb-3"> <?php // Solicitud de ingreso de una contraseña?>
    <label for="exampleInputPassword1" class="form-label">Ingrese una Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="txtcon">
  </div>
  <div class="mb-3 form-check">  <?php //ChecjBox llamativo ?>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Haz clic para confirmar los datos.</label>
  </div>
  <div class="d-grid gap-2"> <?php //Botón de registrar los datos?>
  <button type="submit" class="btn btn-outline-dark" name="insertar">Registrar datos</button>
  <br>
</div>
</form>
  </div>
</div>
</div>
</div>


<?php //FOOTER?>
<?php include("includes/footer.php")?>