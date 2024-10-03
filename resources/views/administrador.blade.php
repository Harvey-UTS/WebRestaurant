<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador | Restaurante Colombiano</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            position: fixed;
            width: 250px;
        }
        .sidebar a {
            color: #ffffff;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            background-color: #ffda79;
        }
        .navbar-brand {
            color: #343a40;
            font-size: 24px;
            font-weight: bold;
        }
        .dashboard-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="fas fa-home"></i> Inicio</a>
        <a href="#"><i class="fas fa-user-cog"></i> Gestión de Usuarios</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Gestión de Reservas</a>
    </div>

    <!-- Contenido Principal -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Panel de Administrador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <!-- Dashboard -->
        <div class="container">
            <h1 class="dashboard-title">Bienvenido, Administrador</h1>

            <!-- Tarjetas de Estadísticas -->
            <div class="row">
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Reservas de Hoy
                        </div>
                        <div class="card-body">
                            <h3>15</h3>
                            <p>Número de reservas para hoy</p>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2024 Sabor Colombiano - Todos los derechos reservados</p>
    </div>

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>