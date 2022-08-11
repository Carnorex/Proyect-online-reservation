<?php
include('sesion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Reservaciones</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="css/style.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/down.css" rel="stylesheet">


</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / header-style-two-->
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
                                <!--Cart Btn--> 
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

                                <li class="dropdown"><a href="#"> Todas las paginas</a>
                                    <ul>
                                        <li><a href="index.php">Inicio</a></li>
                                        <li><a href="contact.html">Registrate</a></li>
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
                            <div class="btn-outer"><a href="ordernow.php" class=" reserv-box-btn">Pedido online</a></div>
                            
                        </div> <!--Nav Outer End-->
                    
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
           
           
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Reservartin Section-->
    <section class="reservation-section">
    	<div class="auto-container">
        	<!--Content Box-->
        	<div class="content-box">
            	<h2>Facil, comodo y eficaz</h2>
            	<h3>Crea tu reservacion</h3>
            	<div class="text">
                    <p> Reservar una mesa nunca ha sido tan fácil con las reservas de restaurantes en línea gratuitas e instantáneas, ¡reserva ahora! </p>
                </div>
                <h4>Cualquier duda nos la puede hacer desde los comentarios de la pagina web o por llamada: 664 730 65 10</h4>
            </div>
            <!--End Content Box-->
            
            <!--form-box-->
            <div class="form-box default-form wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <h3> Reserve su mesa en línea </h3>

                   	<form method="post" action="reservation.php">
                	<div class="clearfix">
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <input id="field-one" type="text" name="txtNombre" value="<?php echo  $_SESSION['name'] ?>" readonly />
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                                <div class="group-inner">
                                    <input id="field-one" type="text" name="txtApellidoPaterno" value="<?php echo  $_SESSION['ApellidoP'] ?>" readonly />
                                </div>
                            </div>
                    

                            <div class="clearfix">
                                <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                                    <div class="group-inner">
                                <input id="field-one" type="text" name="txtApellidoMaterno" value="<?php echo  $_SESSION['ApellidoM'] ?>" readonly />
                                    </div>
                                </div>

                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <input id="field-two" type="email" name="correo" value="<?php echo  $_SESSION['Email'] ?>" readonly />
                            </div>
                        </div>
                    
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-three"><span class="fa fa-mobile"></span></label>
                                <input id="field-three" type="text" name="txtTelefono" value="<?php echo  $_SESSION['Telefono'] ?>" readonly />
                            </div>
                        </div>
                        
                        
                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-four"><span class="fa fa-calendar"></span></label>
                                <input id="field-four" class="datepicker" type="text" name="Calendario" value="" placeholder="Fecha *" required>
                            </div>
                        </div>

                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">

                            <div class="group-inner">

                                <label class="icon-label" for="field-five"></label>

                                <input id="field-five" type="time" name="Hora" required>

                            </div>

                        </div>

                        <div class="form-group icon-group col-md-4 col-sm-6 col-xs-12">
                            <div class="group-inner">
                                <label class="icon-label" for="field-six"></label>
                                <input id="field-six" type="number" name="numPersonas" value="" placeholder="Numero de personas" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-xs-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="theme-btn btn-style-one">Guardar cita</button>
                        </div>
            </div>
        </div>
    </section>
    </form>
  
    
    <section class="reservation-section">
        <div class="clearfix">
            <div class="form-box default-form wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <hr>
                <div class="content-box">
                    <h4>Consultar reservacion o eliminar reserevacion</h4>
                </div>
            <div class="form-group col-xs-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <li><a href="#" class="theme-btn btn-outer" data-toggle="modal" data-target="#myModall"> <h3> Consultar su reservacion </h3></a></li>
            <li><a href="#" class="theme-btn btn-outer" data-toggle="modal" data-target="#myModal"> <h3> Eliminar cita </h3></a></li>
            </div>

        </div>
        </div>
    </section>

    
  

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
                            
                            <!-- Column-->
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
             <div class="copyright-text">Este Programa es público, ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa</div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#dc1616;">Elimina tu reservacion</h4>
        </div>
        <div class="modal-body">
         <form method="post" action="cancelarReservacion.php">

    <div class="form-group">
      <label for="">Correo electronico:</label>
      <input type="text" class="form-control" id="" name="txtEmail" placeholder="Correo electronico">
    </div>
   
    
    <form method="post" >
        <input type = "submit" class="btn btn-default" name = "eliminar" value = "Eliminar"/>
         </form>
         </form>
        </div>
      </div>
    </div>
</div>
<!--         Test de consultar       -->

<div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#dc1616;">Consultar reservaciones</h4>
        </div>
        <div class="modal-body">
         <!--<form method="post" action="mostrarReservaciones.php">-->
             <?php
             include('mostrarReservaciones.php');
             ?>
                 
         </form>
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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/script.js"></script>
</body>
</html>