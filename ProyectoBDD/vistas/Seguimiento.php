<!DOCTYPE html>
<html>
<head>
    <title>Módulo de Búsqueda de Clientes</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Personalización de colores */
        .bg-primary-custom {
            background-color: #007BFF; /* Color azul */
        }
        .text-primary-custom {
            color: #007BFF;
        }
        .bg-info-custom {
            background-color: #17A2B8; /* Color turquesa */
        }
        .bg-success-custom {
            background-color: #28A745; /* Color verde */
        }
        .card-custom {
            border: 2px solid #007BFF;
            border-radius: 10px;
        }
        /* Agrega un estilo para el contenedor */
        .container-box {
            border: 2px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
            background-color:#fabfb7;
            margin-top: 20px;
            margin-bottom: 70px
        }
        
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom">
        <a class="navbar-brand" href="inicio.php">Módulo de Búsqueda de Clientes</a>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-5 container-box">
        <div class="jumbotron bg-info-custom">
            <h1 class="display-4 text-white">Módulo de Búsqueda de Clientes Activos</h1>
            <p class="lead text-white">Encuentra información detallada de los clientes con adeudos.</p>
        </div>

        <!-- Formulario de búsqueda mejorado -->
        <div class="form-group mt-4">
            <label for="search">Buscar cliente por nombre:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="search" placeholder="Escribe el nombre del cliente...">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="searchClients()">Buscar</button>
                </div>
            </div>
        </div>

        <div id="results" class="mt-4">
            <!-- La información del cliente se mostrará aquí cuando se haga clic en el botón de buscar -->
        </div>
    </div>

    <!-- Agrega la referencia a Bootstrap JS (jQuery y Popper.js son necesarios) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
</body>
</html>