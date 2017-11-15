<head>
    <meta charset="UTF-8">
</head>
<body background='fondo3.jpg'>
<?php
session_start();
include "tablas.php";
/* cabecera */
echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";


echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:300px; height:120px; margin:100px auto; '>";
/* datos - Si existe el expediente, lo modifico. */

// 1)Comprobar si existe el alumno con ese expediente.
$existe=false;
$expAModificar = $_POST['numexp'];

foreach ($ALUMNOS as $numExp => $fila) {
	if ($expAModificar == $numExp){
		$existe = true;
	}
}



//-> SI sí existe: Modificar sus datos.
if ($existe){
	echo "<p>Número de expediente -> " .$_POST['numexp']. "</p><p>Nota nueva de matemáticas -> " .$_POST['notmat']. "</p><p>Nota nueva de física -> ".$_POST['notfis']."</p>";

	//CAMBIAMOS EXPEDIENTE:



}
else {
	//-> Si no existe, ese alumno no existe.
	echo "<p>El expediente ".$_POST['numexp']." no existe.</p>";
}












echo "</div>";





/* enlace para volver al menú principal */
echo "<div style='text-align:center;'>";
echo "<a href= 'principal.php'><button style='padding: 4px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
echo"</div>";
/* fondo página */
?>

</body>

