<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Reserva - Sabor Colombiano</title>
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
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            margin-right: 10px;
            width: 40px;
            height: auto;
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
            height: 300px;
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
            font-size: 48px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
        }
        .container {
            margin-top: 40px;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            color: #343a40;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 20px;
            padding: 12px 20px;
            margin-bottom: 20px;
        }
        #ocasion, #mesa {
    height: auto;
    padding: 10px 20px;
    font-size: 16px;
        }
        .btn-reservar {
            background-color: #28a745;
            border-color: #28a745;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .btn-reservar:hover {
            background-color: #218838;
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                Sabor Colombiano
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item active">
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
            <h1>Reserva tu Experiencia Culinaria</h1>
        </div>
    </div>

    <!-- Formulario de Reserva -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="form-title">Realiza tu Reserva</h2>
                    <form id="reservaForm">
                        <div class="form-group">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de reserva</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <div class="form-group">
                            <label for="hora">Hora de reserva</label>
                            <input type="time" class="form-control" id="hora" required>
                        </div>
                        <div class="form-group">
                            <label for="personas">Número de personas</label>
                            <input type="number" class="form-control" id="personas" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="ocasion">Ocasión</label>
                            <select class="form-control" id="ocasion">
                                <option value="">Seleccione una ocasión</option>
                                <option value="romantica">Cita Romántica</option>
                                <option value="negocios">Cita de Negocios</option>
                                <option value="cumpleanos">Cumpleaños</option>
                                <option value="carnaval">Carnaval</option>
                                <option value="vallenato">Cena con Parranda Vallenata</option>
                                <option value="familiar">Reunión Familiar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mesa">Tipo de Mesa</label>
                            <select class="form-control" id="mesa">
                                <option value="">Seleccione un tipo de mesa</option>
                                <option value="intima">Mesa Íntima (2 personas)</option>
                                <option value="familiar">Mesa Familiar (4 personas)</option>
                                <option value="grupo">Mesa de Grupo (6 personas)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comentarios">Comentarios adicionales</label>
                            <textarea class="form-control" id="comentarios" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-reservar btn-block">Confirmar Reserva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sabor Colombiano</h5>
                    <p>Disfruta de la auténtica cocina colombiana en un ambiente acogedor y lleno de tradición.</p>
                </div>
                
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <p>Calle 123 #45-67, Bogotá, Colombia</p>
                    <p>Teléfono: (57) 1234567890</p>
                    <p>Email: info@saborcolombiano.com</p>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('reservaForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí puedes agregar la lógica para procesar la reserva
            alert('¡Reserva realizada con éxito! Nos pondremos en contacto contigo pronto para confirmar los detalles.');
            this.reset(); // Limpiar el formulario
        });
    </script>
</body>
</html>