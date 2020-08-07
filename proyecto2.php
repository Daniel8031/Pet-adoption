<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
    <title>Bienvenido a Pet  Adoption</title>
    <body background="F:\MI pagina web\pet3.jpg"></body>
   
    <link rel="stylesheet" type="text/css" href="Estilop.css">
     
</head>

<?php
session_start();
if(!isset($_SESSION["usuario"])){

    header("Location:login.php");
}

?>
   


<body>
    <header>
        <link rel="stylesheet" href="estilos3.css">
        
    <nav class="navegacion">
        <ul class="menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicios</a>
            <ul class="submenu">
                <li><a href="#" onclick="location.href='http://localhost:8090/index2.php'">Servicio #1</a></li>
                <li><a href="#">Servicio #2</a></li>
                <li><a href="#">Servicio #3</a></li>
            </ul>
            </li>
            <li><a href="#">Contactos</a></li>
    
            
        </ul>
    </nav>
    </header>

    
</body> 
<p>
    <table bgcolor="FFFFFF" >
        <tr>

 <td><?php

  echo "Bienvenid@: " . $_SESSION["usuario"] . "<br><br>";

?><p><button  class="btn btn-primary" onclick="location.href='http://localhost:8090/cierre.php'" >Cerrar Sesion</button></td>

</tr>

</table>



</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<center>
    <body background="686A6E"></body> 
<head>
   
      <table  bgcolor="FBFD62"> 
    <tr>
        <td><img src="https://i.pinimg.com/originals/c8/50/02/c85002dfcfab65b3dc86304ab65017ec.gif" width=389 heights=250></td><td><h1>Bienvenido Pet Adoption</h1></td><td><img src="https://i.pinimg.com/originals/c8/50/02/c85002dfcfab65b3dc86304ab65017ec.gif" width=389 heights=250></td>


</tr>
</table>







</body>
</head>

<body>
    <br><br>
    <fieldset>
    <body  text="black">
    <p><h4>Espero que te encuentres bien, somos una empresa que se encarga en la a dopcion de animales que ya no quieras tener en casita,
    lo que hacemos es buscar a otra persona que este buscando una para darle un hogar y no dejar que ellas sufran, nos encargamos de recopilar informacion,
    necesaria para que tu mascota sea feliz, nos preocupamos por la informacion recompilada del usuaria ya que cuya informacion sera anonima y discreta sin usos lucros. 
   </h4>
</fieldset>
</body>

<br><br>


<table  bgcolor="FFFFFF" width=72%>
    <tr>

  <td width=42%><center><h5>Quieres adoptar?</center></td>
       <tr> 
       <td><img src="https://techronga.com/wp-content/uploads/2019/11/no-compre-adopta.jpg" width=389 heights=250></td><td><h5>Para que puedas adoptar tienes que llenar un registro donde
           introduciras tus datos personales, por seguridad la informacion sera guardada y no se usaran para otros asuntos de fines lucros puedes presionar el boton de abajo para continuar</h5><P>
               <h5>
                <button  class="btn btn-primary" onclick="location.href='http://localhost:8090/login.php'" >Adoptar</button>
           
           </td>
    </tr>
</table>
   <br>

    <table bgcolor="FFFFFF"  width=72%>
      <tr>
        <td width=42%><center><h5>Encontrastes a una mascota perdida?</h5></center></td><p>
            <tr>

                <td><img src="https://www.infobae.com/new-resizer/67mC80x3Hcoh2fnnVAbpUCcayHY=/420x236/filters:format(jpg):quality(85)//s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/03/05111053/buscando-huellas-3-1200x675.jpg" width=389 heights=250></td><td><h5><p>
                    Encontrastes una mascota perdida? ahora pudes notificar al dueño,
                    para notificar puedes entrar dando un clic en el boton que se encuentra
                     en la parte de abajo, se requiere que tengas fotos tomadas
                    de la mascota.
                </h5></p>
                         <button  class="btn btn-primary" onclick="location.href='http://localhost:8090/login.php'">Notificar</button>

      </tr>
    </table>
    <br>

    <table bgcolor="FFFFFF" width=72%>
<tr>
   
    <td width=42%><center><h5>Deseas dar en adopcion?</h5></center></td><p>
        <tr>
            <td><img src="https://playfm.cl/playfm/site/artic/20180419/imag/foto_0000000320180419095343.jpg"  width=389 heights=250></td><td><h5><p>
                Buscas darle una mejor vida a tu mascota dandola en adopcion,
                es la mejor opcion ya que nuestras macotas no meresen ser 
                maltratadas, por eso te invito a acceder.
            
                    <h5>
                     <button class="btn btn-primary" onclick="location.href='http://localhost:8090/index2.php'" >Dar en Adopcion</button>
                </P>
</tr>
</table>

<br>
<table bgcolor="FFFFFF">
    <tr>
        <td width=39%><center><h5>Buscas a tu mascota perdida?</h5></center></td><p</tr>
        <tr>
            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFGtLeePf8tSoh5xJE56njHlYZg4c9SrJ2Vw&usqp=CAU"  width=389 heights=250></td><td><h5><p>
                Estas preocupado por tu mascota, puedes acceder para ver las<br>
                publicaciones, no te preocupes si no aparese, tarde o temprano<br>
                alguie lo puedo aver encotrado, tranquilo que todo estara bien.
                <br><br>

                <button class="btn btn-primary" onclick="location.href='http://localhost:8090/index2.php'" >Buscar</button>
            </p></h5></td>
    </tr>
</table>


<br>
<br>
<br>





</body>


</html>