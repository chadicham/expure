<?php
$title = "Accueil";
$description = "Affiche plus d'information à propos d'un article.";
?>
<!-- Section principale -->
<section class="main">
    <!-- Toutes les cartes -->

    <div class="cards">
        <div class="card">
            <img class="produit-card" src="<?=$artiste->img ?>" alt="<?= $artiste->name_products ?>">
            <div class="card-header">
                <h4 class="title"><?= $artiste->name_artiste ?></h4>
            </div>
            <div class="card-body">
                <p><?= $artiste->description_artiste ?> </p>
                <p>#<?= $artiste->categorie ?> </p>
            </div>
        </div>
    </div>

