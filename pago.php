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

    <!-- Barra de pagina INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="/">Inicio</a>
                    <a class="breadcrumb-item text-dark" href="carrito.php">Carrito</a>
                    <span class="breadcrumb-item active">Pago</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra de pagina FIN -->

    <!-- Pago INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Dirección de envío</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nombre(s)</label>
                            <input class="form-control" type="text" placeholder="Juan">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Apellidos</label>
                            <input class="form-control" type="text" placeholder="Pérez">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="ejemplo@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Teléfono</label>
                            <input class="form-control" type="text" placeholder="+55 55-5555-5555">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Dirección Línea 1</label>
                            <input class="form-control" type="text" placeholder="Calle 1">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Dirección Línea 2</label>
                            <input class="form-control" type="text" placeholder="Calle 2">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estado</label>
                            <select class="custom-select">
                                <option selected>Elige un Estado</option>
                                <option>Aguascalientes</option>
                                <option>Baja California</option>
                                <option>Baja California Sur</option>
                                <option>Campeche</option>
                                <option>Chiapas</option>
                                <option>Chihuahua</option>
                                <option>CDMX</option>
                                <option>Coahuila</option>
                                <option>Colima</option>
                                <option>Durango</option>
                                <option>Edo.Mex</option>
                                <option>Guanajuato</option>
                                <option>Guerrero</option>
                                <option>Hidalgo</option>
                                <option>Jalisco</option>
                                <option>Michoacán</option>
                                <option>Morelos</option>
                                <option>Nayarit</option>
                                <option>Nuevo León</option>
                                <option>Oaxaca</option>
                                <option>Puebla</option>
                                <option>Querétaro</option>
                                <option>Quintana Roo</option>
                                <option>San Luis Potosí</option>
                                <option>Sinaloa</option>
                                <option>Sonora</option>
                                <option>Tabasco</option>
                                <option>Tamaulipas</option>
                                <option>Tlaxcala</option>
                                <option>Veracruz</option>
                                <option>Yucatán</option>
                                <option>Zacatecas</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Municipio</label>
                            <input class="form-control" type="text" placeholder="Cuautitlán">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Código Postal</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                        <!---
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Total de Orden</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Productos</h6>
                        <div class="d-flex justify-content-between">
                            <p>Producto 1</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Producto 2</p>
                            <p>$150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Producto 3</p>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$450</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Envío</h6>
                            <h6 class="font-weight-medium">$50</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$500</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Método de Pago</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Pago en Efectivo</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Transferencia Bancaria</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Realizar Pago</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pago FIN -->


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