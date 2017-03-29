<?php
function culinary_preprocess_node(&$variables) {
    if ($variables['type'] == "recette") {
        $variables['nombre_ingredients'] = count($variables['field_ingredients']);
        $variables['nombre_etapes'] = count($variables['field_etapes']);
    }
}

function culinary_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];
    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
        return $output;
    }
}

