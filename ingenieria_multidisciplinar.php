<?php
include 'template.php';

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

include 'template.php';
?>