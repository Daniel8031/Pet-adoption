<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['USUARIOS']) >= 1 && strlen($_POST['PASSWORD']) >= 1) {
	    $USUARIOS = trim($_POST['USUARIOS']);
	    $PASSWORD= trim($_POST['PASSWORD']);
		
		
		

	    $consulta = "INSERT INTO usuarios_pass(USUARIOS, PASSWORD) VALUES ('$USUARIOS','$PASSWORD')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {

			
	    	?> 
			<h3 class="ok">¡Te has inscripto correctamente inicia sesion para continuar!</h3>
			<input type="button" name="Iniciar Sesion" value="Iniciar Sesion" onclick="location.href='http://localhost:8090/login.php'">
			
           <?php
	    } else {
	    	?> 
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>