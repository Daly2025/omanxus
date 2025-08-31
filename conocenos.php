<?php
// Incluir el archivo de idioma para la internacionalización
include 'lang/' . (isset($_SESSION['lang']) ? $_SESSION['lang'] : 'es') . '.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['conocenos_title']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir tu menú de navegación, similar al de index.php -->
        <nav>
            <ul>
                <li><a href="index.php"><?php echo $lang['home_button']; ?></a></li>
                <li><a href="#"><?php echo $lang['services_button']; ?></a></li>
                <li><a href="conocenos.php"><?php echo $lang['conocenos_button']; ?></a></li>
                <li><a href="blog.php"><?php echo $lang['blog_button']; ?></a></li>
                <li><a href="contacto.php"><?php echo $lang['contacto_button']; ?></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><?php echo $lang['conocenos_heading']; ?></h1>
        <p><?php echo $lang['conocenos_content']; ?></p>
        <!-- Agrega aquí el contenido específico de la página Conocenos -->
    </main>

    <footer>
        <!-- Aquí puedes incluir tu pie de página -->
    </footer>
</body>
</html>