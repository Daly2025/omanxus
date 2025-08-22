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
            box-sizing: border-box;
        }
        .language-flags {
            text-align: right;
            padding: 10px;
            background-color: #f0f0f0;
            border-bottom: 1px solid #ddd;
        }
        .language-flags img {
            width: 30px; /* Tamaño de las banderas */
            height: 20px;
            margin-left: 5px;
            cursor: pointer;
        }
        
        .language-flags a {
            text-decoration: none;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>