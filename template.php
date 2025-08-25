<?php
session_start();

// Set default language if not already set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Default to Spanish
}

// Include language file
require_once 'lang/' . $_SESSION['lang'] . '.php';

// Default values for page title and content
$page_title = $lang['default_page_title'] ?? 'Omanxus';
$page_content = $lang['default_page_content'] ?? 'Contenido de la página.';

// You can set specific page title and content in individual page files before including template.php
// Example: $page_title = $lang['ingenieria_multidisciplinar_title'];
//          $page_content = $lang['ingenieria_multidisciplinar_content'];

?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('images/fondopag.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            color: white; /* Ensure text is visible on the background */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background for content */
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <p><?php echo $page_content; ?></p>
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>