<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/otroga.css">
    <style>
        /* Estilo para el fondo de toda la página */
        body {
            background-color: #aedddd;
        }

        /* Estilos para el container */
        .container {
            background-color: #dcd9f8;
            padding: 20px; /* Agregar espaciado alrededor del contenido */
            border-radius: 10px;
        }

        /* Estilos para el cuadro del formulario de pago */
        .formulario-pago {
            background-color: #c3dff9;
            padding: 20px;
            border-radius: 10px;
        }
    /* Estilo para el botón */
    .btn-realizar-pago {
        background-color: #a2a0a1 !important;
        color: #000 !important;
    }
</style>
    <title>Registro de Préstamo</title>
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
                            <a class="nav-link" href="#">
                                Estado de cuenta
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cerrar.php">
                                Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Formulario de Pago -->
            <div class="container">
                <div class="formulario-pago">
                    <h2>Formulario de Pago</h2>
                    <form action="procesar_pago.php" method="post">
                        <div class="form-group">
                            <label for="monto">Monto:</label>
                            <select name="monto" id="monto">
                                <?php
                                for ($i = 500; $i <= 5000; $i += 500) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tipo_abono">Tipo de Abono:</label>
                            <select name="tipo_abono" id="tipo_abono">
                                <option value="diario">Diario</option>
                                <option value="semanal">Semanal</option>
                                <option value="quincenal">Quincenal</option>
                                <option value="mensual">Mensual</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" required>
                        </div>

                        <div class="form-group">
                            <label for="saldo_actual">Saldo Actual:</label>
                            <input type="text" name="saldo_actual" id="saldo_actual" value="5000" readonly>
                        </div>

                        <div class="form-group">
                            <input class="btn-realizar-pago" type="submit" value="Realizar Pago">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
