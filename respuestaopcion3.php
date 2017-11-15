<?php
session_start();
include "tablas.php";
/* cabecera */
echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";
/* datos */
echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:300px; height:120px; margin:100px auto; '>";
echo "<p>Número de expediente -> " .$_POST['numexp']. "</p><p>Nota nueva de matemáticas -> " .$_POST['notmat']. "</p><p>Nota nueva de física -> ".$_POST['notfis']."</p>";
echo "</div>";
/* enlace para volver al menú principal */
echo "<div style='text-align:center;'>";
echo "<a href= 'principal.php'><button style='padding: 4px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
if (isset($_COOKIE["expediente"]) && isset($_COOKIE["asignatura"]) && isset($_COOKIE["nota"])) {
    foreach($ALUMNOS as $indice1 => $valor1) {
        if($indice1 == $_COOKIE["expediente"]){
            $ALUMNOS[$indice1][$_COOKIE["asignatura"]]=$_COOKIE["nota"];
        }
    }
}
echo"</div>";
/* fondo página */
echo "<body background='fondo3.jpg'>";
?>