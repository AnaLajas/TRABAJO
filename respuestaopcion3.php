<head>
    <meta charset="UTF-8">
</head>
<body background='fondo3.jpg'>
	<?php
		//iniciamos sesión e incluimos tablas:
		session_start();
		include "tablas.php";
		/* cabecera */
		echo "<a href= 'login.html'><input type='button' id='boton' value='Cerrar sesión' style='padding: 8px; color: white; background: #17202A; border-radius: 4px; float:right;'></input></a>";
		echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p style='margin:0 auto;'>El usuario: " .$_SESSION['nombre']. "<p style='margin:0 auto;'>Acceso: " .$_SESSION['fecha']. "</p></div></header>";
		echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:350px; height:200px; margin:100px auto; '>";
		
		/* datos - Si existe el expediente, lo modifico */
		// 1)Comprobar si existe el alumno con ese expediente
		$existe=false;
		$expModificar = $_POST['numexp'];

		foreach ($ALUMNOS as $numExp => $fila) {
			if ($expModificar == $numExp){
				$existe = true;
			}
		}
		//-> SI sí existe: Modificar sus datos
		if ($existe){
			echo "<h2>Modificaciones:</h2>";
			echo "<h4>Número de expediente -> " .$_POST['numexp']. "</h4><h4>Nota nueva de matemáticas -> " .$_POST['notmat']. "</h4><h4>Nota nueva de física -> ".$_POST['notfis']."</h4>";
			//CAMBIAMOS EXPEDIENTE:
			//primero matemáticas
			$ALUMNOS[$expModificar]['notaMates'] = $_POST['notmat'];
			$ALUMNOS[$expModificar]['notaFisica'] = $_POST['notfis'];
			//GUARDAMOS LAS MODIFICACIONES:
			$alumnos = serialize($ALUMNOS);
			file_put_contents("tablasAlumnos.txt",$alumnos);
			//-> Si no existe, ese alumno no existe
			} else {
				echo "<h2 style='color:#A93226; margin-top:90px;'>¡El expediente  ".$_POST['numexp']."  no existe!</2>";
		}
		
		echo "</div>";
		/* enlace para volver al menú principal */
		echo "<div style='text-align:center;'>";
		echo "<a href= 'principal.php'><button style='padding: 5px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
		echo"</div>";
	?>
</body>

