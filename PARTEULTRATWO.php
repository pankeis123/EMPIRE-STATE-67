<?php

function limpiarNombre($nombre){
    return str_replace(" ","",trim($nombre));
}

function convertirMinusculas($texto){
    return strtolower($texto);
}

function obtenerInstitucion($institucion){
    return strtolower(substr(trim($institucion),0,2));
}

function obtenerAnio($anio){
    return substr($anio,-2);
}

function generarUsuario($nombre,$institucion,$anio){

    $nombre = convertirMinusculas(
        limpiarNombre($nombre)
    );

    return $nombre .
           obtenerInstitucion($institucion) .
           obtenerAnio($anio);
}

$userultra = "";

if(isset($_POST['generar'])){
    $nombre = $_POST['nombre'];
    $institucion = $_POST['institucion'];
    $anio = $_POST['anio'];

    $userultra = generarUsuario($nombre,$institucion,$anio);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>no me siento bien</title>
</head>
<body>
<h2>kreador de users aleatroios</h2>
<form method="POST">
    Name powerful complecxto
    <input type="text" name="nombre" required><br><br>
instituto
    <input type="text" name="institucion" required><br><br>
    año de ingresion
    <input type="number" name="anio" required><br><br>
    <button type="submit" name="generar">Generar iphone 18//// usuario</button>
</form>
<?php
if($userultra != ""){
//porque no desahogarse en el codigo buscar
echo "<h3>Usuario generado: $userultra</h3>";
}
?>
<br>
<a href="index.php">Volver al menú</a>
</body>
</html>
