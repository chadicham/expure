<?php
$title = "Voir plus";
$description = "Affiche plus d'information à propos d'un article.";
?>
<!-- Section principale -->
<section class="main">
    <!-- Toutes les cartes -->

    <div class="cards">
        <div class="card">
            <img class="produit-card" src="<?=$product->img ?>" alt="<?= $product->name_products ?>">
            <div class="card-header">
                <h4 class="title"><?= $product->name_products ?></h4>
                <h4 class="price"><?= $product->price_products ?></h4>
            </div>
            <div class="card-body">
                <p><?= $product->short_description?></p>
                <p><?= $product->long_description ?> </p>
            </div>

        </div>
    </div>

