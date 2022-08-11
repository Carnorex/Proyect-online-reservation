<?php
$vRamuneCant = $_POST['ramune_cantidad'];

include('config.php');
$sql="insert into BebidasDelPedido values(5, ".$vRamuneCant.", 40.00)";
//echo $sql;
$parametros=array ("UID"=>$USER, "PWD"=>$PASS, "Database"=> $BD);
$con = sqlsrv_connect($HOST,$parametros);
if($con==true){
    $trans = sqlsrv_query($con,$sql);
    if($trans==true){
        echo "<script>

        window.location='drinks.html';

        </script>";
    }
}
else{
    echo "Ya bailamos compadre' :c";
    die(print_r( sqlsrv_errors(),true));
}
?>