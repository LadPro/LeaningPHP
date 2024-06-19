<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="poster de <?= $data['title']; ?>">

        <hgroup>
            <h1><?= $data["title"]; ?></h1>
            <h2><?= how_long_to($data["days_until"]) ?></h2>
            <h2>Fecha de estreno <?= $data["release_date"] ?></h2>
        </hgroup>

    </section>

</main>
