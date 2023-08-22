<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultat2</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Srisakdi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/Style2.css">
</head>
<body>
<header>
  <i class="fa-solid fa-kiwi-bird icon-site"></i>
  <h1 class="Titre-Header">Au Pois Gourmand</h1>
</header>
<main>
  <article class="BlockMain">
    <h2>Merci pour votre commande !</h2>
    <img class="Image-command" src="../assets/img/hanoi.jpg" alt="">
    <div class="Sous-BlockMain">
      <div class="Information-Formule">
        <h3 class="TitreFormule">Votre formule Hanoi Arrive dans quelques instants...</h3>
        <i class="fa-solid fa-kiwi-bird birdh3"></i>
      </div>
      <p>Nous vous souhaitons une bonne dégustation</p>
      <p>un café gourmand vous est proposé pour terminez votre pause gourmande en douceur</p>
      <p class="Facture">-- Votre facture sera de 28 €</p>
      <a href="../index.php"><button>Choisir un autre menu</button></a>
    </div>
  </article>
  <article class="BlockMain2">
    <div class="TextBlockMain2">
      <p> -- Vous avez aimé ?</p>
      <i class="fa-solid fa-star StarGray"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-regular fa-star"></i>
    </div>
    <img class="ImageBlockMain2" src="../assets/img/pg.jpg" alt="">
  </article>

</main>
<footer>
  <div class="Petit-Oiseau">
    <i class="fa-solid fa-kiwi-bird"></i>
    <p class="Petit-Pois">.....</p>
    <i class="fa-solid fa-kiwi-bird"></i>
    <p class="Petit-Pois">....</p>
    <i class="fa-solid fa-kiwi-bird"></i>
    <p class="Petit-Pois">...</p>
    <i class="fa-solid fa-kiwi-bird"></i>
    <p class="Petit-Pois">..</p>
    <i class="fa-solid fa-kiwi-bird"></i>
    <p class="Petit-Pois">.</p>
    <h3 class="sous-titre-footer">Au Pois Gourmand</h3>
  </div>
</footer>
<script src="https://kit.fontawesome.com/46e6162e9a.js" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_GET['parametre'])) {
    $valeur = $_GET['parametre'];
    echo "Le paramètre passé est : $valeur";
} else {
    echo "Aucun paramètre n'a été passé dans l'URL.";
}
?>
