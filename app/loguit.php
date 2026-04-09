<?php session_start();

session_unset();
session_destroy();

//terug naar de inlog pagina
header('location: inlog.php');
exit;

?>