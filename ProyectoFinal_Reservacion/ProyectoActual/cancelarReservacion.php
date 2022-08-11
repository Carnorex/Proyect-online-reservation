<?php 
  $vCorreoReservacion = $_POST['txtEmail'];

  include('config.php');
  $sql="delete from Reservacion where Correo = '".$vCorreoReservacion."'";

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