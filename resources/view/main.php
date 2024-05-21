    <main>
        <section>
            <img src="<?= $poster_url; ?>" width="200" alt="Poster de <?= $title ?>" style="border-radius: 16px" />
        </section>
        <hgroup>
            <h3><?= $title ?> - <?= $until_message; ?></h3>
            <p>Fecha de estreno: <?= $release_date; ?></p>
            <p>La siguiente es: <?= $following_production; ?></p>
        </hgroup>
    </main>
    <style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>
</body>
</html>