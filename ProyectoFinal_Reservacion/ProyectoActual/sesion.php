<?php
session_start();
$user='';
//verificar si la sesion del navegador tiene variables
if (isset($_SESSION['name'])){
    $menulogin='<a href="logout.php">Logout</a>';
    $user='Bienvenido,'.'&nbsp;'.''.$_SESSION['name'].'&nbsp; &nbsp;';
    $menupeli='<a href="index.php">PELICUILAS<a>';
}
else{
    $menulogin='<a href="sing_in.html">Login</a>&nbsp; &nbsp; &nbsp;
    <a href="contact.html">Registro</a>';
    $menupeli='<a href="">PELICUILAS<a>';

}

?>