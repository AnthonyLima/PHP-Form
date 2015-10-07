<?php

// si no proviene del formulario, redireccionar
if (!isset($_POST['email'])) {
    header('Location: index.php');
}

// verficar campos de formulario
$errores = [];
if (empty($_POST['email'])) {
    $errores[] = "Falta su <strong>email</strong>";
} else {
    $varEmail = $_POST['email'];
}

if (empty($_POST['password'])) {
    $errores[] = "Falta su <strong>password</strong>";
} else {
    $varPassword = $_POST['password'];
}

// si hay errores mostrar página de error
// de lo contrario guardar registro en csv y mostrar datos registrados
if (!empty($errores)) {

    include_once("registro_error.php");

} else {

    try {
        // intentar abrir archivo de registro
        $archivo = fopen("registros.csv", "a"); // a = agregar al final del archivo
        if ( !$archivo ) {
            throw new Exception("No se puede escribir el archivo de registro.");
        }
        // escribir archivo
        fwrite($archivo, $varEmail . ", " . $varPassword . "\n");
        // cerrar archivo
        fclose($archivo);
        include_once("registro_ok.php");
    } catch (Exception $e) {
        $errores[] = $e->getMessage();
        include_once("registro_error.php");
    }
}