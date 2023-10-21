<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Document</title>
    <style>
        h2 {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="./src/vistas/img/lgo.png"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Microfinanciera</h4>
                                    </div>
                                    <form method="post" action="">
                                        <p>Ingresa tus datos</p>
                                        <div class="form-outline mb-4">
                                            <input id="nombreUsuario" type="nombreUsuario" class="form-control" placeholder="Ingresar tu Nombre de Usuario" name="nombreUsuario" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input id="contrasena" type="password" class="form-control" placeholder="Ingresar contraseña" name="contraseña" />
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <input name="btningresar" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Ingresar">
                                        </div>
                                        <?php
                                        include("./src/modelo/conexionPDO.php");
                                        include("./src/controlador/controlador.php");
                                        ?>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Nuestra Empresa</h4>
                                    <p class="small mb-0">Es la provisión de servicios financieros para personas en situación de pobreza, microempresas o clientes de bajos ingresos, incluyendo consumidores y autoempleados.​ El término también se refiere a la práctica de proveer estos servicios de manera sostenible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
