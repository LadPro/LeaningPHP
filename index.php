<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duckument</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    />
</head>

<main>

    <?php 
     const API_URL = "https://whenisthenextmcufilm.com/api";
     $ch = curl_init(API_URL);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     /* EJECUTA LA PETICION Y GUARDAMOS EL RESULTADO, ESTO ES EN BAJO NIVEL*/
     
     $result = curl_exec($ch);
     $data = json_decode($result, true);
     curl_close($ch);
     
     ?>
    <!-- <pre style="font-size: 20px; overflow: scroll; height: 400px;">
        
        <?= var_dump($data) ?>
    </pre> -->
    <section>
        <img src="<?= $data["poster_url"];?>" width="300" alt="poster de <?= $data['title'];?>">

        <hgroup>
            <h1><?= $data["title"];?></h1>
            <h2>Se estrena en: <?= $data["days_until"]?></h2>
            <h2>Fecha de estreno <?= $data["release_date"]?></h2>
        </hgroup>
    
    </section>
</main>


</html>

<style>
    section{
        display: flex;
        flex-direction: column;
        align-items: center ;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>