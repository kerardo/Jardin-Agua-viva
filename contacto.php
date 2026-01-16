<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre']) && !empty($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contenido = $_POST['contenido'] ?? '';
    $telefono = $_POST['telefono'] ?? '';

    $para = 'contacto@jardinaguaviva.com';
    $asunto = 'Nuevo Mensaje';
    $mensaje = '
        Cliente : '.$nombre.'
        E-mail : '.$email.'
        Telefono: '.$telefono.'
        Mensaje : '.$contenido.'
    ';

    if (mail($para, $asunto, utf8_decode($mensaje))) {
        header('Location: agradecimiento.html');
        exit;
    }
} else {
    header('Location: contacto.html');
    exit;
}
?>
