<!doctype html>
<html>
    <meta charset="uft-8">
    <title>Documento sin titulo</title>
</head>

<body>
<?php

session_start();

if(!isset($_SESSION["usuario"])){

    header("Location:login.php");
}

?>
<h1>Benvenidos Usuarios</h1>
<?php

  echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

?>
  
  <p>Esto es informacion para usuarios registrados</p>  
</body> 
    </html>
