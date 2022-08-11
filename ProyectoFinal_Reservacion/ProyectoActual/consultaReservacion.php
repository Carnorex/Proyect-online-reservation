<?php
$sql = "select NumReservacion, count(*) NombrePila, ApellidoP,
ApellidoM, Correo, Fecha, NumPersonas
from Reservacion
group by NumReservacion, NombrePila, ApellidoP, ApellidoM, Correo, Fecha, NumPersonas, Telefono, Hora;";


//echo "<br>".$sql;
include('config.php');
$parametros=array("UID"=>$USER, "PWD"=>$PASS,"Database"=>$BD);
$con= sqlsrv_connect($HOST,$parametros);

if($con==false){//1
	echo "<br> Error en conexion";
	die(print_r(sqlsrv_errors(), true));
/*	echo "<script> 
		alert('Al parecer ocurrio un error');
		window.location='index.php';
		</script>";*/
}//1
$trans = sqlsrv_query($con,$sql); //select, consulta a BD
if($trans==false){//2
	//echo "<br> Error en BD";
	//die(print_r(sqlsrv_errors(), true));
	echo "<script> 
		alert('No se pudo consultar');
		window.location='index.php';
		</script>";
}
else{ // Enviar a pantalla el resultado de la consulta 
echo '<table>
	<tr>
		<th>Nombre</th>
		<th>Apellido paterno</th>
		<th>Apellido Materno</th>
		<th>Fecha</th>
		<th>Numero de personas</th>
	</tr>';

	$arreglo;
	while($row = sqlsrv_fetch_array($trans,
	SQLSRV_FETCH_ASSOC)){//3
		$arreglo[]=$row;
	}//3
		foreach($arreglo as $elemento){//4

		echo '<tr>';
		echo '<td>'.$elemento['Nombre'].'</td>'.
			  '<td>'.$elemento['Apellido paterno'].'</td>'.
			  '<td>'.$elemento['Apellido Materno'].'</td>';
			  '<td>'.$elemento['Fecha'].'</td>';
			  '<td>'.$elemento['Numero de personas'].'</td>';
			  '<td>'.$elemento['Telefono'].'</td>';
			  '<td>'.$elemento['Hora'].'</td>';
			  //armar carrito de compras
			  //es un arreglo
			  //validar si un producto ya fue agregado
			 /* 
			  $yaexiste=false;
			  if(isset($_SESSION['carro'])){//1
				foreach($_SESSION['carro'] as $renglon){
					if($renglon['film_id']==$elemento['film_id']){
						$yaexiste=true;
				break;
				*/
					//1}
				//2}
			//3}
			if($yaexiste==true){
				echo'<td>Agregado</td>';
			}
			else {
			  

			 
			  } //cierre del else
		echo '</tr>';
	} //Fin foreach
	echo '</table>';

}//fin else
sqlsrv_free_stmt($trans);
sqlsrv_close($con);



?>