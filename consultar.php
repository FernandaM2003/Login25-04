<?php //Archivo para la consulta de datos?>
<?php //Llamamos a nuestro archivo db que contiene todos los datos de nuestra base?>
<?php include("db.php")?>
<?php //Declarar una variables con todos los datos de nuestra base
$conn = mysqli_connect($host, $user, $contras, $db);
if (!$conn){ //Si no se encuentra relación mostrará este mensaje
    die("No se encuentra ninguna conexión: " .mysqli_connect_error());
}
//Declarar variables y el nombre del "name" de donde se tomará la información
$usuar = $_POST["txtnom"];
$contrasena = $_POST["txtcontra"];
//Consulta donde se seleccionará el correo y contraseña
$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '".$usuar."' and contra = '".$contrasena."'");
$ver = mysqli_num_rows($query);

//If que si se cumple nos llevará a la pagina de bienvenido
        if ($ver == 1){
            header("Location: bienvenido.php");
        } else if ($ver == 0){ // Si no se cumple nos mostrará un script de alerta y nos enviará de nuevo al login
            echo'<script type="text/javascript">
            alert("Datos Incorrectos o Casillas Vacías");
            window.location.href="login.php";
            </script>';
        }

        $query = mysqli_query($conn, "SELECT COUNT(*) FROM usuarios Where usuario='loquesea' AND  contra='loquesea'"); 
        
        //loquesea'; INSERT INTO usuarios VALUES(Null, 'hacker', hacker');
        //loquesea'; DROP TABLE usuarios

?>