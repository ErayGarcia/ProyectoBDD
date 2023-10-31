<!DOCTYPE html>
<html>
<head>
    <title>Módulo de Búsqueda de Clientes</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/seguimiento.css">

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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container mt-5 container-box" style="background-color: #96c4c4; padding: 20px;">
                    <div class="jumbotron bg-custom" style="background-color: #e4fbfb;">
                        <h1 class="display-4 text-black">Módulo de Búsqueda de Clientes Activos</h1>
                        <p class="lead text-black">Encuentra información detallada de los clientes con adeudos.</p>
                    </div>

                    <!-- Formulario de búsqueda mejorado -->
                    <div class="form-group mt-4">
                        <label for="search">Buscar cliente por nombre:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" placeholder="Escribe el nombre del cliente...">
                            <div class="input-group-append">
                                <button  style="background-color: #888a8a;" class="btn btn-primary" onclick="searchClients()">Buscar</button>
                            </div>
                        </div>
                    </div>

                    <div id="results" class="mt-4">
                        <!-- La información del cliente se mostrará aquí cuando se haga clic en el botón de buscar -->
                    </div>
                </div>

                <!-- Agrega la referencia a Bootstrap JS (jQuery y Popper.js son necesarios) -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

                <script>
                    // Datos de ejemplo de clientes activos (puedes reemplazar esto con datos reales)
                    const clients = [
                        {
                            id: 1,
                            name: "Juan Pérez",
                            debtAmount: 1000,
                            lastPaymentDate: "2023-10-15",
                            totalPayments: 10,
                            currentPayment: 1,
                            paymentType: "Mensual",
                            interestPaid: 50,
                            updatedBalance: 950
                        },
                        // Agrega más datos de clientes aquí
                    ];

                    // Función para buscar clientes por nombre
                    function searchClients() {
                        const searchTerm = document.getElementById("search").value.toLowerCase();
                        const resultsContainer = document.getElementById("results");
                        resultsContainer.innerHTML = "";

                        const filteredClients = clients.filter(client => client.name.toLowerCase().includes(searchTerm));

                        if (filteredClients.length === 0) {
                            resultsContainer.innerHTML = "<p class='text-muted'>No se encontraron resultados.</p>";
                        } else {
                            filteredClients.forEach(client => {
                                const resultDiv = document.createElement("div");
                                resultDiv.className = "card card-custom mb-3";
                                resultDiv.innerHTML = `
                                    <div class="card-body">
                                        <h5 class="card-title text-primary-custom">${client.name}</h5>
                                        <div class="card-text">
                                            <p><strong>Monto del Adeudo Otorgado:</strong> $${client.debtAmount}</p>
                                            <p><strong>Fecha del Abono:</strong> ${client.lastPaymentDate}</p>
                                            <p><strong>Número del Abono:</strong> ${client.currentPayment}/${client.totalPayments}</p>
                                            <p><strong>Abono correspondiente:</strong> ${client.paymentType}</p>
                                            <p><strong>Interés Pagado:</strong> $${client.interestPaid}</p>
                                            <p><strong>Saldo Actualizado:</strong> $${client.updatedBalance}</p>
                                        </div>
                                    </div>
                                `;
                                resultsContainer.appendChild(resultDiv);
                            });
                        }
                    }
                </script>
                <footer class="bg-dark text-white text-center py-2">
                    &copy; 2023 Microfinanciera. Todos los derechos reservados.
                </footer>
            </main>
        </div>
    </div>
</body>
</html>