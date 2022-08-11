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
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>Comida japonesa</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">
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
                                    <li><a href="shopping-cart.html"> Agradecimientos</a></li>


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
                        <!-- Main Menu End-->
                        
                        <!--Reserv Box Btn-->
                        <div class="btn-outer"><a href="ordernow.php" class=" reserv-box-btn">Pedido online</a></div>
                        
                    </div>
                  
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
               
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.php"><img src="images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                    <li><a href="index.php">Inicio</a>
                        
                    </li>
                                    <li><a href="ordernow.php">Reserva ahora </a></li>                                    
                                    <li class="dropdown"><a href="#">Todas las paginas</a>
                                    	<ul>
                                            <a href="index.php">Inicio</a></li>
                                            <li><a href="contact.html">Contacto</a></li>
                                            <li><a href="checkout.html">Pagar pedido</a></li>
                                            <li><a href="gallery.html">Galeria</a></li>
                                            <li><a href="ordernow.php">Ordenar online</a></li>
                                            <li><a href="Reservacion.php">Reservacion</a></li>
                                            <li><a href="sign_in.html">Iniciar sesion</a></li>
                                            <li><a href="snacks.html">Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="snacks.html">Menu</a></li>
                                    <li><a href="contact.html">Contacto</a></li>
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
    
    <!--Main Slider-->
    <section class="main-slider" data-start-height="520" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-5.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme">
                  <figure class="content-image">
                  <img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <h2>Ven y visitanos!</h2>
                   
                    </div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Comida japonsesa </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="contact.html" class="theme-btn btn-style-one">Registrate!</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-6.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <h2>Tienes hambre? Ordena ahora!</h2>
                    </div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">  Ramen |  Gyoza | Okonomiyaki  </div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="snacks.html" class="theme-btn btn-style-one">Nuestros platillos</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><!--<img src="images/main-slider/icon-2.png" alt="">--></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 style="color:bisque"> Checa nuestras comidas</h2></div>
                 
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="gallery.html" class="theme-btn btn-style-one">Galeria</a></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><!--<img src="images/main-slider/content-image.png" alt="">--></figure></div>
                    
                    </li>
                    
                    </li>
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Restaurant Section-->
    <section class="restaurant">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>Por que nuestros platillos? </h2>
                            <h3> Nuestras aportaciones </h3>
                        </div>
                        <!--Content-->
                        <div class="content">
                            <div class="text">
                               <p>
                                Desarrollar un sistema de información que permita realizar la gestión de reservación de pedidos realizados por medio de una página web, así como generar y actualizar el menú de este y mediante del uso de una plataforma web que permita a los clientes realizar sus reservaciones desde su celular u otros dispositivos, siempre y cuando los datos sean verdaderos.
                               </p>
                            </div>
                            <a href="contact.html" class="read-more theme-btn btn-style-one"> Registrate</a>
                        </div>
                        
                    </div>
                </div>
                
                <!--Corousel Column-->
                <div class="corousel-column col-md-6 col-sm-6 col-xs-12">
                	<div class="carousel-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--Single Item Carousel-->
                    	<div class="single-item-carousel">
                        	<div class="slide">
                            <img style="width:80%" src="images/resource/fondo.jpg" alt="" />
                            </div>
                            <div class="slide">
                            <img style="width:80%" src="images/resource/fondo.jpg" alt="" />
                            </div>
                            <div class="slide">
                            <img style="width:80%" src="images/resource/fondo.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Restaurant Section-->
    
    
    <section class="delicous-section" style="background-image:url(images/gallery/5.jpg);">
    <div class="container">
    <div class="sec-title-one" style="margin-bottom:30px;">
                <h2>Nuestros tipos de platillos</h2>
                <h4 style="color:#fff;">Llamanos : <strong> 664 730 65 10</strong></h4>
            </div>
    <div>   

  <!-- Nav tabs -->
  <ul class="nav nav-tabs navtab_tab" role="tablist">
    <li role="presentation" class="active"><a href="#veg" aria-controls="veg" role="tab" data-toggle="tab">Platillos</a></li>
    <li role="presentation"><a href="#nonveg" aria-controls="nonveg" role="tab" data-toggle="tab">Postres</a></li>
    <li role="presentation"><a href="#alternate" aria-controls="alternate" role="tab" data-toggle="tab">Bebidas</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="veg">
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/snakcs/collage_snacks.jpg"></h1>
    <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
    <h1><img src="images/snakcs/collage_snacks2.jpg"></h1>
     <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    </div>
    </div>
    
    </div>
    
    <div role="tabpanel" class="tab-pane" id="nonveg">
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/dessert/collage_desser.jpg"></h1>
    <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
    <h1><img src="images/dessert/collage_dessert2.jpg"></h1>
     <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    </div>
    </div>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="alternate">
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <h1><img src="images/drinks/collage_drinks.png"></h1>
    <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
    <h1><img src="images/drinks/collage_drinks2.png"></h1>
     <h2><a href="snacks.html" class="read-more theme-btn btn-style-one">Ordenar online</a></h2>
    </div>
    </div>
    
    </div>
    
  </div>

</div>
    
    
    </div>    
    </section>
            
   <br>
   <br>
    <!--Gallery Carousel-->
    <div class="sec-title-one">
        <h2>Nuestra coleccion de platillos.</h2>
    </div>

    <section class="gallery-carousel">
    	<div class="three-item-corousel">
        	<div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                            <img src="images/gallery/a.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
          
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                            <img src="images/background/5.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
           
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                            <img src="images/gallery/b.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                        <img src="images/background/1.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                            <img src="images/background/5.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
           
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                            <img src="images/gallery/b.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                	<a href="gallery.html">
                        <div class="image-box">
                        <img src="images/background/1.jpg" alt="" />
                            <div class="title-box">Comida japonesa</div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <br>
    <!--End Gallery Carousel-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(images/background/3.jpg);">
        <div class="sec-title-one">
            <h2>Comentarios generales.</h2>
        </div>
    	<div class="auto-container">
        	<div class="single-item-carousel">
            
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">“ Amplio surtido de ensaladas, pastas y verduras, excelente servicio. ”</div>
                        <div class="text">- Anonimo.</div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">“ Bien los cortes, buena atención, solo los cócteles les falta un poquito... ”</div>
                        <div class="text">- Anonimo.</div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="fa fa-2x fa-quote-right" aria-hidden="true"></i>
</div>
                        <div class="text">" Delicioso algo para despues del gym"</div>
                        <div class="text">- Anonimo.</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->    
    
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