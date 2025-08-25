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
        <!-- Eliminamos el carrusel y añadimos el nuevo menú -->
        <div class="menu-container">
            <!-- Reemplazamos la lista con botones -->
            <a href="ingenieria_multidisciplinar.php" class="menu-button">INGENIERÍA MULTIDISCIPLINAR</a>
            <a href="pesaje_en_barcos.php" class="menu-button">PESAJE EN BARCOS</a>
            <a href="pesaje_industrial.php" class="menu-button">PESAJE INDUSTRIAL</a>
            <a href="fabricacion_maquinaria_especial.php" class="menu-button">FABRICACION DE MAQUINARIA ESPECIAL</a>
            <a href="investigacion_invencion_multidisciplinar.php" class="menu-button">INVESTIGACION E INVENCION MULTIDISCIPLINAR</a>
            <a href="sector_pesca.php" class="menu-button">SECTOR DE LA PESCA</a>
            <a href="puertos.php" class="menu-button">PUERTOS</a>
            <a href="sector_frigorificos.php" class="menu-button">SECTOR FRIGORIFICOS</a>
            <a href="sala_procesado.php" class="menu-button">SALA DE PROCESADO</a>
            <a href="sector_conservero.php" class="menu-button">SECTOR CONSERVERO</a>
            <a href="acuicultura_mar.php" class="menu-button">ACUICULTURA EN EL MAR</a>
            <a href="biotecnologia_medio_ambiente.php" class="menu-button">BIOTECNOLOGIA APLICADA AL SECTOR MEDIO AMBIENTE</a>
            <a href="biotecnologia_medico.php" class="menu-button">BIOTECNOLOGIA APLICADA AL SECTOR MEDICO</a>
            <a href="energyxul_industrial.php" class="menu-button">ENEGYXUL INDUSTRIAL</a>
            <a href="formacion.php" class="menu-button">FORMACION</a>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<img id="logo" src="images/logo1.png" alt="Logo">