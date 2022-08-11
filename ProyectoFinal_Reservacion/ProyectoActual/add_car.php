<?php
if(!empty($_POST)){
//verificar la cantidad y el id del producto seleccionado
if(isset($_POST['film_id']) && isset($_POST['cant'])){
//Coloca el primer producto del carrito
if(empty($_SESSION['carro'])){
$_SESSION['carro']=array( array(
"film_id"=>$_POST['film_id'],
"title"=>$_POST['title'],
"cant"=>$_POST['cant'],
"price"=>$_POST['price'],

));
print_r($_SESSION['carro']);
}
//Colocar mas productos
else{
//variable temporal para recorrer
//el carrito
$carro=$_SESSION["carro"];
$yaexiste= false;
foreach($carro as $renglon){
if($renglon["film_id"]==$_POST["film_id"]){
$yaexiste=true;
break;
}
}//fin foreach
if ($yaexiste==true){
}
else{ //se agrega si no esta en el carrito
array_push($carro, array(
"film_id"=>$_POST['film_id'],
"title"=>$_POST['title'],
"cant"=>$_POST['cant'],
"price"=>$_POST['price'],

));
$_SESSION["carro"] = $carro;
print_r($_SESSION['carro']);
}


}//else del carrito
}//fin isset
}//fin if principal
?>