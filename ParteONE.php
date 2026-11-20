<?php
function haveinisiales($nombre){
return strtoupper(substr(trim($nombre), 0, 3));}
function obtenerAnio($date){
return substr($date, 2, 2);}
function obtenermesdeldia($date){
return substr($date, 5, 2) . substr($date, 8, 2);}
function createclavinski($nombre, $date){    return haveinisiales($nombre) .
obtenerAnio($date) .
obtenermesdeldia($date);
}
$clavinski = "";
if(isset($_POST['generar'])){
 $nombre = $_POST['nombre'];
  $date = $_POST['fecha'];
 $clavinski = createclavinski($nombre, $date);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>I feel so awful</title>
</head>
<body>
<h2>INVENTOR dde clabes</h2>
<form method="POST">
   name you uover compelto
   <input type="text" name="nombre" required>
   <br><br>
   fecha de nacimiento de tu
    <input type="date" name="fecha" required>
  <br><br>
   <button type="submit" name="generar">
        Invbertar claves
  </button>
</form>
<?php
if($clavinski != ""){
  echo "<h3>calve generada: $clavinski</h3>";
}
?>
<br>
<a href="index.php">back at the menu</a>
</body>
</html>
