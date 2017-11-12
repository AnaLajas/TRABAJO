<?php
include "tablas.php";

//Comprobamos que los datos del formulario sean correctos
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];



//Recorrer la tabla usuarios:

	//Si el usuario existe (es decir, coincide con $usuario):

		//1) Que la contraseña coincida --> echo "adelante"
		//2) Si no corresponde la pass --> echo "no coinciden usuario y pass"

//Acabes de recorrer usuarios 

//Si no lo has encontrado:
	//Muestres mensaje


?>