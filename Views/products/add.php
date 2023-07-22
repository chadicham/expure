<!-- si session user n'est pas admin alors redirige sur /products -->
<?php
// Démarrez la session
session_start();

//indique si l'utilisateur est administrateur ou non.
$isAdmin = false;

// Vérifie si l'utilisateur n'est pas administrateur (isAdmin est faux)
if (!$isAdmin) {
    // Effectuez la redirection vers "/products"
    header("Location: /products");
    exit;
}
?>
<div id="form" >
    <H2>Ajoutez un nouveau produit</H2>
    <form method="post">
    <div class="label"><label for="name_products">Nom du produit </label></div>
    <input id="" type="" name="name_products" placeholder="Nom du produit">
   <div class="label"> <label for="price_products">Prix du produit </label></div>
    <input id="" type="" name="price_products" placeholder="prix du produit">
   <div class="label"> <label for="short_description">Petite description </label></div>
    <input id="" type="" name="short_description" placeholder="Petite description">
  <div class="label">  <label for="long_description">Description du produit</label></div>
    <input id="" type="" name="long_description" placeholder="Description du produit">
  <div class="label">  <label for="categorie_name">Catégorie du produit </label></div>
    <input id="" type="" name="categorie_name" placeholder="Catégorie du produit">
   <div class="label"> <label for="artist_name">Nom de l'artiste </label></div>
    <input id="" type="" name="artist_name" placeholder="Nom de l'artiste">
    <button class="btn" type="submit">Ajouter</button>
</form>
</div>

<?php if(isset($_SESSION["error"])): ?>

        <div class="error-add">
            <p><?= $_SESSION["error"] ?></p>
        </div>

<?php endif;
unset($_SESSION["error"])
?>
