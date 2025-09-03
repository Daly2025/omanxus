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
<body class="investigador-principal-page">
    <div class="language-selector">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="<?php echo $lang['lang_es']; ?>"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="<?php echo $lang['lang_en']; ?>"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="<?php echo $lang['lang_fr']; ?>"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="<?php echo $lang['lang_pt']; ?>"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="<?php echo $lang['lang_ar']; ?>"></a>
    </div>

    <div class="servicios-dropdown">
        <button class="menu-button" id="serviciosButton"><?php echo $lang['services_button']; ?></button>
        <a href="conocenos.php" class="menu-button"><?php echo $lang['conocenos_button']; ?></a>
        <a href="blog.php" class="menu-button"><?php echo $lang['blog_button']; ?></a>
        <a href="contacto.php" class="menu-button"><?php echo $lang['contacto_button']; ?></a>
        <div id="menuContent" class="menu-container hidden">
            <div class="button-group">
                <a href="ingenieria_multidisciplinar.php" class="menu-button"><?php echo $lang['card_title_1']; ?></a>
                <a href="pesaje_en_barcos.php" class="menu-button"><?php echo $lang['card_title_2']; ?></a>
                <a href="pesaje_industrial.php" class="menu-button"><?php echo $lang['card_title_3']; ?></a>
            </div>
            <div class="button-group">
                <a href="fabricacion_maquinaria_especial.php" class="menu-button"><?php echo $lang['card_title_4']; ?></a>
                <a href="investigacion_invencion_multidisciplinar.php" class="menu-button"><?php echo $lang['card_title_5']; ?></a>
                <a href="sector_pesca.php" class="menu-button"><?php echo $lang['card_title_6']; ?></a>
            </div>
            <div class="button-group">
                <a href="puertos.php" class="menu-button"><?php echo $lang['card_title_7']; ?></a>
                <a href="sector_frigorificos.php" class="menu-button"><?php echo $lang['card_title_8']; ?></a>
                <a href="sala_procesado.php" class="menu-button"><?php echo $lang['card_title_9']; ?></a>
            </div>
            <div class="button-group">
                <a href="sector_conservero.php" class="menu-button"><?php echo $lang['card_title_10']; ?></a>
                <a href="acuicultura_en_el_mar.php" class="menu-button"><?php echo $lang['card_title_11']; ?></a>
                <a href="biotecnologia_aplicada_medio_ambiente.php" class="menu-button"><?php echo $lang['card_title_12']; ?></a>
            </div>
            <div class="button-group">
                <a href="biotecnologia_aplicada_medico.php" class="menu-button"><?php echo $lang['card_title_13']; ?></a>
                <a href="energyxul_industrial.php" class="menu-button"><?php echo $lang['card_title_14']; ?></a>
                <a href="formacion.php" class="menu-button menu-button-circle"><?php echo $lang['card_title_15']; ?></a>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="page-title">Sobre el Investigador Principal</h1>
        <div class="conocenos-section">
            <!-- Carousel de Imágenes -->
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="type" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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

            <!-- Contenido sobre el investigador principal aquí -->
            <h2 class="main-title">Sobre el Investigador Principal:</h2>
            <p><strong>Xulio César González Álvarez</strong></p>
            <p>Presidente e Investigador Principal de<br>OMANXUS Tecnologías del Conocimiento Aplicado S.L.</p>
            <p>WhatsApp Image 2025-08-01 at 13.01.122</p>
            <p>En OMANXUS creemos que el mayor activo no es la maquinaria ni la tecnología, sino el conocimiento aplicado con visión de futuro. Esa filosofía se personifica en su Investigador Principal y actual Presidente, Xulio César González, investigador, desarrollador e inventor incansable con más de 40 años de experiencia en innovación tecnológica, industrial y científica.</p>
            <p>Desde sus inicios en los años 83, cuando la palabra “internet” ni siquiera formaba parte del lenguaje cotidiano, Xulio revolucionó el sector pesquero desarrollando y patentando en 1985 la primera báscula del mundo para pesar a bordo de buques. Ese fue solo el primer paso de una larga trayectoria marcada por la invención, la curiosidad y la perseverancia.</p>
            <p>🧠 Una vida dedicada a la investigación e invención</p>
            <p>A lo largo de cuatro décadas, Xulio ha ideado y desarrollado más de 30 patentes, abarcando desde:</p>
            <ul>
                <li>Tecnologías de pesaje a bordo de los barcos</li>
                <li>Automatización industrial</li>
                <li>Soluciones para la industria alimentaria y conservera</li>
                <li>Sistemas de salud digital y detección precoz de enfermedades</li>
                <li>Robótica y biotecnología aplicada al sector marino</li>
                <li>Proyectos “llave en mano” en más de 60 países</li>
            </ul>
            <p>No solo diseña tecnología: la imagina antes de que exista.</p>
            <p>🌍 Una misión global, una vocación local</p>
            <p>Aunque sus proyectos han llegado a Asia, Dubai , África, Europa y América Latina, Xulio sigue operando desde Vigo, con un enfoque multidisciplinar que integra ingeniería, software, diseño industrial y visión estratégica. Lidera un equipo técnico joven y dinámico que comparte su impulso por resolver retos que aún no tienen solución en el mercado.</p>
            <p>“No me muevo por lo que ya existe, sino por lo que aún falta por crear.”</p>
            <p>— Xulio C. González</p>

            <a href="conocenos.php" class="btn btn-secondary mt-3">Volver a Conócenos</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var serviciosButton = document.getElementById('serviciosButton');
            var menuContent = document.getElementById('menuContent');

            if (serviciosButton && menuContent) {
                serviciosButton.addEventListener('click', function() {
                    menuContent.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>