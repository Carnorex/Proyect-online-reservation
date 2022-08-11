<?php 
  $vnombre = $_POST['name'];
  $vapellidoM = $_POST['last_name_mother'];
  $vapellidoP = $_POST['last_name_father'];
  $vcalle = $_POST['street'];
  $vcodigopostal = $_POST['zip_code'];
  $vcolonia = $_POST['colonia'];
  $vtelefono = $_POST['mobile'];
  $vemail = $_POST['txtemail'];
  $vdescripcion = $_POST['descripcion'];
  

  include('config.php');
  $sql="insert into Cliente values('".$vnombre."','".$vapellidoM."','".$vapellidoP."','".$vcalle."',".$vcodigopostal.",'".$vcolonia."','".$vtelefono."','".$vemail."','".$vdescripcion."');
  delete from PostresDelPedido;
  delete from BebidasDelPedido;
  delete from PlatillosDelPedido;";

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