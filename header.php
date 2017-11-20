<header>
    <div id ="contenedorPrincipal" style="padding:10px;background-color: white;opacity:0.6">
        <div id="nombrefecha" style="width:45%;display: inline-block;">
            <?php
            echo "<p style='margin:0;'>Usuario: " .$_SESSION['nombre']. "</p> <p style='margin:0;'>Acceso: " .date("d/m/Y - H:i:s",$_SESSION['fecha']). "</p>"
            ?>
        </div>
        <div id="Boton" style=";float:right">
            <a href="login.html"><button  id='boton'  style='padding: 8px; color: white; background: #17202A; border-radius: 4px; cursor:pointer'>Cerrar sesión</button></a>
        </div> 
        
    </div>
</header>