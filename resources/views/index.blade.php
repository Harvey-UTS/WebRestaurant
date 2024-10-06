<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Colombiano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@400;500&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Nighty:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Concert+One&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            position: relative;
            color: white;
            text-align: center;
            overflow: hidden;
            width: 100%;
            height: 250px;
            background-image: url('{{ asset('img/Encabezado.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-title {
            font-size: 3em;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #333;
            font-weight: bold;
            z-index: 10;
            padding: 1.5rem;
            border-radius: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            background: rgba(255, 255, 255, 0.7);
        }

        .section {
            padding: 25px 20px;
            max-width: 900px;
            margin: auto;
            margin-bottom: 50px;
        }

        .section p {
            font-size: 1.4em;
            line-height: 1.6;
            color: #333;
            text-align: justify;
            font-family: "Concert One", sans-serif;
            font-weight: 0;
            font-style: normal;
        }

        .btn-custom {
            background-color: #ff6f61;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #e65c50;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .section h2 {
            margin-bottom: 20px;
            font-size: 2.5em;
            color: #ff6f61;
            font-family: 'Nerko One', cursive; /* Cambiar el tipo de letra aquí */
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            gap: 20px;
            overflow-x: auto;
            perspective: 1000px;
        }

        .card {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            max-width: 900px;
            margin: auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 15px;
            background-color: #fff;
            flex: 1;
        }

        .card-title {
            font-size: 1.5em;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1em;
            color: #333;
        }

        .card.horizontal-right .card-body {
            padding: 15px;
            text-align: left;
        }

        .card.horizontal-right img {
            order: 1;
            height: 150px;
            width: 150px;
            object-fit: cover;
            margin-left: auto;
        }

        .card.horizontal-left img {
            height: 150px;
            width: 150px;
            object-fit: cover;
            margin-right: auto;
        }

        .card img {
            height: 180px;
            width: 180px;
            object-fit: cover;
        }

        .card.horizontal-right .card-body,
        .card.horizontal-left .card-body {
            padding: 15px;
            text-align: left;
            flex: 1;
            max-width: calc(100% - 180px);
        }

        .card.horizontal-right {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 30px;
            max-width: 900px;
            margin: auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card.horizontal-left {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 30px;
            max-width: 900px;
            margin: auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-container {
            overflow: hidden;
        }

        .card-flip {
            width: 300px;
            height: 220px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.8s;
            transform-origin: center;
        }

        .card-flip:hover {
            transform: rotateY(180deg);
            z-index: 1;
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-front {
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5em;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .card-back {
            background: #fff;
            transform: rotateY(180deg);
            padding: 20px;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            background-image: url('../img/Logo.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right center;
        }

        .card-back h3 {
            margin-bottom: 10px;
            font-size: 1em;
            margin: 0;
            flex: 1;
            font-family: 'Roboto', sans-serif; /* Mantener fuente Roboto en la parte posterior de la tarjeta */
        }

        .card-back img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .card-back .text-content {
            flex: 1;
        }
    </style>
</head>
<body>

    <div class="hero-section">
        <div class="hero-title">
            <h1 style="font-family: 'Nerko One', cursive;">Restaurante Colombiano</h1>
            <h2 style="font-family: 'Nerko One', cursive;">Sabor & Sazón</h2>
        </div>
    </div>

    <div class="container">
        <section class="section" id="quienes-somos">
            <center><h2>¿Quiénes Somos?</h2></center>
            <p>La idea detrás de nuestro restaurante nació del deseo de compartir la riqueza de la gastronomía colombiana. Creemos en combinar sabores tradicionales con un entorno moderno para brindar una experiencia gastronómica que sea tanto memorable como auténtica. Únete a nosotros para disfrutar de una comida que celebra nuestra cultura. En nuestro restaurante, cada plato cuenta una historia. Desde nuestros ingredientes frescos hasta nuestras recetas tradicionales, estamos comprometidos con ofrecer la auténtica experiencia culinaria de Colombia. Ven y descubre el sabor de nuestra tierra en un ambiente acogedor y familiar.</p><br>

            <center><h2>Platos Típicos</h2></center>

            <div class="card-container">
                <div class="card-flip">
                    <div class="card-front" style="background-image: url('https://cloudfront-us-east-1.images.arcpublishing.com/semana/GBBYJH5YMZC6PEINHE3HZZH4TY.jpg');">
                        Ajiaco Santafereño
                    </div>
                    <div class="card-back">
                        <h3>Un delicioso plato tradicional de Bogotá, compuesto de pollo, papa criolla, maíz, y guascas, acompañado de aguacate y alcaparras</h3>
                    </div>
                </div>
                <div class="card-flip">
                    <div class="card-front" style="background-image: url('https://d1uz88p17r663j.cloudfront.net/original/1570939e9f814bec82c668279513c94f_BANDEJA-PAISA.jpg');">
                        Bandeja Paisa
                    </div>
                    <div class="card-back">
                        <h3>Un plato emblemático de Antioquia, que incluye frijoles, arroz, carne molida, chicharrón, huevo frito, plátano maduro, arepa y aguacate</h3>
                    </div>
                </div>
                <div class="card-flip">
                    <div class="card-front" style="background-image: url('https://www.paulinacocina.net/wp-content/uploads/2023/11/sopa-colombiana-Paulina-Cocina-Recetas-1200x675.jpg');">
                        Sancocho
                    </div>
                    <div class="card-back">
                        <h3>Una sopa sustanciosa que varía según la región, preparada con carnes, tubérculos, yuca, plátano y otros ingredientes frescos</h3>
                    </div>
                </div>
            </div>                  
        </section>

        <section class="section" id="reservas">
            <center><h2>Reserva Tu Mesa</h2></center>
            <p>Haz tu reserva y asegura tu lugar en el mejor restaurante colombiano de la ciudad. Te garantizamos una experiencia culinaria excepcional, donde cada comida es una celebración.</p><br>
            <center><a href="reservas.html" class="btn-custom">Reserva Ahora</a></center>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Restaurante Colombiano. Todos los derechos reservados.</p>
    </footer>

    <script>
        document.querySelectorAll('.card-flip').forEach(card => {
            card.addEventListener('click', () => {
                card.classList.toggle('flipped');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>