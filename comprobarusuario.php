<?php
//Recorrer la tabla usuarios:
//1) Que la contraseña coincida --> echo "adelante"
//2) Si no corresponde la pass --> echo "no coinciden usuario y pass"
//Acabes de recorrer usuarios 
//Si no lo has encontrado:
//Muestres mensaje

//incluimos las tablas:
include "tablas.php";

//FUNCIÓN:
//Si el usuario existe (es decir, coincide con $usuario):
function comprobarDatos($usuario,$clave,$USUARIOS){
	$usuarioEncontrado = false;	

	foreach ($USUARIOS as $key => $fila) {
		if ($usuario == $fila["usuario"]){
			/* contenedor */
			echo "<div style='text-align:center; background-color:#D5DBDB; margin: 200px auto;width:300px; height: 80px; border: 2px solid black; border-radius:6px;'>";
			$usuarioEncontrado = true;
			if ($clave != $fila["clave"]){
				/* contenedor */ 
				echo"<h3 style='color:#A93226;'>¡La clave o usuario introducida es INCORRECTA!</h3>";
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
				//ver última fecha de acceso:
				$_SESSION['fecha']=time();
				//una vez hecho login, guardaremos la fecha de acceso del mismo:
				$acceso = time();
				$USUARIOS[$key]["acceso"] = $acceso;
				$usuarioCadena = serialize($USUARIOS);
				file_put_contents("tablasUsuarios.txt",$usuarioCadena);
				//Automáticamente al llegar a esta línea me redirijo a "principal.php"
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
// comprobamos que los datos del formulario sean correctos:
$usuario = $_POST['usuario'];
$pass = $_POST['clave'];
// llamamos a la función:		
comprobarDatos ($usuario,$pass,$USUARIOS);
?>