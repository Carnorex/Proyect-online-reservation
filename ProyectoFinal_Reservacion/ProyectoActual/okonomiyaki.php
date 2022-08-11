<?php
$vOkonomiyakiCant = $_POST['okonomiyaki_cantidad'];

include('config.php');
$sql="insert into PlatillosDelPedido values(3, ".$vOkonomiyakiCant.", 270.50)";
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