<?php
/*EJERCICIO APLICACIÓN WEB 1
Esta aplicación mantiene, mediante un array (ALUMNOS), una tabla con datos de alumnos de
un centro educativo.
En el array bidimensional el índice escalar se corresponde con el número de expediente del
alumno y el otro índice, asociativo, indica el nombre, el curso, la nota en Matemáticas y la nota
en Física.
En la aplicación solo se puede entrar si se es usuario registrado, para ello necesitaras otro
array (USUARIOS) donde guardaras los datos (usuario y clave) de cuatro usuarios.
Al entrar en la aplicación se cargará la tabla USUARIOS y saldrá una pantalla indicando que es
solo para usuarios registrado, permitiendo la autenticación, si se indican un nombre de usuario
y clave correctos se cargará la tabla ALUMNOS y se pasará al menú principal.
A partir de este momento en todas las pantallas a parecerá el nombre de usuario y la fecha de
la última vez que entro o la fecha actual si es la primera vez.
El menú principal tiene las siguientes opciones:
 Listado de las notas de un curso. El curso se indicará en un formulario.
 Listado de todos los cursos con la nota media de las dos asignaturas.
 Cambiar notas. Mediante un formulario se introduce el número de expediente (índice
escalar) y las nuevas notas.
 Listado de los usuarios que han accedido a la aplicación, ordenados por la fecha de
acceso.
Para resolver el ejercicio tendrás que implementar los script que creas convenientes y utilizar
un método apropiado para pasar los arrays entre los script.
AMPLIACIÓN DEL EJERCICIO. Analiza las ventajas e inconvenientes de los distintos métodos
para pasar los datos de un script a otro.

bidimesional: filas y columnas*/


//iniciamos sesión:
session_start();

echo "<p>Esta es la página principal</p>";

echo "<div><p>Nombre: " .$_SESSION['nombre'].  "</p></div>";





?>