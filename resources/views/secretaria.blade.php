<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Secretaria - Restaurante Colombiano</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #ffda79;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #343a40;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .nav-link {
            font-weight: 500;
            color: #343a40;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .container {
            margin-top: 40px;
        }
        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: #343a40;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background-color: #ffda79;
            margin: 20px auto 0;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        }
        .card-body {
            padding: 25px;
        }
        .card-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .card-text {
            font-size: 16px;
            color: #6c757d;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
            margin-top: 60px;
        }
        .footer h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .footer p, .footer ul {
            font-size: 14px;
            line-height: 1.8;
        }
        .footer-icons {
            font-size: 24px;
            margin-top: 20px;
        }
        .footer-icons a {
            color: #ffffff;
            margin-right: 15px;
            transition: color 0.3s ease;
        }
        .footer-icons a:hover {
            color: #ffda79;
        }
        .dashboard-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: space-around;
            margin-top: 40px;
        }
        .dashboard-action {
            text-align: center;
            padding: 40px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .dashboard-action:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .dashboard-action h5 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #343a40;
        }
        .dashboard-action .icon {
            font-size: 40px;
            color: #ffda79;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Sabor Colombiano</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panel de Secretaria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <div class="container">
        <h2 class="section-title">Panel de Control - Secretaria</h2>
        <p class="text-center mb-5">Administra las reservas y realiza gestiones rápidas desde este panel.</p>

        <!-- Dashboard Actions -->
        <div class="dashboard-actions">
            <div class="dashboard-action">
                <div class="icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h5>Ver Reservas</h5>
                <p>Revisa todas las reservas de mesas.</p>
                <a href="#" class="btn btn-primary">Acceder</a>
            </div>
            <div class="dashboard-action">
                <div class="icon">
                    <i class="fas fa-user-edit"></i>
                </div>
                <h5>Gestionar Clientes</h5>
                <p>Consulta y actualiza información de los clientes.</p>
                <a href="#" class="btn btn-primary">Acceder</a>
            </div>
            <div class="dashboard-action">
                <div class="icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h5>Configuración</h5>
                <p>Ajusta las configuraciones del sistema.</p>
                <a href="#" class="btn btn-primary">Acceder</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Sobre Nosotros</h5>
                    <p>Sabor Colombiano es un restaurante dedicado a brindar la mejor experiencia gastronómica colombiana.</p>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>