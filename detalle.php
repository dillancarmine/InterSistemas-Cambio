<?php
$productId = basename($_SERVER['REQUEST_URI']);
include("./clases/products.php");
$results = new Products();
$product = $results->getProductById($productId);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include './components/header.php'
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php include "./clases/contador.php"; ?>
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


    <!-- Barra de pagina INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="/">Inicio</a>
                    <span class="breadcrumb-item text-dark">Lista Productos</span>
                    <span class="breadcrumb-item active">Detalle</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra de pagina FIN -->


    <!-- Detalle INICIO -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="../img/<?php echo $product['image_url']; ?>" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/img/producto.png" alt="Image">
                        </div>
                        <div class="carousel-item">
                        <img class="w-100 h-100" src="../img/<?php echo $product['image_url']; ?>" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="/img/producto.png" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-info"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-info"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>
                        <?php
                        echo $product['name'];
                        ?>
                    </h3>
                    <br>
                    <h3 class="font-weight-semi-bold mb-4">
                        <?php
                        echo $product['price'];
                        ?>
                    </h3>
                    <p class="mb-4">
                        <?php
                        echo $product['description'];
                        ?>
                    </p>
                    <br>
                    
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Cantidad:</strong>
                        <!--
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">2</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">3</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">4</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">5</label>
                            </div>
                        </form>
                        -->
                    </div>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button id="restar" class="btn btn-info btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input id="contador" type="text" class="form-control bg-secondary border-0 text-center" value="<?php echo isset($_POST['contador']) ? $_POST['contador'] : 0; ?>">
                            <div class="input-group-btn">
                                <button id="sumar" class="btn btn-info btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex pt-2">
                        <div class="d-inline-flex">
                            <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Descripción</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Descripción del Producto</h4>
                            <?php
                            echo $product['description'];
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detalle FIN -->    

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
    <script src="/public/lib/easing/easing.min.js"></script>
    <script src="/public/lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script> -->
</body>

</html>