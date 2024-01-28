<?php
function getIPAddress() {
    // Verificar si se encuentra detrás de un proxy
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

// Obtener los datos del formulario de registro
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$talla = $_POST['talla'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$idioma_preferido = $_POST['idioma'];

// Obtener la dirección IP del cliente
$ip = getIPAddress();

// Obtener la dirección MAC del cliente
$mac = getMACAddress($ip);

// Verificar si se obtuvo la dirección MAC correctamente
if (empty($mac)) {
    $mac = 'No disponible'; // O asigna un valor por defecto que indique que no se pudo obtener la MAC
}

// Crear la conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "skinskill_bd");

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Preparar la consulta SQL para insertar un nuevo usuario
$sql = "INSERT INTO usuarios (nombre_completo, correo, contrasena, direccion, talla, edad, genero, idioma_preferido, ip_registro) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Utilizar una declaración preparada
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssssssss", $nombre_completo, $correo, $contrasena, $direccion, $talla, $fecha_nacimiento, $genero, $idioma_preferido, $ip, $mac);

// Ejecutar la consulta SQL
if ($stmt->execute()) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conexion->close();
?>