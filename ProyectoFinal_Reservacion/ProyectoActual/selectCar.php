<?php


//Poner nuestra base de datos
$sql = "select film_id, count(*) available, title,
release_year, language, length, rating, price 
from catalogue
where status=1
group by film_id, title, release_year, language, length, rating, price;";



//echo "<br>".$sql;
include('config.php');
$parametros=array("UID"=>$USER, "PWD"=>$PASS,"Database"=>$BD);
$con= sqlsrv_connect($HOST,$parametros);

if($con==false){
	echo "<br> Error en conexion";
	die(print_r(sqlsrv_errors(), true));
/*	echo "<script> 
		alert('Al parecer ocurrio un error');
		window.location='index.php';
		</script>";*/
}
$trans = sqlsrv_query($con,$sql); //select, consulta a BD
if($trans==false){
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
		<th>Titulo</th>
		<th>Existencia</th>
		<th>Precio</th>
		<th>Puntitos</th>
	</tr>';
	$arreglo;
	while($row = sqlsrv_fetch_array($trans,
	SQLSRV_FETCH_ASSOC)){
		$arreglo[]=$row;
	}
		foreach($arreglo as $elemento){

		echo '<tr>';
		echo '<td>'.$elemento['title'].'</td>'.
			  '<td>'.$elemento['available'].'</td>'.
			  '<td>'.$elemento['price'].'</td>';
			  //armar carrito de compras
			  //es un arreglo
			  //validar si un producto ya fue agregado
			  $yaexiste=false;
			  if(isset($_SESSION['carro'])){
				foreach($_SESSION['carro'] as $renglon){
					if($renglon['film_id']==$elemento['film_id']){
						$yaexiste=true;
				break;
					}
				}
			}
			if($yaexiste==true){
				echo'<td>Agregado</td>';
			}
			else {
			  

			  ?>
			  <td>
			  <form method="post" action="shopping-cart.php">
			  <input type="number" name="cant" value="1"
			  min="1" max="<?php echo $elemento['available']?>" />
			  <input type="hidden" name="title" value="<?php echo $elemento['title']?>" />
			  <input type="hidden" name="price" value="<?php echo $elemento['price']?>" />
			  <input type="hidden" name="film_id" value="<?php echo $elemento['film_id']?>" />
			  <button type="submit"> Agregar </button>
			  </form>
			  </td>
			  <?php
			  } //cierre del else
		echo '</tr>';
	} //Fin foreach
	echo '</table>';

}//fin else
sqlsrv_free_stmt($trans);
sqlsrv_close($con);



?>