<?php
session_start();
include "tablas.php";
echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";
echo "<p>Número de expediente: " .$_POST['numexp']. "</p><p>Nota introducida de matemáticas: " .$_POST['notmat']. "</p><p>Nota introducida de física: ".$_POST['notfis']."</p>";
echo "<a href='principal.php'>". "Volver". "</a>";
echo "<body background='fondo3.jpg'>";
?>