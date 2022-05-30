<?php

if (
  isset($_POST["nom"]) and $_POST["nom"] != ""
  and isset($_POST["prenom"]) and $_POST["prenom"] != ""
  and isset($_POST["email"]) and $_POST["email"] != ""
  and isset($_POST["message"]) and $_POST["message"] != ""
) {
  echo '<p class=couleur_texte>"Nous vous recontacterons dès que possible."</p>';
  $completer = true;
} else {
  echo '<p class=couleur_texte>"Veuillez remplir les champs obligatoires !!!"<p>';
}

?>
<?php $title = "Accueil";
require "./head.php"; ?>

<body>
  <html>

  <head>
    <?php $title = "Accueil";
    require "./header.php"; ?>
  </head>

  <body>
    <?php require "./header.php"; ?>
    <h1>Contact</h1>
    <h2>Formulaire de contact</h2>
    <form method="POST">
      <div>
        <input class="fname" type="text" name="nom" placeholder="Nom">
        <input class="fname" type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="gsm" placeholder="Numéro de téléphone">
      </div>
      <span type="text" name="message" placeholder="message">Message</span>
      <div>
        <textarea rows="4" required></textarea>
      </div>
      <button type="submit" href="/">Envoyer</button>
    </form>
    <?php require "./footer.php"; ?>
  </body>

  </html>