<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Mesa - Restaurante Colombiano</title>
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
        .hero {
            background-image: url('img/FONDO.avif');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 54px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
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
        .event-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
            margin-bottom: 30px;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        }
        .event-img {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .event-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));
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
        .btn-reservar {
            background-color: #28a745;
            border-color: #28a745;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        .btn-reservar:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .mesa-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .mesa {
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: all 0.3s ease;
        }
        .mesa:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .mesa h5 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #343a40;
        }
        .mesa .sillas {
            font-size: 18px;
            margin-bottom: 20px;
            color: #6c757d;
        }
        .mesa img {
            width: 70%;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .mesa-estado {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
        }
        .mesa-disponible {
            background-color: #28a745;
            color: white;
        }
        .mesa-ocupada {
            background-color: #dc3545;
            color: white;
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
                        <a class="nav-link" href="#">Reservar Mesa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis Reservas</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Sabores Auténticos de Colombia</h1>
            <p>Descubre la riqueza de nuestra gastronomía en un ambiente acogedor</p>
        </div>
    </div>

    <!-- Contenedor Principal -->
    <div class="container">
        <!-- Evento y Mesas Disponibles -->
        <h2 class="section-title">Reserva tu Mesa para Cualquier Ocasión</h2>
        <p class="text-center mb-5">Selecciona un evento temático y una mesa disponible para vivir una experiencia gastronómica única.</p>

        <!-- Galería de Eventos -->
        <div class="row">
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/cita_romantica.jpeg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Cita Romántica</h5>
                        <p class="card-text">Disfruta de una noche inolvidable en un ambiente romántico y acogedor.</p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/cita_negocios.jpg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Cita de Negocios</h5>
                        <p class="card-text">Perfecto para reuniones de trabajo en un ambiente profesional y acogedor.</p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/cumpleaños.avif');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Cumpleaños</h5>
                        <p class="card-text">Ideal para festejar tu día especial con las personas que amas.</p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/carnaval.jpeg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Carnaval</h5>
                        <p class="card-text">Celebra el carnaval con sabores vibrantes y una atmósfera festiva.</p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/vallenato.jpeg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Cena con Parranda Vallenata</h5>
                        <p class="card-text">Cena en un ambiente más alegre y divertido con música en vivo. </p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <div class="event-img" style="background-image: url('img/cena-Familiar.jpg');"></div>
                    <div class="card-body">
                        <h5 class="card-title">Reunión Familiar</h5>
                        <p class="card-text">Espacio perfecto para compartir momentos especiales en familia.</p>
                        <a href="#" class="btn btn-reservar btn-block">Reservar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Mesas -->
        <h3 class="section-title mt-5">Mesas Disponibles</h3>
        <div class="mesa-layout">
            <div class="mesa">
                <img src="img/mesa_2_sillas.jpeg" alt="Mesa 2 sillas">
                <h5>Mesa Íntima</h5>
                <p class="sillas">2 Sillas</p>
                <div class="mesa-estado mesa-disponible">Disponible</div>
                <a href="#" class="btn btn-reservar btn-block mt-3">Seleccionar</a>
            </div>
            <div class="mesa">
                <img src="img/mesa_4_sillas.jpeg" alt="Mesa 4 sillas">
                <h5>Mesa Familiar</h5>
                <p class="sillas">4 Sillas</p>
                <div class="mesa-estado mesa-ocupada">Ocupada</div>
            </div>
            <div class="mesa">
                <img src="img/mesa_6_sillas.jpeg" alt="Mesa 6 sillas">
                <h5>Mesa de Grupo</h5>
                <p class="sillas">6 Sillas</p>
                <div class="mesa-estado mesa-disponible">Disponible</div>
                <a href="#" class="btn btn-reservar btn-block mt-3">Seleccionar</a>
            </div>
        </body>
        </html>