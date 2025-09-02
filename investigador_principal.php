<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang_file = 'lang/' . $_SESSION['lang'] . '.php';
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    include 'lang/es.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['investigador_principal_title'] ?? 'Investigador Principal'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="conocenos.css">
</head>
<body>
    <div class="container">
        <h1 class="page-title">Sobre el Investigador Principal</h1>
        <div class="conocenos-section">
            <!-- Contenido sobre el investigador principal aquí -->
            <p>Aquí irá la información detallada sobre el investigador principal.</p>

            <!-- Carousel de Imágenes -->
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/como lo hacemos.jpg" class="d-block w-100" alt="Cómo lo hacemos">
                    </div>
                    <div class="carousel-item">
                        <img src="images/inv1.png" class="d-block w-100" alt="Investigador 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/inv2.jpg" class="d-block w-100" alt="Investigador 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/inv3.jpg" class="d-block w-100" alt="Investigador 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Fin del Carousel -->

            <a href="conocenos.php" class="btn btn-secondary mt-3">Volver a Conócenos</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>