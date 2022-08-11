<?php
//session_start();
$sql = "select * from Reservacion;";
//$sql = "select SUM(Total) as Total from Vista_TotalDeOrdenes";
//echo "<br>".$sql;


include('config.php');
$parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
$con = sqlsrv_connect($HOST,$parametros);

$trans = sqlsrv_query($con,$sql); //select, consulta a BD
if ($trans==true){
    echo "Num //Nombre Completo // Correo // Cantidad Personas // Telefono // Fecha y Hora";
    echo "<br>";
    while($row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC)){
       echo $row['NumReservacion'].'-';
       echo $row['NombrePila'].' ';
       echo $row['ApellidoP'].' ';
       echo $row['ApellidoM'].'-';
       echo $row['Correo'].'-';
       echo $row['NumPersonas'].'-';
       echo $row['Telefono'].'-';
       echo $row['Fecha']->format('d/m/Y').'-'; 
       echo $row['Hora']->format('H:i:s').''; 
      /*
      echo $row = date("d-m-Y");
        echo date("d-m-Y, H:i:s", time());
        echo $row['Fecha'];
        echo $row['Hora'];*/
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