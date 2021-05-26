<?php
/*
Plugin Name: Superheroes
Plugin URI: https://superheroapi.com
Description: Tarjetas de superheroes.
Version: 1.0
Author: Mario Campo
Author URI: https://github.com/MarioCampo
License: GPLv2 or later
Text Domain: superheroes
*/
ob_start();
function mostrarSuper($superheroe)
{
    $p = shortcode_atts( array (
        'nombre' => 'Angela'
        ), $superheroe );
    $request = wp_remote_get("https://superheroapi.com/api/10226244192914722/search/".$p['nombre']);
    $response = wp_remote_retrieve_body($request);
    $finalData = json_decode( $response );
    for ($i=0; $i < count($finalData->results); $i++) {
        echo '<div id="tarjetaSuper'.$i.'">';
        echo '<h2 id="nombreSuper">'.$finalData->results[$i]->name.'</h2>';
        echo '<img id="imagenSuper" src='.$finalData->results[$i]->image->url.'>';
        echo '<h3 id="tituloEstadisticas"> Habilidades </h3>';
        echo '<ul id="estadisticasSuper">';
        echo '<li id="inteligencia"> Inteligencia '.$finalData->results[$i]->powerstats->intelligence.'</li>';
        echo '<li id="fuerza"> Fuerza '.$finalData->results[$i]->powerstats->strength.'</li>';
        echo '<li id="velocidad"> Velocidad '.$finalData->results[$i]->powerstats->speed.'</li>';
        echo '<li id="aguante"> Aguante '.$finalData->results[$i]->powerstats->durability.'</li>';
        echo '<li id="poder"> Poder '.$finalData->results[$i]->powerstats->power.'</li>';
        echo '<li id="combate"> Combate '.$finalData->results[$i]->powerstats->combat.'</li>';
        echo '</ul>';
        echo '<h4 id="tituloBiografia"> Biografia </h4>';
        echo '<p id="biografiaSuper"> Su nombre completo es '.$finalData->results[$i]->biography->{'full-name'}.'.
              Algunos de sus alter egos son '.$finalData->results[$i]->biography->{'alter-egos'}.'.
              Lugar de nacimiento: '.$finalData->results[$i]->biography->{'place-of-birth'}.'.
              Primera aparición: '.$finalData->results[$i]->biography->{'first-appearance'}.'</p>';
        echo '</div>';
    }
    $output= ob_get_clean();
    return $output;
}

add_shortcode('superheroe', 'mostrarSuper');