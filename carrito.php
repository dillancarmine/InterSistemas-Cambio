<?php
session_start();

include "./clases/cart.php";
$cart = new Cart();
$carItems = $cart->getCartItems($_SESSION['client'])
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include './components/header.php'; ?>
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
                    <span class="breadcrumb-item active">Carrito</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra de pagina FIN -->

    <!-- Carrito INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Productos</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        echo $_SESSION['client'];
                        while ($row = $carItems->fetch_assoc()) {
                            $prodId = $row["id"];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            $name = $row['name'];
                            include './components/carItem.php';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <!--
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Total Carrito</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Envío</h6>
                            <h6 class="font-weight-medium">$</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" onclick="location.href='pago.php'">Ir a Pagar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrito FIN -->

    <!-- Pie de Pagina INICIO -->
    <?php
    include './components/footer.php'
    ?>
    <!-- Pie de Pagina FIN -->


    <!-- Boton Regresar -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
</body>

</html>