<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registropara.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <!-- Barra de Navegación Vertical -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div id="user-profile" class="text-center py-3">
                    <img src="./img/usuario.png" width="50px" alt="Foto de perfil">
                    <p>Eray</p>
                </div>
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../vistas/inicio.php">
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
                            <a class="nav-link" href="">
                                Estado de Cuenta
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
        <div class="form-columns">
            <fieldset>
                <legend>Información Personal</legend>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="apellidoPaterno" placeholder="Ingresa tu apellido paterno">
                </div>
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno:</label>
                    <input type="text" class "form-control" id="apellidoMaterno" placeholder="Ingresa tu apellido materno">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ingresa tu teléfono">
                </div>
            </fieldset>
            <fieldset>
                <legend>Información Laboral</legend>
                <div class="form-group">
                    <label for="empleo">Empleo:</label>
                    <input type="text" class="form-control" id="empleo" placeholder="Ingresa tu empleo">
                </div>
                <div class="form-group">
                    <label for="rfc">RFC:</label>
                    <input type="text" class="form-control" id="rfc" placeholder="Ingresa tu RFC">
                </div>
            </fieldset>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>