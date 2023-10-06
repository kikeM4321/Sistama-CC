<?php
include("conexion_be.php");


$usuario=$_SESSION['usuario'];

$sql = "SELECT id, nombre_completo, correo, usuario, contrasena FROM usuario WHERE usuario= 'usuario'" ;
$resultado=$conexion->query($sql);
$row=$resultado->fetch_assoc();

while($data=$resultado->fetch_assoc()){
    $id = $data['$id'];
    $nombre_completo = $data['$nombre_completo'];
    $correo = $data['$correo'];
    $usuario = $data['$usuario'];
    $contrasena = $data['$contrasena'];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>

<h1>Bienvenido al area de usuario</h1>
<input type="text" placeholder="usuario" name="correo">
<input type="text" placeholder="Correo Electronico" name="correo">
<input type="password" placeholder="Contraseña" name="contrasena">
<button a href="/Sistama-CC/cambiar_contrasena.php">Cambiar Contraseña</button>

<center><div class="Datos_usuario"> <h2 class="titulo">Datos del Perfil</h2>
<h3>id: <?php echo  $id;?> </h3>
<br>
<h3>Nombre: <?php echo  $nombre_completo;?> </h3>
<br>
<h3>Correo: <?php echo  $correo;?> </h3>
<br>
<h3>Usuario: <?php echo  $usuario;?> </h3>
<br>
<h3>Contraseña: <?php echo  $contrasena;?> </h3>
<br>







</div>
</center>






</body>
</html>