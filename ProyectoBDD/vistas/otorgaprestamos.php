<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/prestamosotor.css">
    <title>Registro de Préstamo</title>
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
            <!-- Formulario de Pago -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <h2>Formulario de Pago</h2>
                    <form action="procesar_pago.php" method="post">
                        <fieldset>
                            <legend>Datos de Pago</legend>
                            <div class="form-row">
                                <div class="form-group form-column">
                                    <label for="monto">Monto:</label>
                                    <select name="monto" id="monto" class="form-control">
                                        <?php
                                        for ($i = 500; $i <= 5000; $i += 500) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group form-column">
                                    <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group form-column">
                                    <label for="saldo_actual">Saldo Actual:</label>
                                    <input type="text" name="saldo_actual" id="saldo_actual" value="5000" class="form-control" readonly>
                                </div>
                                <div class="form-group form-column">
                                    <label for="interes">Interés:</label>
                                    <input type="text" name "interes" id="interes" class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group form-column">
                                    <label for "estado">Estado:</label>
                                    <select name="estado" id="estado" class="form-control">
                                        <option value="pendiente">Pendiente</option>
                                        <option value="pagado">Pagado</option>
                                    </select>
                                </div>
                                <div class="form-group form-column">
                                    <label for="tipo_abono">Tipo de Abono:</label>
                                    <select name="tipo_abono" id="tipo_abono" class="form-control">
                                        <option value="dia">Día</option>
                                        <option value="semanal">Semanal</option>
                                        <option value="quincenal">Quincenal</option>
                                        <option value="mensual">Mensual</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Realizar Pago" class="btn btn-primary">
                            </div>
                        </fieldset>
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
