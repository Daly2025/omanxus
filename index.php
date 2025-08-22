<?php
// Inicia la sesión para manejar el idioma
session_start();

// Define el idioma por defecto si no está establecido
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Español como idioma por defecto
}

// Cambia el idioma si se selecciona uno nuevo
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Carga el archivo de idioma basado en $_SESSION['lang']
// Asegúrate de que el archivo exista para evitar errores
$lang_file = 'lang/' . $_SESSION['lang'] . '.php';
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    // Si el archivo de idioma no existe, carga el español por defecto
    include 'lang/es.php';
}

?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omanxus</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .menu-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .menu-button:hover {
            background-color: #0056b3;
        }
        .carousel-inner {
            display: flex;
            flex-wrap: nowrap;
            overflow: hidden;
        }
        .carousel-item {
            flex: 0 0 20%; /* Muestra 5 elementos a la vez */
            /* margin-right: 15px; Espacio entre los elementos */
            transition: transform 0.6s ease-in-out;
        }
        .carousel-item:last-child {
            margin-right: 0;
        }
        .carousel-item .d-flex {
            width: 100%;
            justify-content: space-around;
            align-items: stretch; /* Ensures all cards in a row have the same height */
        }
        .carousel-item .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            padding: 15px;
            margin: 10px; /* Margen entre las tarjetas */
            background-color: #fff;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* width: 18rem; */ /* Removed fixed width */
        }
        .carousel-item .card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .carousel-item .card h5 {
            font-size: 1rem;
            margin-bottom: 0;
        }
        .language-flags {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 10px; /* Adds space between flags */
        }
        .language-flags img {
            width: 40px; /* Adjust flag size as needed */
            height: auto;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        /* Responsive adjustments */
        @media (min-width: 1200px) {
            .carousel-item {
                flex: 0 0 20%; /* 5 items on large screens */
            }
        }
        @media (min-width: 768px) and (max-width: 1199px) {
            .carousel-item {
                flex: 0 0 33.333%; /* 3 items on medium screens */
            }
        }
        @media (min-width: 576px) and (max-width: 767px) {
            .carousel-item {
                flex: 0 0 50%; /* 2 items on tablets */
            }
        }
        @media (max-width: 575px) {
            .carousel-item {
                flex: 0 0 100%; /* 1 item on mobile */
            }
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000; /* Make arrows visible */
            border-radius: 50%;
            padding: 15px;
        }
        .carousel-indicators button {
            background-color: #000; /* Make dots visible */
        }
    </style>
</head>
<body>
    <div class="language-flags">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="Español"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="English"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="Français"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="Português"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="العربية"></a>
    </div>
    <h1><?php echo $lang['welcome_message']; ?></h1>

    <div class="container">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">INGENIERÍA MULTIDISCIPLINAR</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">PESAJE EN BARCOS</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">PESAJE INDUSTRIAL</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">FABRICACION DE MAQUINARIA ESPECIAL</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">INVESTIGACION E INVENCION MULTIDISCIPLINAR</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">SECTOR DE LA PESCA</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">PUERTOS</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">SECTOR FRIGORIFICOS</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">SALA DE PROCESADO</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">SECTOR CONSERVERO</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">ACUICULTURA EN EL MAR</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">BIOTECNOLOGIA APLICADA AL SECTOR MEDIO AMBIENTE</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">BIOTECNOLOGIA APLICADA AL SECTOR MEDICO</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">ENEGYXUL INDUSTRIAL</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title">FORMACION</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>