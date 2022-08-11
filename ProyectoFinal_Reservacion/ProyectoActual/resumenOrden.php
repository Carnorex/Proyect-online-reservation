<?php
//session_start();
$sql = "select * from ResumenPedidoID";
//$sql = "select SUM(Total) as Total from Vista_TotalDeOrdenes";
//echo "<br>".$sql;


include('config.php');
$parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
$con = sqlsrv_connect($HOST,$parametros);

$trans = sqlsrv_query($con,$sql); //select, consulta a BD
if ($trans==true){
    while($row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC)){
       echo '(ID'.$row['CodigoProducto'].') - ';
       echo $row['Nombre'].' - ';
       echo $row['Cantidad'].' - ';
       echo '$'.$row['Importe'];
       echo "<br>";
    }
    /*
    $row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC);
    $_SESSION['Nombre']=$row['Nombre'];
    $_SESSION['Nombre']=$row['Nombre'];
    $_SESSION['Nombre']=$row['Nombre'];
    */
}

sqlsrv_free_stmt($trans);
sqlsrv_close($con);



?>