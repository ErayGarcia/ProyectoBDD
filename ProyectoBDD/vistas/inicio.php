<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/inicio.css">
    <title>Document</title>
</head>
<body id="Inicio">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="#">
                <img src="../vistas/img/logo.png" height="80" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="../vistas/otorgaprestamos.php">Otorgar Prestamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="../vistas/Registrocliente.php">Registro Cliente</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link mx-2" href="">
                            <img src="../vistas/img/logo.png" width="80" height="80" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="../vistas/Seguimiento.php">Seguimiento de Prestamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="#">Estado de Cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="../cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-around flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text" id="about-text">
                        <h3 class="dark-color">Microfinanciera TUX</h3>
                        <p>En nuestra empresa microfinanciera, estamos comprometidos en brindar soluciones financieras 
                            flexibles y accesibles a nuestros clientes. Entendemos que las necesidades económicas varían, y 
                            por eso ofrecemos una amplia gama de opciones de préstamo. Si eres un nuevo cliente, puedes solicitar 
                            préstamos de entre $1,000 y $5,000 para cubrir tus necesidades financieras inmediatas. Pero no es todo, 
                            ¡valoramos la fidelidad de nuestros clientes! Si eres un cliente frecuente con un historial sólido, 
                            te damos la oportunidad de acceder a préstamos de hasta $20,000, para que puedas alcanzar tus metas 
                            financieras con mayor amplitud. En MicroFinanciera, estamos aquí para ayudarte a lograr tus objetivos económicos de manera rápida y sencilla.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="about-img" id="about-img">
                        <img src="../vistas/img/logo.png">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container-fluid">
        <footer class="text-white text-center text-lg-start bg-dark"> <!-- Cambié el color del texto a negro y el color de fondo a gris -->
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Acerca de la compañía</h5>

                        <p>
                            Trabajamos para ayudar a las personas que necesitan dinero de manera rápida o urgente. Con excelentes préstamos y pocos intereses. El método de pago es por Día, Semanal, Mensual o Anual.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4 pb-1">Contacto</h5>

                        <ul class="fa-ul" style="margin-left: 1.65em;">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Colonia Municipal Los Presidentes Numero 10</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">erayspinosa@gmail.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">9614293591</span>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Horarios</h5>

                        <table class="table text-center text-black"> <!-- Cambié el color del texto a negro -->
                            <tbody class="font-weight-normal">
                                <tr>
                                    <td>Lunes - Viernes:</td>
                                    <td>8am - 9pm</td>
                                </tr>
                                <tr>
                                    <td>Sábados</td>
                                    <td>10am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Domingo</td>
                                    <td>9am - 2pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> <!-- Cambié el color de fondo a gris -->
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Microfinanciera TUX</a> <!-- Cambié el color del texto a negro -->
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>