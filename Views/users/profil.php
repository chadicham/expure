
<!-- Header -->
<header>
    <h2>Des créations uniques transformées en oeuvre d’art.</h2>
    <button>Découvrir</button>
</header>
<!-- fin Header -->

<!-- Section principale -->
<section class="main">

    <!-- Toutes les cartes -->

    <?php foreach ($products as $product): ?>
        <div class="cards">
            <div class="card">
                <img class="produit-card" src="/images/T-shirt-beige.jpg" alt="T-shirt-beige Expure">
                <div class="card-header">
                    <h4 class="title"><?= $product->name_products ?></h4>
                    <h4 class="price"><?= $product->price_products ?></h4>
                </div>
                <div class="card-body">
                    <p><?= $product->short_description ?> </p>
                </div>
                <a href="" class="btn">Voir plus...</a>
            </div>
        </div>
    <?php endforeach;?>

    <!-- Fin Toutes les cartes -->
    <!-- Video de présentation -->
    <div class="video">
        <video controls muted autoplay loop src="/images/SoMe_EXPURE_2.mp4"></video>
    </div>
    <!-- Fin de video de présentation -->
</section>
<!-- Fin Section principale -->

<?php if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"] === 0): ?>



<?php else: ?>


<?php endif; ?>
