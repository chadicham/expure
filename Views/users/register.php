<?php
$title = "Créer un compte";
$description = "Art et Evénementiel : Inspirer un mouvement autour de l’art et la culture pour rendre chaque expérience unique et mémorable.";
?>
<?php if (isset($_SESSION["user"]))
{
    //Renvoie sur la page profil
    header("Location: /users/profil");
}

?>
<h1>
    register
</h1>
<p><?= $_SESSION["error"] ?></p>
<form method="post">
    <input id="" type="text" name="name" placeholder="Nom">
    <input id="" type="email" name="email" placeholder="email">
    <input id="" type="password" name="password" placeholder="password">
    <button class="btn" type="submit">S'inscrire</button>
</form>