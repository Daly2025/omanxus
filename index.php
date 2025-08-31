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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="homepage-background">
    <canvas id="matrixCanvas"></canvas>
    <img id="logo" src="images/logo index.png" alt="Logo">
    <div class="background-container"></div>
    <h1 class="main-title">OMANXUS</h1>
    <div class="language-selector">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="<?php echo $lang['lang_es']; ?>"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="<?php echo $lang['lang_en']; ?>"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="<?php echo $lang['lang_fr']; ?>"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="<?php echo $lang['lang_pt']; ?>"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="<?php echo $lang['lang_ar']; ?>"></a>
    </div>

    <div class="container">
        <!-- Eliminamos el carrusel y añadimos el nuevo menú -->
        <div class="servicios-dropdown">
            <button class="menu-button" id="serviciosButton"><?php echo $lang['services_button']; ?></button>
            <!-- Nuevos botones añadidos aquí -->
            <a href="conocenos.php" class="menu-button"><?php echo $lang['conocenos_button']; ?></a>
            <a href="blog.php" class="menu-button"><?php echo $lang['blog_button']; ?></a>
            <a href="contacto.php" class="menu-button"><?php echo $lang['contacto_button']; ?></a>
            <div id="menuContent" class="menu-container hidden">
                <!-- Reemplazamos la lista con botones -->

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
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="matrix.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ingenieriaButton = document.querySelector('a[href="ingenieria_multidisciplinar.php"]');
            if (ingenieriaButton) {
                ingenieriaButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default navigation

                    // Create a div to display the image
                    var previewDiv = document.createElement('div');
                    previewDiv.style.position = 'fixed';
                    previewDiv.style.top = '0';
                    previewDiv.style.left = '0';
                    previewDiv.style.width = '100%';
                    previewDiv.style.height = '100%';
                    previewDiv.style.backgroundColor = 'rgba(0, 0, 0, 0.9)'; // Dark overlay
                    previewDiv.style.display = 'flex';
                    previewDiv.style.justifyContent = 'center';
                    previewDiv.style.alignItems = 'center';
                    previewDiv.style.zIndex = '9999';

                    // Create the image element
                    var previewImage = document.createElement('img');
                    previewImage.src = 'images/ingenieria multi.png';
                    previewImage.style.maxWidth = '90%';
                    previewImage.style.maxHeight = '90%';
                    previewImage.style.objectFit = 'contain';

                    previewDiv.appendChild(previewImage);
                    document.body.appendChild(previewDiv);

                    // Set a timeout to remove the image and redirect
                    setTimeout(function() {
                        document.body.removeChild(previewDiv);
                        window.location.href = 'ingenieria_multidisciplinar.php';
                    }, 1000); // Display for 1 second (1000 milliseconds)
                });
            }

            // JavaScript for the new Servicios dropdown
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
