<?php
$vDaifukuCant = $_POST['DaifukuCantidad'];

include('config.php');
$sql="insert into PostresDelPedido values(6, ".$vDaifukuCant.", 75.00)";
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
