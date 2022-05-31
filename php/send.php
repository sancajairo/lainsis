<?php   

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $message = $_POST['mensaje'];

   
    $header .= "X-Mailer: PHP/".phpversion()." \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje .= "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $mensaje .= "Su e-mail es: " . $correo . " \r\n";
    $mensaje .= "Atender el siguiente mensaje: " . $message . " \r\n";
    
    $para = "laboratoriolainci@gmail.com"; 
    $asunto = "Mensaje desde Lainsis Oficial";  

    mail($para, $asunto, $mensaje, $header);

    echo "Mensaje enviado";

    

    exit;

?>