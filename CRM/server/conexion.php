// * Establece conexión con base de datos.

<?php  
	function Conectar(){
		$Servidor = "127.0.0.1";
		$User = "root";
		$Password = '';
		$DB = "crm";
		$Con = mysqli_connect($Servidor,$User,$Password,$DB);
		return $Con;
	}

	// * Ejecuta consulas.
	function EjecutarConsulta($Con, $SQL){
		$Query = mysqli_query($Con, $SQL);
		return $Query;
	}

	//* 
	function Cerrar($Con){
		mysqli_close($Con);
	}
?>