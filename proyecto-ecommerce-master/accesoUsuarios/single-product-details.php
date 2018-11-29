<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    include "../connect/conexion.php";

 ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Detalles del Producto - ShopMex</title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->

        <?php

            if(!isset($_SESSION["usuario"])){header("location:../index.php");} 

            $miconexion=new Conexion();
            $conexionDB=$miconexion->conectar();

            $idProducto=$_GET["id"];

            

            $queryProducto="SELECT * from articulos where id_producto=:idProducto";

            $sentence=$conexionDB->prepare($queryProducto);
            $sentence->execute(array(":idProducto"=>$idProducto));

            $datosArticulo=$sentence->fetch(PDO::FETCH_ASSOC);






        ?>

    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="../img/core-img/logo.png" alt=""></a>
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
                                        <li><a href="shop.html">Talavera</a></li>
                                        <li><a href="shop.html">Barro</a></li>
                                        <li><a href="shop.html">Plata</a></li>
                                        <li><a href="shop.html">Madera</a></li>
                                        <li><a href="shop.html">Ver más</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Dulces y Comida</li>
                                        <li><a href="shop.html">Dulces Tipicos</a></li>
                                        <li><a href="shop.html">Bebidas</a></li>
                                        <li><a href="shop.html">Comida en caja</a></li>
                                        <li><a href="shop.html">Recetas</a></li>
                                        <li><a href="shop.html">Ver más</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Ropa Tipica</li>
                                        <li><a href="shop.html">Aguascalientes</a></li>
                                        <li><a href="shop.html">Hidalgo</a></li>
                                        <li><a href="shop.html">Oaxaca</a></li>
                                        <li><a href="shop.html">Veracruz</a></li>
                                        <li><a href="shop.html">Puebla</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>


                            <!-- Seccion de Paginas -->
                            
                            <li hidden="true"><a href="#">Páginas</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="shop.html">Tienda</a></li>
                                    <li><a href="single-product-details.html">Detalles de Productos</a></li>
                                    <li><a href="checkout.html">Lista de Compras</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="blog.html">Blog</a></li>-->
                            <li><a href="contact.html">Contactanos</a></li>
                            <li><a href="#" id="nombreUser"><?php echo $_SESSION["usuario"]; ?></a></li>
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
                    <a href="#"><img src="../img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#" role="button" data-toggle="modal" data-target="#login-modal"><img src="../img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="../img/core-img/bag.svg" alt="" > <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="../img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../img/product-img/product-1.jpg" class="cart-thumb" alt="">
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
                        <img src="../img/product-img/product-2.jpg" class="cart-thumb" alt="">
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
                        <img src="../img/product-img/product-3.jpg" class="cart-thumb" alt="">
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

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel" style="width: 500px; margin-left: 100px;">
                <img src=" <?php echo '../img/product-img/product-'.($datosArticulo['id_producto']-1).'.jpg' ?> " alt="">
                <img src=" <?php echo '../img/product-img/product-'.($datosArticulo['id_producto']-1).'.jpg' ?> " alt="">
                <img src=" <?php echo '../img/product-img/product-'.($datosArticulo['id_producto']-1).'.jpg' ?> " alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span><?php echo $datosArticulo["proveedor"] ?></span>
            <a href="cart.html">
                <h2><?php echo $datosArticulo["nombre"] ?> </h2>
            </a>
            <p class="product-price"><span class="old-price">$<?php echo $datosArticulo["precio"] ?></span> $<?php echo $datosArticulo["precio"]-20; ?></p>
            <p class="product-desc">Descripcion del producto:<br><?php echo $datosArticulo["descripcion"] ?></p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                
                <?php 

                    if($datosArticulo["id_categoria"]==3){
                        echo '<div class="select-box d-flex mt-50 mb-30">
                                <select name="select" id="productSize" class="mr-5">
                                    <option value="value">Tamaño: XL</option>
                                    <option value="value">Tamaño: X</option>
                                    <option value="value">Tamaño: M</option>
                                    <option value="value">Tamaño: S</option>
                                </select>
                                <select name="select" id="productColor">
                                    <option value="value">Color: Black</option>
                                    <option value="value">Color: White</option>
                                    <option value="value">Color: Red</option>
                                    <option value="value">Color: Purple</option>
                                </select>
                             </div>';
                    }

                ?>

                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Agregar al Carrito de Compra</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>

            </form>
        </div>
        
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="../img/core-img/logo2.png" alt=""></a>
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
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="../js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>

</body>

</html>