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
			/* contenedor */
			echo "<div style='text-align:center; background-color:#D5DBDB; margin: 200px auto;width:300px; height: 120px; border: 2px solid black; border-radius:6px;'>";
			echo "<h3 style='color:#17202A;'>Usuario registrado</h3>";
			$usuarioEncontrado = true;
			if ($clave != $USUARIOS[$indice]["clave"]){
				/* contenedor */ 
				echo"<h3 style='color:#A93226;'>¡La contraseña introducida es INCORRECTA!</h3>";
				echo "</div>";
				/* enlace para volver al login */
				echo "<div style='text-align:center;'>";
				echo "<a href= 'login.html'><button style='padding: 4px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
				echo"</div>";
			} else {
				echo"<p>Adelante, los datos introducidos son correctos</p>";
				//ahora iniciaría sesión y le llevaríamos a otra página (principal):
				//iniciamos la sesión:
				session_start();
				$_SESSION['nombre']=$usuario;
				//crear una cookie con la fecha
			    setcookie("fecha", date("d/m/Y H:i:s"), time()+3600);
				header('Location: principal.php');
			}
		}
	}
	if ($usuarioEncontrado == false) {
		/* contenedor */
		echo "<div style='text-align:center; background-color:#D5DBDB; margin: 200px auto;width:300px; height: 77px; border: 2px solid black; border-radius:6px;'>";		
		echo"<h3 style='color:#CD6155;'>¡NO ESTÁ REGISTRADO COMO USUARIO!</h3>";
		echo "</div>";
		/* enlace para volver al login */
		echo "<div style='text-align:center;'>";
		echo "<a href= 'login.html'><button style='padding: 4px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
		echo"</div>";
	}	
}
// Comprobamos que los datos del formulario sean correctos:
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];
// Llamamos a la función:		
comprobarDatos ($usuario,$pass,$USUARIOS);
?>