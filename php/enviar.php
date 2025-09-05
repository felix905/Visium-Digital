<?php
// Procesar el formulario si se ha enviado
$responseMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y limpiar los datos del formulario
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);

    // Validar los campos
    if ($nombre && $email && $telefono) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Configurar el correo
            $to = 'felix.mijares@visium.digital'; // Cambiar a tu dirección de correo
            $subject = 'Nueva inscripción al programa de Economía Digital';
            $message = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono";
            $headers = "From: felix.mijares@visium.digital\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Intentar enviar el correo
            if (mail($to, $subject, $message, $headers)) {
                $responseMessage = '¡Inscripción enviada exitosamente!';
            } else {
                $responseMessage = 'Error al enviar la inscripción. Inténtalo nuevamente.';
            }
        } else {
            $responseMessage = 'Por favor, ingresa un correo electrónico válido.';
        }
    } else {
        $responseMessage = 'Por favor, completa todos los campos correctamente.';
    }
}
?>
