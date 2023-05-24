<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include './components/header.php'
    ?>
</head>

<body>

    <!-- Barra De Inicio INICIO -->
    <?php
    include './components/inicio.php'
    ?>
    <!-- Barra de Inicio FIN -->

    <!-- Barra de Navegación INICIO -->
    <?php
    include './components/navbar.php'
    ?>
    <!-- Barra de Navegación FIN -->


    <!-- Carrusel INICIO -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/procesadores.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                        Procesadores</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">¡Los procesadores de AMD
                                        e Intel en un solo lugar!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/procesadores">¡Compra Ahora!</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/ram.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">RAM's
                                    </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">¿Equipo lento? No te
                                        preocupes, da más velocidad con un par de RAM's nuevas</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/ram">Consíguelo</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/almacenamiento.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                        Almacenamiento</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">No te preocupes por el
                                        espacio, con nuestros SSD's tendrás velocidad y capacidad.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/almacenamiento">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/vr.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Descuento del 20%</h6>
                        <h3 class="text-white mb-3">Artículos de VR</h3>
                        <a href="" class="btn btn-primary">Visítalos</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/perifericos.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Los Mejores</h6>
                        <h3 class="text-white mb-3">Periféricos</h3>
                        <a href="" class="btn btn-info">Ir al Sitio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrusel FIN -->


    <!-- Nosotros INICIO -->
    <div class="container-fluid pt-5" id="nosotros">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-warning pr-3">¿Quienes
                Somos?</span></h2>
        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 400px;">
                        <img class="img-fluid" src="img/mision.jpg" alt="">
                        <div class="offer-text">
                            <h3 class="text-white mb-3">Misión</h3>
                            <p class="text-white text-center">Ofrecer una amplia gama de productos de hardware a precios
                                accesibles y dar al cliente un servicio de calidad.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 400px;">
                        <img class="img-fluid" src="img/vision.jpg" alt="">
                        <div class="offer-text">
                            <h3 class="text-white mb-3">Visión</h3>
                            <p class="text-white text-center">Ser la empresa líder en la venta de componentes de
                                hardware a nivel Estatal trabajando con estándares de calidad, y cumplir con las
                                necesidades de nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nosotros FIN -->

    <!-- Categorias INICIO -->
    <?php
    include './components/categorias.php'
    ?>
    <!-- Categorias FIN -->

    <!-- Carrusel de Marcas INICIO -->
    <?php
    include './components/carrusel.php'
    ?>
    <!-- Carrusel de Marcas FIN -->


    <!-- Pie de Pagina INICIO -->
    <?php
    include './components/footer.php'
    ?>
    <!-- Pie de Pagina FIN -->


    <!-- Boton Regresar -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>