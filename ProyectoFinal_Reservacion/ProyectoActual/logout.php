<?php
session_start(); //abre o retoma la sesion abierta
session_destroy();
header('Location:index.php');

?>