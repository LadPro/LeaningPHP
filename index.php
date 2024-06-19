<?php
declare (strict_types = 1);
require "consts.php";
// require_once 'function.php'; #tel require once evalua si lo has llamado antes para evitar peos
// include_once 'function.php'; #el include muestra un error en vez de tumbarte la pagina

require 'function.php'; #trae el contenido de el modulo que estoy llamando, si coloco require de nuevo lo llama de nuevo con lo problemas que eso trae
// $data = get_data(API_URL); # esto es sencillo sin usar las clases

require "clases.php";
$next_movie = nextMovie::fetch_and_create(API_URL);
$data = $next_movie->get_data();
// var_dump($data)

?>

<?php render_templante("head", ["title"=> $data["title"]]);?>
<?php render_templante("style");?>
<?php render_templante("main", ["title"=> $data["title"], "poster_url"=> $data["poster_url"] , "days_until"=>$next_movie->days_until(), "release_date" =>$data["release_date"]    ]);?>


