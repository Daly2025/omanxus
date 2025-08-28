<?php
// Start session only if one is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set default language if not already set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es'; // Default to Spanish
}

// Change language if a new one is selected
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Include language file
$lang_file = 'lang/' . $_SESSION['lang'] . '.php';
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    // If language file does not exist, load default Spanish
    include 'lang/es.php';
}

// Set default values only if they haven't been set by the including page
$page_title = $page_title ?? ($lang['default_page_title'] ?? 'Omanxus');
$page_content = $page_content ?? ($lang['default_page_content'] ?? '.');

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
<body class="<?php echo $body_class ?? ''; ?>">
    <div class="language-selector">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="<?php echo $lang['lang_es']; ?>"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="<?php echo $lang['lang_en']; ?>"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="<?php echo $lang['lang_fr']; ?>"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="<?php echo $lang['lang_pt']; ?>"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="<?php echo $lang['lang_ar']; ?>"></a>
    </div>
    <div class="container">
        <?php echo $page_content; ?>
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>