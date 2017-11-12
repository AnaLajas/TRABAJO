<?php
//Recorrer la tabla usuarios:
//1) Que la contraseña coincida --> echo "adelante"
//2) Si no corresponde la pass --> echo "no coinciden usuario y pass"
//Acabes de recorrer usuarios 
//Si no lo has encontrado:
//Muestres mensaje


include "tablas.php";

//FUNCIÓN:

//Si el usuario existe (es decir, coincide con $usuario):
function comprobarDatos($usuario,$clave,$USUARIOS){
	$usuarioEncontrado = false;	
	for($indice=0; $indice<count($USUARIOS); $indice++){
		if ($usuario == $USUARIOS[$indice]["usuario"]){
			echo "<p>Usuario registrado</p>";
			$usuarioEncontrado = true;
			if ($clave != $USUARIOS[$indice]["clave"]){
				echo"<p>La contraseña introducida es incorrecta</p>";
			} else {
				echo"<p>Adelante, los datos introducidos son correctos</p>";
				//ahora iniciaría sesión y le llevaríamos a otra página (principal):
				//iniciamos la sesión:
				session_start();
				$_SESSION['nombre']=$usuario;
				header('Location: principal.php');
			}
		}
	}
	if ($usuarioEncontrado == false) {
		echo"<p>No estás registrado como usuario</p>";
	}	
}

//Comprobamos que los datos del formulario sean correctos:
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];


//Llamamos a la función:		
comprobarDatos ($usuario,$pass,$USUARIOS);

?>