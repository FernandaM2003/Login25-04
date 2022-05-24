<?php include("db.php")?> <?php //Llamar a nuestro archivo db?>
<?php
//Llamaremos por el metodo post al boton donde se registran los datos
if(isset($_POST["insertar"])){
    //variables para donde se insertaran los datos "los names"
    $nomb = $_POST['txtnom'];
    $cor = $_POST['txtcor'];
    $contr = $_POST['txtcon'];
//If por si los campos estan vacios 
//Si lo estan mostrará un script de alerta y nos retornará a la pagina de registrar
    if($nomb == "" || $cor == "" || $contr == ""){
        echo'<script type="text/javascript">
            alert("Llenar todos los campos");
            window.location.href="registrar.php";
            </script>';
    } else { //Al contrario realizara la consulta de insertar el usuario, correo y contraseña de una persona
        $query = "INSERT INTO usuarios (usuario, correo, contra) VALUES ('$nomb','$cor','$contr')";
        $resultado = mysqli_query($conn, $query);
        //Si la variable resultado es diferente mostrará un mensaje de error en la consulta y retornara a registrar
        if(!$resultado) {
            echo'<script type="text/javascript">
            alert("Error en consulta");
            window.location.href="registrar.php";
            </script>';
        } //Si no, nos mostrará un script de alerta con Datos Registrados Existosamente y nos retornará al login con el usuario ya creado
        echo'<script type="text/javascript">
            alert("Datos Registrados Exitosamente");
            window.location.href="login.php";
            </script>';
    }
}

?>