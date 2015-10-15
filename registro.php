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

//verificacion del password
if (empty($_POST['password'])) {
    $errores[] = "Falta su <strong>password</strong>";
} else {
    $varPassword = $_POST['password'];
}

//verificacion de el nombre
if(empty($_POST['nombre'])){
    $errores[] = "Falta su <strong>nombre</strong>";
} else {
    $varNombre = $_POST['nombre'];
}

//verificacion del apellido
if(empty($_POST['apellido'])){
    $errores[] = "Falta su <strong>apellido</strong>";
} else {
    $varApellido = $_POST['apellido'];
}

//verificacion del sexo
if(!isset($_POST['sexo'])){
    $errores[] = "Escoja una opcion en<strong>sexo</strong>";
} else {
    $varSexo = $_POST['sexo'];
}

//verificar terminos
if(!isset($_POST['terminos'])){
    header('Location: index.php');
} else {
    $varTerminos = $_POST['terminos'];
}

//verificar pais
if(!isset($_POST['pais'])){
    $error[] = "seleccione un <strong>pais</strong>";
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
        fwrite($archivo, $varEmail . ", " . $varPassword . ", " . $varNombre . ", " .$varApellido . ", " . $varSexo . ", " . $varTerminos . "\n");
        // cerrar archivo
        fclose($archivo);
        include_once("registro_ok.php");
    } catch (Exception $e) {
        $errores[] = $e->getMessage();
        include_once("registro_error.php");
    }
}