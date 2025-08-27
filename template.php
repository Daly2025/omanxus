<?php
session_start();

// Set default language if not already set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Default to Spanish
}

// Include language file
require_once 'lang/' . $_SESSION['lang'] . '.php';

// Set default values only if they haven't been set by the including page
$page_title = $page_title ?? ($lang['default_page_title'] ?? 'Omanxus');
$page_content = $page_content ?? ($lang['default_page_content'] ?? 'Contenido de la página.');

?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php echo $page_content; ?>
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>