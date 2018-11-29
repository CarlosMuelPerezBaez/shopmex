<!DOCTYPE html>
<html lang="en">

<?php 
    
    include "connect/conexion.php";

 ?>

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

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <?php

        $miConexion=new Conexion();

        $conexiondb=$miConexion->conectar();

        $queryProductos="SELECT * FROM articulos";
        $queryImagenesProd="SELECT ruta FROM imagenes INNER JOIN articulos WHERE imagenes.id_imagen=articulos.id_imagen";


        $sentence=$conexiondb->prepare($queryProductos);
        $sentenceImagenes=$conexiondb->prepare($queryImagenesProd);
        $sentence->execute();
        $sentenceImagenes->execute();

        $registroArticulos=$sentence->fetchAll(PDO::FETCH_OBJ);
        $registroimagenesArt=$sentenceImagenes->fetchAll(PDO::FETCH_OBJ);


    ?>

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
                                    <li><a href="blog.php">Blog</a></li>
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
                
            </div>

        </div>
    </header>
    <!--====  End of Header de la pagina  ====-->
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
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size"></p>
                            <p class="color"></p>
                            <p class="price"></p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size"></p>
                            <p class="color"></p>
                            <p class="price"></p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6></h6>
                            <p class="size"></p>
                            <p class="color"></p>
                            <p class="price"></p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Productos Cargados</h2>
                <ul class="summary-table">
                    <li><span>Subtotal:</span> <span>$</span></li>
                    <li><span>Envio:</span> <span></span></li>
                    <li><span>Descuento:</span> <span>0%</span></li>
                    <li><span>Total:</span> <span>$</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.php" class="btn essence-btn">Finalizar Compra</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Categorias</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Categorias</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#">Souvenirs</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">Todos</a></li>
                                            <li><a href="#">Amacas</a></li>
                                            <li><a href="#">Jarros y Vasijas</a></li>
                                            <li><a href="#">Esculturas</a></li>
                                            <li><a href="#">Llaveros</a></li>
                                            <li><a href="#">Ceniceros</a></li>
                                            <li><a href="#">Juegos</a></li>
                                            <li><a href="#">Lapiceros</a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="#">Dulces y Antojos</a>
                                        <ul class="sub-menu collapse" id="shoes">
                                            <li><a href="#">Todos</a></li>
                                            <li><a href="#">Alegrias</a></li>
                                            <li><a href="#">Dulces de Camote</a></li>
                                            <li><a href="#">Pepitorias</a></li>
                                            <li><a href="#">Dulce y Salado</a></li>
                                            <li><a href="#">Dulce y Picante</a></li>
                                            <li><a href="#">Picante</a></li>
                                            <li><a href="#">Chocolate</a></li>
                                            <li><a href="#">Dulces de Leche</a></li>
                                            <li><a href="#">Postres</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="#">Ropa y Calzado</a>
                                        <ul class="sub-menu collapse" id="accessories">
                                            <li><a href="#">Todos</a></li>
                                            <li><a href="#">Playeras</a></li>
                                            <li><a href="#">Camisas Tipicas</a></li>
                                            <li><a href="#">Sombreros</a></li>
                                            <li><a href="#">Gorras</a></li>
                                            <li><a href="#">Calzado</a></li>
                                            <li><a href="#">Accesorios</a></li>
                                            <li><a href="#">Cinturones</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filtrado por</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Precio</p>
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="30" data-max="5000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="50" data-value-max="10000" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Rango: $50.00 - $5000.00 MNX</div>
                                </div>

                                <div <col span=""></div>
                            </div>
                            <!-- Final Widget Title 2 -->

                            
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <!--<div class="widget color mb-50">
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>-->

                        
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span><?php echo sizeof($registroArticulos); ?></span> Productos</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Ordenar Por: </p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Popularidad</option>
                                                <option value="value">Precio</option>
                                                <option value="value">Categoria</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                           
                             <?php foreach ($registroArticulos as $articulo): ?>
                                    
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src=" <?php echo 'img/product-img/product-'.($articulo->id_producto-1).'.jpg'; ?> " alt="">
                                                <!-- Product Badge -->
                                                <div class="product-badge offer-badge">
                                                    <span>Nuevo</span>
                                                </div>
                                                <!-- Favourite -->
                                                <div class="product-favourite">
                                                    <a href="#" class="favme fa fa-heart"></a>
                                                </div>
                                            </div>

                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span><?php echo $articulo->proveedor?></span>
                                                <a href="single-product-details.php?id= <?php echo $articulo->id_producto; ?> ">
                                                    <h6> <?php echo $articulo->nombre?> </h6>
                                                </a>
                                                <p class="product-price"><span class="old-price">$<?php echo $articulo->precio?></span>$<?php echo ($articulo->precio-20)?></p>
                                                
                                                <?php

                                                    if(isset($_SESSION["usuario"])) {
                                                        echo '<div class="hover-content">
                                                                    <div class="add-to-cart-btn">
                                                                        <a href="#" class="btn essence-btn">Agregar al carrito</a>
                                                                    </div>
                                                                </div>';
                                                    }else{
                                                        echo '<div class="hover-content">
                                                                    <div class="add-to-cart-btn">
                                                                        <a href="#" class="btn essence-btn">Ver Detalles</a>
                                                                    </div>
                                                                </div>';
                                                    }
                                                ?>

                                            </div>


                                        </div>
                                    </div>
    

                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <!--<li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

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

</body>

</html>