<?php
//session_start();
$sql = "select SUM(Total) as Total from Vista_TotalDeOrdenes" ;
//echo "<br>".$sql;



include('config.php');
$parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
$con = sqlsrv_connect($HOST,$parametros);

$trans = sqlsrv_query($con,$sql); //select, consulta a BD
if ($trans==true){
    $row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC);
    $_SESSION['Total']=$row['Total'];
}

sqlsrv_free_stmt($trans);
sqlsrv_close($con);



?>