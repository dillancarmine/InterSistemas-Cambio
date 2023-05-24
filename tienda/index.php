<?php
$path = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include '../components/header.php'
    ?>
</head>

<body>

    <!-- Barra De Inicio INICIO -->
    <?php
    include '../components/inicio.php'
    ?>
    <!-- Barra de Inicio FIN -->

    <!-- Barra de Navegación INICIO -->
    <?php
    include '../components/navbar.php'
    ?>
    <!-- Barra de Navegación FIN -->


    <!-- Barra de pagina INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="../index.php">Inicio</a>
                    <span class="breadcrumb-item active">Lista Productos</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra de pagina FIN -->


    <!-- Lista INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">

            <!-- Lista Productos INICIO -->
            <div class="col-lg-12 col-md-6">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="text-center">
                            <h3 class="text-capitalize"><?php echo str_replace('_', ' ', $path) ?></h3>
                            </p>
                        </div>
                    </div>
                    <?php

                    include("../clases/products.php");
                    $products = new Products();
                    $result = null;
                    switch ($path) {
                        case 'procesadores':
                            $result = $products->getProductsByCategory(1);
                            break;
                        case 'tarjetas_madre':
                            $result = $products->getProductsByCategory(2);
                            break;
                        case 'ram':
                            $result = $products->getProductsByCategory(3);
                            break;
                        case 'tarjetas_graficas':
                            $result = $products->getProductsByCategory(4);
                            break;
                        case 'almacenamiento':
                            $result = $products->getProductsByCategory(5);
                            break;
                        case 'fuentes_de_poder':
                            $result = $products->getProductsByCategory(6);
                            break;
                        case 'refrigeracion_liquida':
                            $result = $products->getProductsByCategory(7);
                            break;
                        case 'ventiladores':
                            $result = $products->getProductsByCategory(8);
                            break;

                        default:
                            echo "Sin resultados para: " . $path;
                            break;
                    }

                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            // Accede a los datos de cada fila utilizando los nombres de las columnas
                            $productId = $row['id'];
                            $productName = $row['name'];
                            $price = $row['price'];
                            $stock = $row['stock'];
                            $img = $row['image_url'];
                            // Realiza cualquier operación o impresión que desees con los datos de cada fila
                            include '../components/productItem.php';
                        }
                        echo `
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                                </ul>
                            </nav>
                        </div>
                        `;;
                    } else {
                        include "../components/noItems.php";
                    }


                    ?>

                </div>
            </div>
            <!-- Lista Productos FIN -->
        </div>
    </div>
    <!-- Lista FIN -->

    <!-- Pie de Pagina INICIO -->
    <?php

    include '../components/footer.php';
    ?>
    <!-- Pie de Pagina FIN -->

    <!-- Boton Regresar -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>