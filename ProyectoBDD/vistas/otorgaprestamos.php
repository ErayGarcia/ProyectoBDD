<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registro de Préstamo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="../vistas/inicio.php" style="color: black;">Registro</a>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Registro de Préstamo</h1>
        <form action="procesar_prestamo.php" method="post">
            <div class="form-group">
                <label for="monto">Monto del Préstamo:</label>
                <input type="text" class="form-control" name="monto" required>
            </div>
            <div class="form-group">
                <label for="tipo_abono">Tipo de Abono (500 - 5000):</label>
                <input type="number" class="form-control" name="tipo_abono" min="500" max="5000" required>
            </div>
            <div class="form-group">
                <label for="frecuencia_pago">Frecuencia de Pago:</label>
                <select class="form-control" name="frecuencia_pago">
                    <option value="dias">Días</option>
                    <option value="semanas">Semanas</option>
                    <option value="quincenal">Quincenal</option>
                    <option value="anual">Anual</option>
                </select>
            </div>
            <input type="hidden" name="fecha_registro" value="<?php echo date('Y-m-d'); ?>">
            <!-- Otros campos de préstamo según tu esquema de base de datos -->
            <button type="submit" class="btn btn-success">Registrar Préstamo</button>
        </form>
    </div>

    <footer class="text-center py-3">
        © 2023 Tu Compañía. Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
