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
    <link rel="stylesheet" href="../css/principal.css">
    <title>Document</title>
</head>
<body id="Inicio" >
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

            <!-- Contenido Principal -->
            <main class="col-md-9 col-lg-10">
                <section class="section about-section gray-bg" id="about"  style="background-color: #96c4c4;">
                    <div class="container">
                        <div class="row align-items-center justify-content-around">
                            <div class="col-lg-6">
                                <div class="about-text" id="about-text">
                                    <h3 class="dark-color">Microfinanciera TUX</h3>
                                    <p class="text-black">En nuestra empresa microfinanciera, estamos comprometidos en brindar soluciones financieras 
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
                                    <img src="../vistas/img/micro.jpg" width="300px" alt="Logo de la empresa">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer>
                    <div class="container p-2" >
                        <div class="row"  style="background-color: #aedddd;">
                            <div class="col-lg-6 col-md-12 mb-4"  style="background-color: #aedddd;">
                                <h5 class="mb-3" style="letter-spacing: 2px; color: #000000;">Acerca De..</h5>
                                <p class="text-black">
                                    Somos una empresa dedicada ayudar a las personas que necesiten dinero de inmediato
                                    mediante prestamos de 1000 a 20000 pesos. Puedes pagar de manera diaria,semanal,
                                    quincenal y mensual.
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <h5 class="mb-1" style="letter-spacing: 2px; color: #000000;">Horario</h5>
                                <table class="table" style="color: #4f4f4f; border-color: #666;">
                                    <tbody>
                                        <tr>
                                            <td>Lun a Vier</td>
                                            <td>8am - 9pm</td>
                                        </tr>
                                        <tr>
                                            <td>Sab y Dom</td>
                                            <td>8am - 2pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-3" style="background-color:#96c4c4;">
                        © 2023 Copyright:
                        <a class="text-dark" href="https://mdbootstrap.com/">MicrofinancieraTUX</a>
                    </div>
                </footer>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>