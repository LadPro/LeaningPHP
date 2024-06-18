<?php 
    $name = "nalgon";
    $age = 90;
    $isAlive = false;
    $isDev = false;
    $output = $isAlive
        ? 'tas vivo'
        : 'tas muerto';

    $outputMatch = match ($age){
        0 , 1 , 2 => "eres un bebe",
        3, 4 , 5, 6, 7, 8, 9, 10 => "eres un niño",
        11, 12 ,13, 14, 15, 16, 17, 18 => "eres un adolecente",
        19 , 29 , 21, 22 , 23, 24, 25, 26, 27 => "eres un adulto joven",
        default => "eres un adulto",
    };
    $outputMatch = match (true){
        $age < 2 => "eres un bebe",
        $age < 10 => "eres un niño",
        $age < 18 => "eres un adolecente",
        $age < 27 => "eres un adulto joven",
        default => "eres un adulto",
    };
    $outputMatch2 = match ($age){
        0 , 1 , 2 => "eres un bebe",
        3, 4 , 5, 6, 7, 8, 9, 10 => "eres un niño",
        11, 12 ,13, 14, 15, 16, 17, 18 => "eres un adolecente",
        19 , 29 , 21, 22 , 23, 24, 25, 26, 27 => "eres un adulto joven",
        default => "eres un adulto",
    };

    $bestLanguages = ["PHP", "JavaScript", "Python", 1];
    $bestLanguages[3] = "Java";
    $bestLanguages[] = "TypeScript";

    var_dump($name);
    var_dump($age);
    var_dump($isAlive);

    define('LOGO_URL', 'vanesa rodriguez'); #variable global
    const NOMBRE = "Jose Manuel"; #jjjvariable local para las clases
    
    $personas = [
        "name" => "miguel",
        "age" => 78,
        "isDev" => false,
        "languages" => ["PHP", "JavaScript", "Python"]
    ];

    const API_URL = "https://whenisthenextmcufilm.com/api";
    $ch = curl_init(API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    /* EJECUTA LA PETICION Y GUARDAMOS EL RESULTADO, ESTO ES EN BAJO NIVEL*/

    $result = curl_exec($ch);
    #$result = file_get_contents(API_URL);
    $data = json_decode($result, true);
    curl_close($ch);
     
?>
<?= var_dump($data) ?>


<?php if ($isAlive) : ?>
    <h2>tas viva</h2>

<?php elseif ($isDev) : ?>
    <h2>tas mal</h2>

<?php else : ?>  
    <h2>tas muerto</h2>

<?php endif ; ?>

<h2><?=$output?></h2>

<?php 
if ($isAlive){
    echo "<h2>tas viva</h2>";
}else if ($isDev){
    echo "<h2>tas mal</h2>";
}else {
    echo "<h2>tas muerto</h2>";
}

?>

<?php ?>

<h1>

    <?="hola " . $name ."<br/>";?> 
    <?="hola  $name <br/>";?> 
    
    <?=$age + 1;?>
</h1>

<h1>

</h1>

<h1>

<?php

echo "hola nalgas";


?>
</h1>

<h1>
    <?=$outputMatch ?>

</h1>
<h1>
    <?=$outputMatch2 ?>

</h1>
<ul>

    <?php foreach($bestLanguages as $key => $Languages) : ?>
        <li><?= $key . " " .  $Languages ?></li>
    
        <?php endforeach ; ?>
</ul>

