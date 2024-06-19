<?php 
declare (strict_types = 1);
require_once 'consts.php';
// $title = "varaible que quiero acceder desde una funcion";

function get_data(string $url) : array
{
    // global $title;  # para acceder a una variable que esta fuera del scope de una funcion se aplica el global
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
    
}

function how_long_to($days){
    return match (true){
        $days === 0 => "Hoy se estrena",
        $days === 1 => "Mañana se estrena",
        $days < 7 => "Esta semana se estrena",
        $days < 30 => "Este mes se estrena",
        default => "Se estrena en $days",

    };
}

function render_templante(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";

}
