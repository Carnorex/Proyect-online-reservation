<?php
    $vnombre = $_POST['txtNombre'];
    $vapellidop = $_POST['txtApellidoPaterno'];
    $vapellidom = $_POST['txtApellidoMaterno'];
    $vcorreo = $_POST['correo'];
    $vCalendario = $_POST['Calendario'];
    $vnumpersonas = $_POST['numPersonas'];
    $vtelefono = $_POST['txtTelefono'];
    $vhora = $_POST['Hora'];
    

    include('config.php');

   // $sql="insert into Reservacion values('".$vnombre."', '".$vapellidop."', '".$vapellidom."', '".$vcorreo."', '".$vCalendario."', ".$vnumpersonas.", '".$vtelefono."');";

   $sql="insert into Reservacion values('".$vnombre."', '".$vapellidop."', '".$vapellidom."', '".$vcorreo."', '".$vCalendario."', ".$vnumpersonas.", '".$vtelefono."', '".$vhora."');";

    // echo $sql;
    // parametros, conexion y transaccion
    $parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
    $con = sqlsrv_connect($HOST, $parametros);

    if($con==true){
        $trans = sqlsrv_query($con,$sql);

        if($trans==true){
            echo "insertado";
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