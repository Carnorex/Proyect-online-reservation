<?php 
  $vNombrePila = $_POST['txtNombre'];
  $vApellidoP = $_POST['txtApellidoP'];
  $vApellidoM = $_POST['txtApellidoM'];
  $vTelefono = $_POST['txtTelefono'];
  $vCorreo = $_POST['txtEmail'];
  $vPassword = $_POST['txtPass'];

  include('config.php');
  $sql="insert into Registros values('".$vNombrePila."','".$vApellidoP."','".$vApellidoM."','".$vTelefono."','".$vCorreo."','".$vPassword."')";

//echo $sql;

$parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
$con = sqlsrv_connect($HOST, $parametros);

if($con==true){
    $trans = sqlsrv_query($con,$sql);

    if($trans==true){
        echo "Pedido realizado con éxito!";
        echo "<script>

            window.location='index.php';

            </script>";

    }else{
        echo "error al registrar";
        print_r(sqlsrv_errors(), true);
    }

}else{
    echo "Error al conectarse";
    print_r(sqlsrv_errors(), true);
}

?>