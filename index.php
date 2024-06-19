<?php
declare (strict_types = 1);

// require_once 'function.php'; #tel require once evalua si lo has llamado antes para evitar peos
// include_once 'function.php'; #el include muestra un error en vez de tumbarte la pagina

require 'function.php'; #trae el contenido de el modulo que estoy llamando, si coloco require de nuevo lo llama de nuevo con lo problemas que eso trae
$data = get_data(API_URL);


?>

<?php render_templante("head", $data);?>
<?php render_templante("style");?>
<?php render_templante("main", $data);?>


