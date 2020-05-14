<?php
  $destino="aitormutilva@hotmail.com";
  $nombre=$_Post["nombre"];
  $correo=$_Post["correo"];
  $mensaje=$_Post["mensaje"];
  $contenido = "Nombre": " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje; 
  mail($destino, "contacto", $contenido);
  header("Location:gracias.html")
?>