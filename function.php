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
        $days === 0 => "hoy se estrena",
        $days === 1 => "mañana se estrena",
        $days < 7 => "esta semana se estrena",
        $days < 30 => "este mes se estrena",
        default => "se estrena en $days",

    };
}

function render_templante (string $template, array $data = []){
    require "templates/$template.php";

}
