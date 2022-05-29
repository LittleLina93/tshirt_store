<?php require_once "../helpers/form-helper.php"; ?>

<header>
<a class="navbar-brand" href="<?= home_path("accueil/index.php") ?>"><img src="<?= home_path("logo1.png") ?>"/></a>
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= home_path("accueil/index.php") ?>"">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php foreach($categories as $c) : ?>
            <a href="/tshirt-store/categorie/index.php?id=<?= $c['id'] ?>"><?= $c['title'] ?></a></li>
        <?php endforeach ?>
          <!--<a class="dropdown-item" href="<?= home_path("categorie/index.php") ?>">Geek</a>-->      
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contact/index.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="panier.php">Panier</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="/tshirt_store/admin" class="btn btn-warning">Admin</a>
    </form>
  </div>
</nav>
</header>