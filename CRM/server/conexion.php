<?php  
	function Conectar(){
		$Servidor = "127.0.0.1";
		$User = "root";
		$Password = '';
		$DB = "crm";
		$Con = mysqli_connect($Servidor,$User,$Password,$DB);
		return $Con;
	}
	function EjecutarConsulta($Con, $SQL){
		$Query = mysqli_query($Con, $SQL) or die(mysqli_error($Con));
		return $Query;
	}
	function Cerrar($Con){
		mysqli_close($Con);
	}
?>