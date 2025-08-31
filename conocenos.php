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
    <link rel="stylesheet" href="conocenos.css"> <!-- New CSS file for conocenos page -->
    <title><?php echo $lang['conocenos_title']; ?></title>
    <style>
        body {
            background-image: url('images/sobre1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="language-selector">
        <a href="?lang=es"><img src="https://flagcdn.com/es.svg" alt="<?php echo $lang['lang_es']; ?>"></a>
        <a href="?lang=en"><img src="https://flagcdn.com/gb.svg" alt="<?php echo $lang['lang_en']; ?>"></a>
        <a href="?lang=fr"><img src="https://flagcdn.com/fr.svg" alt="<?php echo $lang['lang_fr']; ?>"></a>
        <a href="?lang=pt"><img src="https://flagcdn.com/pt.svg" alt="<?php echo $lang['lang_pt']; ?>"></a>
        <a href="?lang=ar"><img src="https://flagcdn.com/sa.svg" alt="<?php echo $lang['lang_ar']; ?>"></a>
    </div>

    <div class="container">
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
        <a href="index.php" class="menu-button home-button"><?php echo $lang['home_button']; ?></a>

        <h1 class="page-title"><?php echo $lang['conocenos_heading']; ?></h1>
        <div class="conocenos-section">
            <h2>Quiénes Somos?</h2>
            <p>OMANXUS nace con el objetivo de unir la 🚀 innovación tecnológica, la ⚙️ ingeniería aplicada y la 📈 mejora continua en una sola propuesta integral. Colaboramos con empresas que necesitan soluciones robustas, personalizadas y sostenibles en entornos complejos y cambiantes.</p>

            <h2>👁️ Visión</h2>
            <p>Ofrecer un enfoque sin límites a los desafíos actuales:</p>
            <ul>
                <li>🏭 Conocimiento profundo de los sectores industriales</li>
                <li>💻 Dominio de nuevas tecnologías y herramientas digitales</li>
                <li>🎯 Experiencia operativa en planificación, ejecución y optimización</li>
            </ul>

            <h2>📋 Metodología</h2>
            <p>Nuestra metodología combina análisis, innovación y ejecución:</p>
            <ol>
                <li>🔍 Diagnóstico y auditoría de procesos</li>
                <li>⚖️ Valoración de alternativas y selección de soluciones</li>
                <li>🚀 Implantación eficiente y acompañamiento</li>
                <li>🔄 Mejora continua y mantenimiento de calidad</li>
            </ol>

            <h2>🛠️ Áreas de Actividad</h2>
            <ul>
                <li>⚙️ Ingeniería multidisciplinar de procesos industriales</li>
                <li>🏭 Rediseño y automatización de plantas</li>
                <li>📊 Consultoría estratégica y organizacional</li>
                <li>🔧 Fabricación de equipos y máquinas especiales a medida</li>
                <li>🗝️ Proyectos llave en mano</li>
                <li>🧬 Sectores: biotecnología, 🐟 pesca, 🌱 medio ambiente, 🍽️ alimentación, ⚡ energía</li>
                <li>🎓 Formación, 🤝 outsourcing, 📦 sistemas logísticos</li>
            </ul>

            <h2>💼 Procesos de Negocio</h2>
            <p>⚠️ Detectamos necesidades como:</p>
            <ul>
                <li>→ 💰 Costes elevados, duplicidades, errores operativos</li>
                <li>→ 📋 Falta de procedimientos claros y personal capacitado</li>
            </ul>
            <p>✅ Proponemos soluciones:</p>
            <ul>
                <li>→ 🔄 Reingeniería de procesos</li>
                <li>→ 🤖 Automatización y control</li>
                <li>→ 📝 Procedimentación y mejora continua</li>
                <li>→ 🏢 Transformación organizativa</li>
            </ul>

            <h2>🏭 Sistemas Productivos</h2>
            <ul>
                <li>📊 Análisis y rediseño de flujos</li>
                <li>📐 Optimización de layouts y espacios</li>
                <li>🗓️ Planificación, scheduling, producción inteligente</li>
                <li>🔬 Evaluación de tecnologías y externalización</li>
            </ul>

            <h2>📈 Procedimientos y Mejora</h2>
            <ul>
                <li>🛠️ Mejora de procesos y software</li>
                <li>🎓 Formación, integración y gestión del cambio</li>
                <li>🔒 Auditorías de seguridad y eficiencia</li>
                <li>🗝️ Proyectos llave en mano</li>
            </ul>

            <h2>🔍 Auditoría de Factoría</h2>
            <ul>
                <li>🎯 Identificación de oportunidades</li>
                <li>💡 Cuantificación de ahorros y plan de acción</li>
                <li>💻 Sistemas de información y planificación productiva</li>
            </ul>

            <h2>🎯 Estrategia Empresarial</h2>
            <ul>
                <li>📊 DAFO completo</li>
                <li>🏆 Benchmarking competitivo</li>
                <li>⭐ Identificación de ventajas sostenibles</li>
                <li>📌 Definición e implementación de KPIs</li>
            </ul>
        </div>
        <p class="copyright">Copyright © 2025 Omanxus.</p>
    </div>

    <!-- Bootstrap JS y Popper.js -->
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