<?php
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    include("conexion.php");

    $con = Conectar();
	$SQL = "Select * from usuariostienda WHERE email = '$usuario' AND pass = '$pass';";
    $Query = EjecutarConsulta($con,$SQL);


    if(mysqli_num_rows($Query)>0){
        $fila = mysqli_fetch_row($Query);
        session_start();
        $_SESSION['usuario'] = $fila[1]; 
        // * codifica el encode en un json
        echo json_encode('success');
    }else{
        echo json_encode('error');
    }
?>

<!-- 
usuarios contraseña id
Jovan       pass    0
Badión      pass    1
...

 -->
