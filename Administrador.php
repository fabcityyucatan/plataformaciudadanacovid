<?php 
session_start();
if(empty($_SESSION['active'])){
header('Location: https://plataformaciudadanacovid.com/Login.php');
} 
else {

include "PHP/conect.php";

if(empty($_SESSION['codigo'])){
echo "no hay id";
}

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/menus.css">
    <link rel="stylesheet" href="css/lista.css">
    <title>Administrador</title>
</head>
<body>
<div class="menus" id="menu">
	<div id="cabecera" class="cabecera">

    <p id="usua"><?php echo $_SESSION['usuario'];?></p>
	</div>
	<div class="listaMenu" id="listaMenu">
            
            <ul id="nav">
                <!--se usa los hipervinculos con el href-->
                
                <li><a href="Inactivos.php">No publicados</a></li>
				<li><a href="salir.php">Cerrar Sesión</a></li>
              </ul>
        </div>
    </div>


    <div id="contenido">
<ul>
<?php
 
        
 $publicos="si";
 $con = mysqli_connect("localhost", "platafo7_covid", "datosgeneralescovid2020", "platafo7_covid") or die("Error en la conexión.". mysqli_errno($con));

 $query = "SELECT * FROM iniciativas where publico='".$publicos."'";
 $resultado = mysqli_query($con,$query);

        
        while($filas = mysqli_fetch_assoc($resultado)){

        

          echo "<li><a style='text-decoration: none;margin: 0;' href='Retirar.php?id=".$filas['idIniciativa']."'><div id=tarjet>";
           
          if ($filas['foto']== ""){
            echo "<img id=imagen  src='img/icons/imagen.png' >";
          }else{
            echo "<img id=imagen  src='".$filas['foto']."' >";
          }
          echo "<hr id=line >";
          echo "<h2>"; echo utf8_decode($filas['nombre']); echo "</h2>";
         
          
          echo "<p id=cuerp>Categoria: "; echo utf8_decode($filas['categoria']); echo "</p><br>";
         echo "<p id=direc>Telefono: "; echo utf8_decode($filas['telefon']); echo "</p><br>";
        
         
        echo "</div></a></li>";
        }
        ?>
</ul>
</div>

    
</body>
</html>