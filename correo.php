<!DOCTYPE html>
<html>

<head>
    <title>Mail Form</title>
   
    <link rel="stylesheet" type="text/css" href="Estilop.css">
 
</head>
<body>
    <header>
        <link rel="stylesheet" href="estilos3.css">
        
    <nav class="navegacion">
        <ul class="menu">
            <li><a href="#">Inicio</a>
            <ul class="submenu">
                <li><a href="#" onclick="location.href='http://localhost:8090/proyecto2.php'">Pagina principal</a></li>
                
            </ul>
            </li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicios</a>
            <ul class="submenu">
                <li><a href="#" onclick="location.href='http://localhost:8090/index2.php'">Adoptar</a></li>
                <li><a href="#">Notificar</a></li>
                <li><a href="#">Dar en Adopcion</a></li>
                <li><a href="#">Buscar Mascota</a></li>
            </ul>
            </li>
            <li><a href="#">Contactos</a></li>
    
            
        </ul>
    </nav>
    </header>
</body>

<?php
session_start();
if(!isset($_SESSION["usuario"])){

    header("Location:login.php");
}

?>
  <h1>Benvenidos Usuarios</h1>
  <p>Esto es informacion para usuarios registrados</p>  

</body> 

<?php

  echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

?>

<head>
<center>
    <body background="686A6E"></body> 
<head>
   
      <table  bgcolor="E8544A"> 
    <tr>
        <td><h1> Pet Adoption, ¡Me encontrastes!</h1></td>

        <body>


</tr>
</table>
</head>
<body>
    <br><br>
    
    <body  text="black">
    <p><h3>Hola meda mucho gusto que encontrastes a una mascota perdida, ya que ellas no merecen sufrir
        te invito a que llenes este sencillo formulario, nos permitira notificar a la persona mediante un correo,
        es preferible que rellenes todos los datos necesarios, se requiere una fotografia de la mascota.
   </h3>
</fieldset>
</body>
    
   
<body>
<form method="post">
<h2>Rellena el formulario</h2>
    <input type="text"  placeholder="nombre" name="nombre" require="">
    <input type="email" placeholder="email" name="email" require="">
    <input type="text"  placeholder="telefono" name="telefono" require="">
    <input type="text"  placeholder="direccion" name="direccion" require="">
    <input type="text"  placeholder="asunto" name="asunto" require="">
    <textarea placeholder="mensaje" name="msg"></textarea> 
    <input type="File" value="Seleccionar archivo">
    <input type="submit">
    
</form>
<?php
include("correo2.php");
?>
</body>
</html>