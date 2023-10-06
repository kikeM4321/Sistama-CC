<?php

session_start();
//cierra la sesion iniciada
session_destroy();
//redirigue al login
header("location: ../SISTAMA-CC/php/cerrar_sesion.php");

?>