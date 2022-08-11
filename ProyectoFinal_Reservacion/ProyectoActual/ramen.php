<?php
$vRamenCant = $_POST['ramen_cantidad'];

include('config.php');
$sql="insert into PlatillosDelPedido values(6, ".$vRamenCant.", 250.85)";
//echo $sql;
$parametros=array ("UID"=>$USER, "PWD"=>$PASS, "Database"=> $BD);
$con = sqlsrv_connect($HOST,$parametros);
if($con==true){
    $trans = sqlsrv_query($con,$sql);
    if($trans==true){
        echo "<script>
        window.location='snacks.html';
        </script>";
    }
}
else{
    echo "Ya bailamos compadre' :c";
    die(print_r( sqlsrv_errors(),true));
}
?>