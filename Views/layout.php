<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Expure<?= " - ".$title??"" ?></title>
    <meta name="description" content="<?=$description?>">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <!-- Socials -->
    <meta content="Expure<?= " - ".$title??"" ?>" property="og:title">
    <meta content="<?=$description?>" property="og:description">
    <meta content="https://expure.me/" property="og:url">
    <meta content="https://i.imgur.com/qJxTZoZ.png" property="og:image">
    <meta name="twitter:card" content="summary_large_image">
</head>

</head>
<body>
<!-- Barre de navigation -->
    <nav>
        <a href="/" class="h1-link">
            <h1>Expure</h1>
        </a>
        <div class="onglets">
            <ul class="pages">
                <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"]===0 || !isset($_SESSION["user"])): ?>
                <li class="link" a href="#">Vêtements</li>
                <li class="link" a href="#">Peintures</li>
                <?php endif ?>
                <li class="link"><a href="/artistes">Artistes</a></li>
                <li class="link"><a href="/products">Produits</a></li>
                <?php if (!isset($_SESSION["user"])): ?>
                <li class="link"><a href="/users/login">Se connecter</a></li>
                <li class="link"><a href="/users/register">S'inscrire</a></li>
                <?php endif ?>
                <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"]===1): ?>
                <li class="link"><a href="/products/add">Ajouter un produit</a></li>
                <li class="link"><a href="/artistes/add">Ajouter un/une artiste</a></li>
                <?php endif ?>
                <?php if (isset($_SESSION["user"])): ?>
                <li class="link"><a href="/users/logout">Se déconnecter</a></li>
                <?php endif ?>
            </ul>
            <form>
                <input type="search" placeholder="Rechercher">
            </form>
            <p><i class="fa-regular fa-heart"></i></p>
            <p><i class="fa-solid fa-cart-shopping"></i></p>
        </div>
    </nav>
    <!-- fin de la barre de navigation -->

<?= $content ?>

    <!-- Footer -->
    <footer>
        <div class="contact-us">
            <h4>Une idée de projet ?</h4>
            <p>Contactez-nous pour nous partager votre idée.</p>
            <div class="social-media">
                <p><i class="fab fa-instagram"></i></p>
                <p><i class="fab fa-facebook-f"></i></p>
                <p><i class="fab fa-linkedin"></i></p>
            </div>
        </div>
        <div class="adresse">
            <p>+41 22 321 01 63</p>
            <p>info@expure.ch</p>
            <p>Boulevard du Pont d’Arve 28, 1205 Genève</p>
        </div>
        <div class="info">
            <p>&copy; 2023 Expure. Tous droits réservés. | <a href="mentions-legales.html">Mentions légales</a> | <a href="politique-confidentialite.html">Politique de confidentialité</a> | </p>
            <p>Contact : info@expure.ch | BOULEVARD DU PONT D'ARVE 28, 1205 GENÈVE</p>
        </div>
    </footer>
    <!-- fin footer -->

</body>
</html>