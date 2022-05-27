<?php   

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $header = 'From: ' . $correo . " \r\n"; 
    $header .= "X-Mailer: PHP/".phpversion()." \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $mensaje .= "Su e-mail es: " . $correo . " \r\n";
    $mensaje .= "Mensaje: " . $mensaje . " \r\n";
    
    $para = "sancajairo@gmail.com"; 
    $asunto = "Mensaje desde Lainsis";  

    mail($para, $asunto, $mensaje, $header);

    echo "Mensaje enviado";

    header("Location: index.html");

    exit;

?>