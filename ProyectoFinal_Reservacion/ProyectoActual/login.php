<?php
   $vemail = $_POST['txtEmail'];
   $vpass = $_POST['txtPassword'];
   $sql="SELECT Email, Pass, NombrePila, ApellidoP, ApellidoM, Telefono, Email from Registros where Email = '".$vemail."' and Pass = '".$vpass."'";
   //traer apellidos
   echo $sql;
   include('config.php');
    $parametros=array("UID"=>$USER, "PWD"=>$PASS, "Database"=>$BD);
    $con = sqlsrv_connect($HOST,$parametros);

    if($con==false){
       // echo "<br> Error en conexión";
       echo "<script>
       alert('Al parecer ocurrió un error');
       window.location='index.php';
       </script>";
       die();
       // die(print_r(sqlsrv_errors(), true));
    } // fin conexion
    else{ // Cuando la conexion fue correcta
        $trans = sqlsrv_query($con, $sql); // select del correo que va a loguearse

        if($trans==false){ // falló el select
            // echo "<br> Error en BD";
            echo "<script>
            alert('Ocurrió un error')
            window.location='sign_in.html';
            </script>";
           //  die(print_r(sqlsrv_errors(), true));
           die();
    
         }
         else{ // fue correcto el select 
            $row= sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC);
            if($row['Email'] == null) // asegurar que no estén vacíos los datos
            {
                echo "<script>
                alert('Correo no existe')
                window.location='sign_in.html';
                </script>";
               die();
            }else{ // Cuando el correo si lo encontró
                session_start(); // Verifica si hay una sesión abierta, si la hay
                // retoma los datos, si no la abre
                $_SESSION['name'] = $row['NombrePila'];
                $_SESSION['ApellidoP'] = $row['ApellidoP'];
                $_SESSION['ApellidoM'] = $row['ApellidoM'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Telefono'] = $row['Telefono'];
                //echo $_SESSION['name'];
                echo "<script>
            window.location='index.php';
            </script>";
               die();
               
            }
         }

        sqlsrv_free_stmt($trans);
    } // Fin del else principal
    sqlsrv_close($con); 
?>