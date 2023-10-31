<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/clientes.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
<div class="row" >
            <!-- Barra de Navegación Vertical -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" >
                <div id="user-profile" class="text-center py-3" style="background-color: #e4fbfb;">
                    <img src="./img/user.png" width="80px" alt="Foto de perfil">
                    <p>Eray</p>
                </div>
                <div class="position-sticky">
                    <ul class="nav flex-column" style="background-color: #aedddd;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../vistas/otorgaprestamos.php">
                                Otorgar Préstamos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../vistas/Registrocliente.php">
                                Registrar Cliente
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../vistas/Seguimiento.php">
                                Seguimiento de Préstamo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Estado de cuenta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cerrar.php">
                                Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Contenido del formulario -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container" style="background-color: #96c4c4; padding: 20px;">
                    <h2>Formulario</h2>
                    <form>
                      <div class="form-group row">
                          <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for "apellidoPaterno" class="col-sm-2 col-form-label">Apellido Paterno:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="apellidoPaterno" placeholder="Ingresa tu apellido paterno">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="apellidoMaterno" class="col-sm-2 col-form-label">Apellido Materno:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="apellidoMaterno" placeholder="Ingresa tu apellido materno">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="telefono" placeholder="Ingresa tu teléfono">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="empleo" class="col-sm-2 col-form-label">Empleo:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="empleo" placeholder="Ingresa tu empleo">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="rfc" class="col-sm-2 col-form-label">RFC:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="rfc" placeholder="Ingresa tu RFC">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-10 offset-sm-2">
                              <button  type="submit" class="btn btn-primary" style="background-color: #a2a0a1;">Enviar</button>
                          </div>
                      </div>
                  </form>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
