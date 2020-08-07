<?php

if (isset($_POST['nombre'])){
    if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['msg']) 
    && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['email'])) {
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $nameFile = $_FILES['archivo']['name'];
        $sizeFile = $_FILES['archivo']['size'];
       

        $header = "From: Escubimanotasdan@hotmail.com" . "\r\n";
        $header.= "Reply-to: Escubimanotasdan@hotmail.com" . "\r\n";
        $header.= "x-Mailer: PHP/". phpversion();
        $mail = @mail($email,$asunto,$msg,$headeer);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
     
    }
}