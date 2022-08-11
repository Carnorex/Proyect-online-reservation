<?php
include('sesion.php');
?>

<!DOCTYPE html>
<!-- instruccion para navegador: DOCTYPE, usa html5 -->
<!-- comentarios -->
<!-- comandos en html se encuentran <>
	 conados, etiquetas, tags, instrucciones
	 algunos comandos abren y cierran
	 otros comandos solo abren
-->
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ordenar ahora</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet"/>
<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">
 <!-- Preloader -->
    <div class="preloader"></div>
   <!-- Main Header-->
   <header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <!--social-icon-->
                    <div class="social-icon">
                      	<a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
                        <a href="https://twitter.com/?lang=es"><span class="fa fa-twitter"></span></a>
                        <a href="https://www.youtube.com/"><span class="fa fa fa-youtube"></span></a>
                    </div>
                    <ul class="clearfix">
                    <?php
                        echo $user;     
                        ?>  
                        </ul>
                </div>
                <!--Top Right-->
                <div class="top-right">
                    <ul>
                        <li>Horarios : 9 am de 9:00 pm</li>
                        <li class="eng-dropdown dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="icon"></span> Cuenta <span class="arow-icon fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                <li><a href="sign_in.html">Iniciar sesion</a></li>
                                <li><a href="logout.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Artica"></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">                            
                            <!-- Toggle Button -->    	
                                                     
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Inicio</a>
                                </li>
                                                                                                   
                                <li><a href="Reservacion.php">Reservacion</a>
                                </li>
                                
                                <li><a href="snacks.html">Platillos</a>
                                </li>
                                
                                <li><a href="drinks.html">Bebidas</a>
                                </li>

                                <li><a href="dessert.html">Postres</a>
                                </li>

                                <li><a href="contact.html">Registrate</a>
                                </li>

                                <li class="dropdown"><a href="#"> Todas las paginas</a>
                                    <ul>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="contact.html">Contacto</a></li>
                                            <!--<li><a href="shopping-cart.html">Tienda de carrito</a></li>-->
                                            <li><a href="gallery.html">Galeria</a></li>
                                        <li><a href="ordernow.php">Ordenar online</a></li>
                                        <li><a href="Reservacion.php">Reservacion</a></li>
                                        <li><a href="sign_in.html">Iniciar sesion</a></li>
                                        <li><a href="snacks.html">Platillos</a></li>
                                        <li><a href="drinks.html">Bebidas</a>
                                        <li><a href="dessert.html">Postres</a>

                                    </ul>
                                </li>


                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!--Reserv Box Btn-->
                    <div class="btn-outer"><a href="ordernow.php" class=" reserv-box-btn">Ordena online</a></div>
                    
                </div><!--Nav Outer End-->
                
            
            </div>    
        </div>
    </div>

</header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.php"><img src="images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                    <li><a href="index.php">Inicio</a>
                        
                    </li>
                                    <li><a href="ordernow.php">Ordenar online </a></li>                                    
                                    <li class="dropdown"><a href="#">Todas las paginas</a>
                                    	<ul>
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="contact.html">Registrate</a></li>
                                            <li><a href="checkout.html">Pagar pedido</a></li>
                                            <li><a href="gallery.html">Galeria</a></li>
                                            <li><a href="ordernow.php">Ordenar online</a></li>
                                            <li><a href="Reservacion.php">Reservacion</a></li>
                                            <li><a href="sign_in.html">Iniciar sesion</a></li>
                                            <li><a href="snacks.html">Platillos</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="snacks.html">Platillos</a></li>
                                    <li><a href="contact.html">Registrate</a></li>
                 </ul>
            </div><!-- /.Side-menu -->
        
           
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
                    <a href="https://www.youtube.com/"><span class="fa fa fa-youtube"></span></a>
                </ul>
            </div>

        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
    	<div class="auto-container">
            <h2>Ordena ahora</h2>
        </div>
    </section>
    <!--Page Title-->
    
    
    <!--Form Starts Here-->
    <section class="signin_food">
    <div class="container">
    
    <form id="" action="insertarCliente.php" method="post">
            	<div class="row">
                	<div class="col-md-4">
                    	<img src="images/product.jpg" class="img-responsive thumbnail" />
                    </div>
                	<div class="col-md-8">
                		<div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title"><i class="fa fa-map-marker"></i> Detalles del pedido</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">

                                <div class="form-group">
                                    <label for="name">Primer nombre</label>
                                    <input type="text" placeholder="First_name" class="form-control input-sm required" name="name" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Apellido paterno</label>
                                    <input type="text" placeholder="last_name_father" class="form-control input-sm required" name="last_name_father" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="name">Apellido materno</label>
                                    <input type="text" placeholder="last_name_mother" class="form-control input-sm required" name="last_name_mother" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="mobile">Telefono</label>
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-addon">+52</span>
                                      <input type="tel" class="form-control input-sm required" placeholder="Mobile Number" name="mobile" maxlength="10" min="10"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="address">Calle</label>
                                    <input type="text" placeholder="street" class="form-control input-sm required" name="street" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="address">Colonia</label>
                                    <input type="text" placeholder="colonia" class="form-control input-sm required" name="colonia" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="address">Numero de casa</label>
                                    <input type="varchar" placeholder="zip code" class="form-control input-sm required" name="zip_code" />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="address">Email</label>
                                    <input type="varchar" placeholder="Email" class="form-control input-sm required" name="txtemail" />
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Descripcion</label>
                                    <input type="varchar" placeholder="Descripcion (máximo 200 caracteres)" class="form-control input-sm required" name="descripcion" maxlength="200" />
                                </div>
                            </div>
     
                        </div>
                    </div>
                </div> 
                	</div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                      	<h5 class="panel-title"><i class="fa fa-cutlery"></i> Detalle de la compra
                        </div>
                    <div class="panel-body">
                        <div class="row">
                        	<div class="col-sm-3">
                            	<div class="well well-sm text-center">
                                	<label name="Total">Total</label>
                                    <h2 class="no-margin"><i class="fa fa-dollar"></i><span id="subtotal">
                                        <?php
                                                 include('ordenTotal.php');
                                                 echo $_SESSION['Total'];
                                        ?>
                                        </span></h2>
                                </div>
                            </div>

                            <div class="col-sm-3">
                            	<div class="row">
                                
                                    <div class="col-xs-12">
                                    	<button type="submit" name="btnordenar" class="btn btn-sm btn-success btn-block" id="pay" onclick="confirm('¿Desea realizar el pedido?')">Ordena ahora</button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-5">
                            	<div class="well well-sm text-center">
                                	<label name="Total">Resumen de la orden</label>
                                    <h2 class="no-margin"></i><span id="subtotal">
                                       <?php
                                                 include('resumenOrden.php');
                                                
                                        ?>
                                        </span></h2>
                                </div>
                            </div>
                            
                           

                            
                            <div class="col-sm-12">
                            	<p class="text-center"><small>Despues de la compra no podra NO SE DEVOLVERA DINERO.</small></p>
                            <div class="col-sm-12">
                            	<div class="alert" id="alert"></div>
                            </div>

                            
                        </div>
                    </div>
                </div>  

                 </div>
            </form>
   
     </div>
    </section>
    <!--Form ends Here-->
<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">
    
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-7 col-sm-7 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo"><figure><a href="index.php"><img src="images/footer-logo.png" alt=""></a></figure></div>
                                <div class="widget-content">
                                    <div class="text"> “Este Programa es público, ajeno a cualquier partido político. Queda prohibido el uso
                                        para fines distintos a los establecidos en el programa.” </div>
                                    <!--Contact Info-->
                                    <ul class="contact-info">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Direccion : Carretera Libre Tijuana-Tecate Km 10 Fracc. El Refugio, Quintas Campestre, 22253 Redondo, B.C.</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                                            Telefono : 664 730 65 10</li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                            Email : selina@gmail.com</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Relaciones</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="Reservacion.php">Reserva ahora</a></li>
                                        <li><a href="contact.html">Registrate</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget posts-widget">
                                <h2>Proximos platillos</h2>
                                <div class="widget-content">
                                    <div class="posts">
                                        <div class="post">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                            <div class="desc-text"><a href="#">Comida japonesa</a></div>
                                            <div class="time"> Fecha </div>
                                        </div>
                                        <div class="post">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                            <div class="desc-text"><a href="#">Comida japonesa</a></div>
                                            <div class="time"> Fecha </div>
                                        </div>
                                        <div class="post">
                                            <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                            <div class="desc-text"><a href="#">Comida japonesa</a></div>
                                            <div class="time"> Fecha </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget opening-widget">
                                <h2>Nuestros horarios</h2>
                                <div class="widget-content">
                                    
                                    <ul>
                                        <li class="clearfix"><div class="day pull-left">Lunes — Vienres</div><span class="dots">................</span><div class="time pull-right">9:00 am - 21:00 pm</div></li>
                                        <li class="clearfix"><div class="day pull-left">Sabado</div><span class="dots">................</span><div class="time pull-right">10:00 am - 22:00 pm</div></li>
                                        <li class="clearfix"><div class="day pull-left">Domingo</div><span class="dots">................</span><div class="time pull-right">10:00 am - 21:00 pm</div></li>
                                    </ul>
                                
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
             </div>
         </div>
    
    </div>
    
    <!--Footer Bottom-->
     <div class="footer-bottom">

         <div class="auto-container">
         Este Programa es público, ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa        </div>
    </div>
</footer>

</div>
<!--End pagewrapper-->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#dc1616;">Reserva ahora!</h4>
    </div>
    <div class="modal-body">
     <form>
<div class="form-group">
  <label for="">Primer nombre:</label>
  <input type="text" class="form-control" id="" placeholder="First_name ">
</div>
<div class="form-group">
  <label for="">Apellido paterno:</label>
  <input type="text" class="form-control" id="" placeholder="Last_name">
</div>

<div class="form-group">
    <label for="">Apellido materno:</label>
    <input type="text" class="form-control" id="" placeholder="Last_name">
  </div>

  <!--
  <div class="form-group">
  <label for="">Correo:</label>
  <input type="email" class="form-control" id="" placeholder="Email">
</div>
  -->

<div class="form-group">
  <label for="">Numero celular:</label>
  <input type="tel" class="form-control" id="" placeholder="Cell_phone">
</div>

<div class="form-group">
    <label for="">Direccion: </label>
    <input type="varchar" class="form-control" id="" placeholder="Direction">

    <!--
    <textarea rows="3" cols="3" class="form-control" placeholder="Address"></textarea>
    -->

<div class="form-group">
  <label for="">Numero de casa:</label>
  <input type="varchar" class="form-control" id="" placeholder="House code">
</div>  

<div class="form-group">
    <label for="">Calle:</label>
    <input type="varchar" class="form-control" id="" placeholder="Stret">
  </div>  

<div class="form-group">
    <label for="">Colonia:</label>
    <input type="varchar" class="form-control" id="" placeholder="Colonia">
 </div>  

</div>

<div class="form-group">
    <label for="">Descripcion:</label>
    <input type="varchar" class="form-control" id="" placeholder="No es obligatoria">
 </div> 
<!--
<div class="form-group">
  <label for="">Numero de personas:</label>
<select class="form-control">
<option>--Select--</option>
<option>One</option>
<option>Two</option>
</select>
</div>
-->
<div class="checkbox">
  <label>
    <input type="checkbox"> Accept Privacy Policy and Term & Conditions / Acepto la Política de privacidad y los Términos y condiciones
  </label>
</div>

</form>
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>