<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ShopMex</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!--=========================================
    =            Hojas de Estilo CSS            =
    ==========================================-->
    
         <!-- Core Style CSS -->
        <link rel="stylesheet" href="css/core-style.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/modal-login.css">

    
    <!--====  End of Hojas de Estilo CSS  ====-->
    
   
</head>

<body>

    <!--================================================
    =            Modal de Inicio de Sesion             =
    =================================================-->
    <!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <img class="img-circle" id="img_logo" src="img/core-img/login.png" style="margin: auto;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>
                    
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                    
                        <!--=========================================
                        =            Formulario de Login            =
                        ==========================================-->
                        <form id="login-form" method="post" action="connect/verificarUsuario.php">
                            <div class="modal-body">
                                <div id="div-login-msg">
                                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-login-msg">Escribe tu correo o usuario y tu contraseña</span>
                                </div>
                                <input id="login_username" class="form-control" type="text" placeholder="Correo Electronico" required>
                                <input id="login_password" class="form-control" type="password" placeholder="Contraseña" required>

                                <div class="form-group" style="margin-top: 10px;" >
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="recordar" value="1">
                                        <label for="recordar" class="form-check-label">Recordar</label> 
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                </div>
                                <div class="col">
                                    <button id="login_lost_btn" type="button" class="btn btn-link">Olvidaste tu contraseña</button>
                                    <button id="login_register_btn" type="button" class="btn btn-link">Registrarse</button>
                                </div>
                            </div>
                        </form>


                        <!--====  End of Formulario de Login  ====-->
                        
                        <!-- Begin | Lost Password Form -->
                        <form id="lost-form" style="display:none;">
                            <div class="modal-body">
                                <div id="div-lost-msg">
                                    <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-lost-msg">Escribe tu email</span>
                                </div>
                                <input id="lost_email" class="form-control" type="text" placeholder="email de la cuenta" required>
                            </div>
                            <div class="modal-footer row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                                </div>
                                <div class="col">
                                    <button id="lost_login_btn" type="button" class="btn btn-link">Iniciar Sesion</button>
                                    <button id="lost_register_btn" type="button" class="btn btn-link">Registrarse</button>
                                </div>
                            </div>
                        </form>
                        <!-- End | Lost Password Form -->
                        
                        <!-- Begin | Register Form -->
                        <form id="register-form" style="display:none;">
                            <div class="modal-body">
                                <div id="div-register-msg">
                                    <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                    <span id="text-register-msg">Crear una cuenta.</span>
                                </div>
                                <div class="modal-body row ">
                                    <input id="register_username" class="form-control" type="text" placeholder="Nombre de Usuario" required>
                                <input id="register_email" class="form-control" type="text" placeholder="Correo Electronico" required>
                                <input id="register_password" class="form-control" type="password" placeholder="Contraseña" required>
                                <input id="register_cp" class="form-control col-3" type="text" placeholder="C.P." required>
                                <select name="País" class="custom-select col-9" id="register_pais">
                                    <option value="China">Seleccionar País</option>
                                    <option value="China">China</option>
                                    <option value="Japon">Japon</option>
                                    <option value="Alemania">Alemania</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Inglaterra">Inglaterra</option>
                                </select>
                                <div class="form-group" style="margin-top: 10px;" >
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="aceptaPoliticas" value="1">
                                        <label for="aceptaPoliticas" class="form-check-label">
                                            Acepta Politicas de uso y seguridad&nbsp;
                                        </label> 
                                    </div>
                                    <div class="form-check"><a href="#" data-toggle="modal" data-target="#modalPoliticas" >Leer Politicas</a></div>
                                </div>      
                                </div>
                            </div>
                            <div class="modal-footer row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                                </div>
                                <div class="col">
                                    <button id="register_login_btn" type="button" class="btn btn-link">Iniciar Sesion</button>
                                </div>
                            </div>
                        </form>
                        <!-- End | Register Form -->
                        
                    </div>
                    <!-- End # DIV Form -->
                    
                </div>
            </div>
    </div>
        <!-- END # MODAL LOGIN -->

        <!--============================================================
        =            Modal del Politicas de Uso y Seguridad            =
        =============================================================-->
        
                    <!-- Modal -->
        <div class="modal fade" id="modalPoliticas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Politicas de Uso y Seguridad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <span>
                    El uso de este sitio web está sujeto a la aceptación de las Condiciones y Políticas expresadas más adelante :
                    <br><br>
            <h5><b>Condiciones de Uso</b></h5>
            El usuario de este sitio web se compromete a hacer un uso diligente de su contenido y de los servicios accesibles desde el mismo, con total sujeción a las leyes vigentes, a las buenas costumbres y a las condiciones y políticas de uso aquí expresadas. De igual modo, se compromete a utilizar esta información para uso exclusivamente personal, no pudiendo utilizarla, ni directa ni indirectamente, para fines comerciales o de ningún tipo de lucro, salvo autorización previa, expresa y escrita de shopmex.com.
            El contenido de este sitio web y todas sus páginas es de propiedad de shopmex.com y sus respectivos autores. Ni shopmex.com, ni sus autores, asumen ninguna responsabilidad derivada del uso incorrecto, inapropiado o ilícito de la información aparecida en este sitio web. Igualmente, shopmex.com no asume responsabilidad de ningún tipo relacionada al contenido externo existente en los enlaces que aparecen en sus artículos y contenido general.
            Salvo autorización expresa, escrita y previa de shopmex.com, está prohibida la reproducción parcial o total, transformación y, en general, cualquier otra forma de explotación, por cualquier procedimiento, de todo o parte de los contenidos de este sitio web.
            Igualmente queda prohibido realizar cualquier manipulación o alteración de este sitio web, al tiempo que shopmex.com no asumirá ninguna responsabilidad derivada, o que pudiera derivarse, de dicha alteración o manipulación, no autorizada, realizada por terceros.
            Este sitio almacena los datos relativos a los comentarios enviados relativos a los contenidos publicados. El usuario podrá ejercitar su derecho de acceso, modificación o cancelación de sus propios comentarios a través de los medios definidos a esos fines. Sin embargo, en respuesta a comentarios o intervenciones de otros, cada usuario deberá hacer uso del lenguaje correcto y las buenas maneras, de forma tal que prime el respeto a las personas que aquí establecen contacto y comunicación.
            <br><br>
            <h5><b>Política de Privacidad</b></h5>
            shopmex.com ofrece un servicio informativo y/o de consultoría a sus usuarios visitantes. Para ello, establece canales de comunicación vía correo electrónico, redes sociales, telefonía o correo tradicional. El uso de estos canales requiere del intercambio de datos imprescindibles para establecer la comunicación y que serán solicitados al usuario o a su vez ofrecidos por el mismo al solicitar nuestros servicios. shopmex.com toma muy en serio la privacidad de estos datos y los utiliza con el exclusivo propósito de intercambiar información de interés con sus visitantes, si así estos lo desean. De igual modo, los suscriptores a la información periódica que publicamos, tienen la forma de eliminar su información de los sistemas que utilizamos y que son contratados a terceros.
            shopmex.com utiliza servicios de colocación de publicidad así como pudiera utilizar funcionalidades de personalización de la experiencia del visitante en nuestro sitio web por lo que :<br>
            •   Terceros, incluyendo a Google, utilizan cookies para desplegar publicidad basada en las visitas previas a este sitio web. Otros proveedores además de Google pudieran estar siendo utilizados como plataforma de despliegue de publicidad en este sitio web. <br>
            •   Google utiliza cookies de ‘Doble Click’ (DoubleClick cookies), lo que permite tanto a Google como a sus socios, desplegar anuncios a nuestros visitantes basada en las visitas a este sitio web u a otros sitios en el internet. <br>
            •   Los usuarios pueden declinar el uso del cookie para publicidad basada en intereses (‘Double Click’)  visitando Ads Settings.  Tambien pueden dirigirse a aboutads.info para declinar el uso de cookies para publicidad basada en intereses utilizadas por otros proveedores.
            Puede ver más abajo nuestra información sobre cookies.
            <br><br>
            <h5><b>Recopilación de Información de Rutina</b></h5>
            Todos los servidores web dan seguimiento a la información básica de sus visitantes, la cual incluye, pero no se limita a: dirección de IP, páginas visitadas, navegador utilizado, fecha/hora de acceso y salida, referencias, etc. Esta información no es en ningún modo personal y a través de ella no es posible identificar a los visitantes específicos. Esta información se registra para fines de estadísticas de tráfico, tendencias, etc.
            Prohibición para Menores
            Los menores de 18 años no deben facilitar sus datos a shopmex.com sin el previo consentimiento de sus padres o tutores.
            Datos de Terceros
            Antes de facilitar datos personales relativos a terceras personas, el usuario deberá obtener su previo y expreso consentimiento, habiéndoles informado de los términos contenidos en estas Políticas. shopmex.com no se hace responsable de cualquier posible reclamación, pena, multa o sanción como consecuencia de esta acción.
            <br><br>
            <h5><b>Uso de Cookies</b></h5>
            En caso necesario, shopmex.com utiliza cookies para almacenar información sobre las preferencias del visitante y la historia de navegación del mismo en nuestro sitio web, con miras a poder presentar un contenido más personalizado.
            Toda la publicidad servida por Google, Inc., y compañías afiliadas pueden ser controladas mediante cookies. Estas cookies permiten que Google pueda mostrar anuncios en función de sus visitas a este sitio y otros sitios que utilizan los servicios de Google de la publicidad. Todo este mecanismo está sujeto a las políticas de privacidad de Google.
            Tenga en cuenta que puede cambiar la configuración del navegador para deshabilitar las cookies si usted tiene preocupaciones sobre la privacidad. Consulte la documentación de su navegador para obtener instrucciones sobre cómo bloquear las cookies y los mecanismos de seguimiento.
            <br><br>
            <h5><b>Información de Contacto</b></h5>
            Cualquier inquietud o pregunta sobre estas políticas y condiciones de uso puede dirigirse vía correo electrónico a: contacto@shopmex.com
                </span>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        
        
        <!--====  End of Modal del Politicas de Uso y Seguridad  ====-->
            
    
    
    <!--====  End of Modal de Inicio de Sesion   ====-->
    
    <!--=======================================
    =            Inicio del Header            =
    ========================================-->
    
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>


                    <!-- Nav Start -->
                    <!--===================================================
                    =            Barra de Navegacion con Menus            =
                    ====================================================-->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Tienda</a>
                                <div class="megamenu">

                                    <!-- Seccion de Artesanias -->
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Souvenirs</li>
                                        <li><a href="shop.php">Talavera</a></li>
                                        <li><a href="shop.php">Barro</a></li>
                                        <li><a href="shop.php">Plata</a></li>
                                        <li><a href="shop.php">Madera</a></li>
                                        <li><a href="shop.php">Ver más</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Dulces y Comida</li>
                                        <li><a href="shop.php">Dulces Tipicos</a></li>
                                        <li><a href="shop.php">Bebidas</a></li>
                                        <li><a href="shop.php">Comida en caja</a></li>
                                        <li><a href="shop.php">Recetas</a></li>
                                        <li><a href="shop.php">Ver más</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Ropa Tipica</li>
                                        <li><a href="shop.php">Aguascalientes</a></li>
                                        <li><a href="shop.php">Hidalgo</a></li>
                                        <li><a href="shop.php">Oaxaca</a></li>
                                        <li><a href="shop.php">Veracruz</a></li>
                                        <li><a href="shop.php">Puebla</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>


                            <!-- Seccion de Paginas -->
                            
                            <li hidden="true"><a href="#">Páginas</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="shop.php">Tienda</a></li>
                                    <li><a href="single-product-details.php">Detalles de Productos</a></li>
                                    <li><a href="checkout.php">Lista de Compras</a></li>
                                    <!--<li><a href="blog.php">Blog</a></li>-->
                                    <li><a href="regular-page.php">Regular Page</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="blog.php">Blog</a></li>-->
                            <li><a href="contact.php">Contactanos</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
                
            <!-- Header Meta Data -->
            <!--=========================================
            =            Header de la pagina            =
            ==========================================-->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Buscar Articulo">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="login.php" role="button"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt="" > <span>0</span></a>
                </div>
            </div>

        </div>
    </header>
    <!--====  End of Header de la pagina  ====-->
    <!--====  End of Inicio del Header  ====-->
    <!-- ##### Header Area End ##### -->


    
    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <!--<div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size">Size:</p>
                            <p class="color">Color:</p>
                            <p class="price">$</p>
                        </div>
                    </a>
                </div>-->

                <!-- Single Cart Item -->
                <!--<div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size">Size:</p>
                            <p class="color">Color:</p>
                            <p class="price">$</p>
                        </div>
                    </a>
                </div>-->

                <!-- Single Cart Item -->
                <!--<div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size">Size:</p>
                            <p class="color">Color:</p>
                            <p class="price">$</p>
                        </div>
                    </a>
                </div>-->
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>No hay ningun articulo en el carrito</h2>
                <ul class="summary-table">
                    <li><span>Inicia sesion para agregar </span></li>
                </ul>
               
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>ShopMex</h6>
                        <h2>Ver Tendencias</h2>
                        <a href="#" class="btn essence-btn">Ir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="#">Souvenirs</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Dulces y Bebidas</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Ropa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <!--<div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Productos Populares</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span></span>
                                <a href="single-product-details.php">
                                    <h6></h6>
                                </a>
                                <p class="product-price"></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Añadir al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span></span>
                                <a href="single-product-details.php">
                                    <h6></h6>
                                </a>
                                <p class="product-price"></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Añadir al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span></span>
                                <a href="single-product-details.php">
                                    <h6></h6>
                                </a>
                                <p class="product-price"></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Añadir al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span></span>
                                <a href="single-product-details.php">
                                    <h6></h6>
                                </a>
                                <p class="product-price"></p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Añadir al carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Estado de la Orden</a></li>
                            <li><a href="#">Opciones de Pago</a></li>
                            <li><a href="#">Guia</a></li>
                            <li><a href="#">Politicas de Privacidad</a></li>
                            <li><a href="#">Terminos de Uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!--============================================
    =            Archivos de JavaScript            =
    =============================================-->
    
            <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Classy Nav js -->
        <script src="js/classy-nav.min.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
        <script src="js/modal-login.js"></script>
    
    
    <!--====  End of Archivos de JavaScript  ====-->


</body>

</html>