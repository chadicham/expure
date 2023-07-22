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
    <H2>Ajoutez un/une artiste</H2>
    <form method="post">
        <div class="label"><label for="name_artiste">Nom de l'artiste </label></div>
        <input id="" type="" name="name_artiste" placeholder="Nom de l'artiste">
        <div class="label"> <label for="description_artiste">Description artiste </label></div>
        <input id="" type="" name="description_artiste" placeholder="Description artiste">
        <div class="label">  <label for="categorie">Spécialisation de l'artiste </label></div>
        <input id="" type="" name="categorie" placeholder="Spécialisation de l'artiste">
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
