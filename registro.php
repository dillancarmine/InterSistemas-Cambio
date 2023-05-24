<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/public/img/logos/computadora.svg">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="public/css/registro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-x5cRc1IBtV5G7e0nP9y3DgfYF0DVWKZkFs06KAjp/etMT5D7/JU9WnSYDNUjJtMwvlfBheXQwZp+PWEUQ+YJdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Registro de Usuario</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h4 class="card-title text-center mb-5 fw-bold fs-5">Regístrate en InterSistemas!</h4>
            <div id="alertContainer"></div> <!-- Container for displaying alerts -->

            <form action="servidor/registro/registrar.php" method="post" id="registroForm">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required maxlength="30">
                <label for="name">Nombre</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="email" required maxlength="30">
                <label for="email">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required maxlength="30">
                <label for="password">Contraseña</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="address" id="address" placeholder="Dirección" required></textarea>
                <label for="address">Dirección</label>
              </div>
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-warning btn-login fw-bold text-uppercase" type="submit">Registrar</button>
              </div>
              <br>
              <a class="d-block text-center mt-2 fw-bold text-decoration-none" href="/login">Ya tienes una cuenta? Inicia Sesión.</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#registroForm').submit(function(event) {
        event.preventDefault(); // Prevenir envío del formulario

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Realizar solicitud Ajax
        $.ajax({
          type: 'POST',
          url: 'servidor/registro/registrar.php',
          data: formData,
          success: function(response) {

            console.log(response)

            var alertContainer = $('#alertContainer');
            alertContainer.empty(); // Limpiar alertas anteriores

            if (response === 'Registro exitoso.') {
              var successAlert = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Te has registrado con éxito, <a href="login.php" class="alert-link">ahora inicia sesión</a>.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
              alertContainer.append(successAlert);
              $('#registroForm')[0].reset();
            } else if (response === 'El usuario ya existe.') {
              var errorAlert = `
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-circle-fill me-2"></i>
                                El usuario ya existe. Crea otro nombre de usuario.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
              alertContainer.append(errorAlert);
            } else {
              var errorAlert = `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-circle-fill me-2"></i>
                                Error al registrar.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
              alertContainer.append(errorAlert);
            }
          },
          error: function() {
            var alertContainer = $('#alertContainer');
            alertContainer.empty(); // Limpiar alertas anteriores

            var errorAlert = `
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            Error en la solicitud.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
            alertContainer.append(errorAlert);
          }
        });
      });
    });
  </script>


</body>

</html>