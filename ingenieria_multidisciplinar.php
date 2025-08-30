<?php
// Detectar el idioma de la URL, por defecto español
$lang_code = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// Incluir el archivo de idioma correspondiente
$lang_file = 'lang/' . $lang_code . '.php';
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    // Si el archivo de idioma no existe, cargar español por defecto
    include 'lang/es.php';
    $lang_code = 'es';
}

$page_title = $lang['multidisciplinary_engineering_title'];
$page_content = "
    <div class=\"container content-section\">
        <h1 class=\"section-title\"><span class=\"icon\">🏗️</span>" . $lang['multidisciplinary_engineering_title'] . "</h1>
        <p class=\"lead-text\">" . $lang['multidisciplinary_engineering_lead_text'] . "</p>
        
        <p>" . $lang['multidisciplinary_engineering_intro_paragraph'] . "</p>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">🔧</span>" . $lang['project_management_title'] . "</h2>
        <p>" . $lang['project_management_intro_paragraph'] . "</p>
        <ul>
            <li>" . $lang['project_management_list_item_1'] . "</li>
            <li>" . $lang['project_management_list_item_2'] . "</li>
            <li>" . $lang['project_management_list_item_3'] . "</li>
            <li>" . $lang['project_management_list_item_4'] . "</li>
            <li>" . $lang['project_management_list_item_5'] . "</li>
        </ul>
        <p>" . $lang['project_management_conclusion_paragraph'] . "</p>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">🧠</span>" . $lang['technical_advisory_title'] . "</h2>
        <p>" . $lang['technical_advisory_intro_paragraph'] . "</p>
        <ul>
            <li>" . $lang['technical_advisory_list_item_1'] . "</li>
            <li>" . $lang['technical_advisory_list_item_2'] . "</li>
            <li>" . $lang['technical_advisory_list_item_3'] . "</li>
            <li>" . $lang['technical_advisory_list_item_4'] . "</li>
        </ul>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">⚙️</span>" . $lang['process_engineering_title'] . "</h2>
        <p>" . $lang['process_engineering_intro_paragraph'] . "</p>
        <ul>
            <li>" . $lang['process_engineering_list_item_1'] . "</li>
            <li>" . $lang['process_engineering_list_item_2'] . "</li>
            <li>" . $lang['process_engineering_list_item_3'] . "</li>
            <li>" . $lang['process_engineering_list_item_4'] . "</li>
        </ul>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">🧪</span>" . $lang['application_sectors_title'] . "</h2>
        <p>" . $lang['application_sectors_paragraph'] . "</p>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">🏭</span>" . $lang['industrial_organization_title'] . "</h2>
        <p>" . $lang['industrial_organization_intro_paragraph'] . "</p>
        <ul>
            <li>" . $lang['industrial_organization_list_item_1'] . "</li>
            <li>" . $lang['industrial_organization_list_item_2'] . "</li>
            <li>" . $lang['industrial_organization_list_item_3'] . "</li>
            <li>" . $lang['industrial_organization_list_item_4'] . "</li>
        </ul>
        
        <h2 class=\"section-subtitle\"><span class=\"icon\">🔑</span>" . $lang['turnkey_projects_title'] . "</h2>
        <p>" . $lang['turnkey_projects_intro_paragraph'] . "</p>
        <ul>
            <li>" . $lang['turnkey_projects_list_item_1'] . "</li>
            <li>" . $lang['turnkey_projects_list_item_2'] . "</li>
            <li>" . $lang['turnkey_projects_list_item_3'] . "</li>
            <li>" . $lang['turnkey_projects_list_item_4'] . "</li>
            <li>" . $lang['turnkey_projects_list_item_5'] . "</li>
        </ul>
        <p>" . $lang['turnkey_projects_conclusion_paragraph'] . "</p>
        
        <p class=\"contact-info\"><span class=\"icon\">📩</span>" . $lang['contact_us_email'] . "</p>
    </div>
";

// Aquí iría el HTML de la página, incluyendo el contenido PHP
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="multidisciplinar-page">
    <header>
        <div class="language-selector">
            <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="Español" title="Español"></a>
            <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="English" title="English"></a>
            <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="Français" title="Français"></a>
            <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="Português" title="Português"></a>
            <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="العربية" title="العربية"></a>
        </div>
    </header>
    <main>
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="index.php" class="back-to-home-button">🏠</a>
        </div>
        <?php echo $page_content; ?>
    </main>
    <footer>
        <!-- Puedes añadir un pie de página común aquí si lo deseas -->
    </footer>
</body>
</html>