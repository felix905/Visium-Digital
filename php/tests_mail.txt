<?php
// Procesar el formulario si se ha enviado
$responseMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);

    // Validar los campos
    if (!empty($nombre) && !empty($email) && !empty($telefono)) {
        // Configurar el correo
        $to = 'felixska311@gmail.com'; // Cambia esto a tu dirección de correo
        $subject = 'Nueva inscripción al programa de Economía Digital';
        $message = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono";
        $headers = "From: felixska311@gmail.com\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Intentar enviar el correo
        if (mail($to, $subject, $message, $headers)) {
            $responseMessage = '¡Inscripción enviada exitosamente!';
        } else {
            $responseMessage = 'Error al enviar la inscripción. Inténtalo nuevamente.';
        }
    } else {
        $responseMessage = 'Por favor, completa todos los campos.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="courses-detailsv-2 bg_courses_5_int cmn__rightclick pt-30 pb-5">
        <div class="container">
          
            <div class="row g-6">
                <div class="col-lg-12">
                    <h5 class="text-left">Formulario de Inscripción</h5>

                    <!-- Mostrar mensaje de respuesta -->
                    <?php if (!empty($responseMessage)): ?>
                        <div class="alert" style="margin-bottom: 20px; color: <?php echo ($responseMessage === '¡Inscripción enviada exitosamente!') ? 'green' : 'red'; ?>;">
                            <?= $responseMessage; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Formulario de Inscripción -->
                    <form action="" method="POST">
                        <div class="mb-3 position-relative">
                            <input type="text" class="form-control rounded-3 border-0 shadow-none py-3 ps-5" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required />
                            <i class="fas fa-user position-absolute top-50 start-0 translate-middle-y ps-3"></i>
                        </div>

                        <div class="mb-3 position-relative">
                            <input type="email" class="form-control rounded-3 border-0 shadow-none py-3 ps-5" id="email" name="email" placeholder="Ingrese su correo electrónico" required />
                            <i class="fas fa-envelope position-absolute top-50 start-0 translate-middle-y ps-3"></i>
                        </div>

                        <div class="mb-3">
                            <input type="tel" id="phone" class="form-control rounded-3 border-0 shadow-none py-3" placeholder="Número de teléfono" name="telefono" required />
                        </div>

                        <button type="submit" class="rounded-3 border-0 shadow-none py-3 btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>

          
        </div>
    </section>
</body>
</html>
