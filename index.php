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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-container"></div>
    <div class="language-flags">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="<?php echo $lang['lang_es']; ?>"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="<?php echo $lang['lang_en']; ?>"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="<?php echo $lang['lang_fr']; ?>"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="<?php echo $lang['lang_pt']; ?>"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="<?php echo $lang['lang_ar']; ?>"></a>
    </div>

    

    <div class="container">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="<?php echo $lang['slide_1']; ?>"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="<?php echo $lang['slide_2']; ?>"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="<?php echo $lang['slide_3']; ?>"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_1']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_2']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_3']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_4']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_5']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_6']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_7']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_8']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_9']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_10']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_11']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_12']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_13']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_14']; ?></h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $lang['card_title_15']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo $lang['previous']; ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo $lang['next']; ?></span>
            </button>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>