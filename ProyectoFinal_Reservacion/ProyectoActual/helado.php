<?php
$vheladoCant = $_POST['HeladoCantidad'];

include('config.php');
$sql="insert into PostresDelPedido values(11, ".$vheladoCant.", 120.00)";
//echo $sql;
$parametros=array ("UID"=>$USER, "PWD"=>$PASS, "Database"=> $BD);
$con = sqlsrv_connect($HOST,$parametros);
if($con==true){
    $trans = sqlsrv_query($con,$sql);
    if($trans==true){
        echo "<script>

        window.location='dessert.html';

        </script>";
    }
}
else{
    echo "Ya bailamos compadre' :c";
    die(print_r( sqlsrv_errors(),true));
}
?>