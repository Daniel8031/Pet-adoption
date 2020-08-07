<!DOCTYPE html>
<html>
<head>
<title>Mail Form</title>
<link rel="stylesheet" type="text/css" href="estilo de registro.css">
</head>

<table>
<tr>
<td width=39%><input type="button" name="Iniciar Sesion" value="Regresar" onclick="location.href='http://localhost:8090/inicio del proyecto.php'"></td>
</tr>
</table>
  

<body>
  
   
<form action="comprueba_login.php" method= "post">
    <table>
        <tr>  <h1>Iniciar Sesion</h1>
            <td class="izq">
    </td><td class="der"><input type="text" placeholder="login"name="login"></td></tr>
    <tr><td class="izq"></td><td class="der"><input type="password" placeholder="Password" name="password"></td></tr>
    <tr><td colspan="2"><center><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
<br>
No tienes cuenta? <input type="button" name="enviar" value="Registrarse" onclick="location.href='http://localhost:8090/Index2.php'" ></button>


</body>
</html>
