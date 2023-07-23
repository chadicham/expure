<?php
namespace App\Controllers;

use App\Models\ArtistesModel;
use App\Models\ProductsModel;

class ArtistesController extends Controller
{
    public function index()
    {
        //Ici on appelle les données de la table "products"
        $model = new ArtistesModel();

        //Ici on stock tous les produits venant de la BDD dans la variable $products
        $artistes = $model->findAll();
        $this->render("artistes/index", compact('artistes'));
    }



    public function add()
    {
        //Ici, l'utilisateur est admin
        //indique si l'utilisateur est administrateur ou non.
        $isAdmin = $_SESSION["user"]["isAdmin"];

        // Vérifie si l'utilisateur n'est pas administrateur (isAdmin est faux)
        if (!$isAdmin) {
            // Effectuez la redirection vers "/products"
            header("Location: /");
            exit;
        }
        //On peut maintenant traiter le formulaire
        if(!empty($_POST)) {
            $error = [];

            foreach ($_POST as $field => $value) {
                if (empty($value)) {
                    $error[] = "Merci de remplir le champ $field";
                }
            }

            //insérer un conrtole pour longueur de caractère if prix un INT ?

            if (empty($error)) {

                $description_artiste = strip_tags($_POST["description_artiste"]);
                $name_artiste = strip_tags($_POST["name_artiste"]);
                $categorie = strip_tags($_POST["categorie"]);

                $model = new ArtistesModel();
                $model->setNameArtiste($name_artiste)
                    ->setDescriptionArtiste($description_artiste)
                    ->setCategorie($categorie);


                $model->create($model);

                //On redirige avec un message
                $_SESSION["message"] = "Votre artiste a bien été enregistré";
                header("Location: /artistes");
                exit();

            }
            //Ici, j'ai des erreurs, donc je crée ma session avec erreur
            $_SESSION["error"] = "Merci de remplir tous les champs";
        }
        $this->render("artistes/add");
    }

    public function more($id)
    {
        $model = new ArtistesModel();
        $artiste = $model->findById($id);

        $this->render("artistes/more", compact('artiste'));
    }

    public function modify($id)
    {
        //Ici, l'utilisateur est admin
        //indique si l'utilisateur est administrateur ou non.
        $isAdmin = $_SESSION["user"]["isAdmin"];

        // Vérifie si l'utilisateur n'est pas administrateur (isAdmin est faux)
        if (!$isAdmin) {
            // Effectuez la redirection vers "/products"
            header("Location: /");
            exit;
        }

        $model = new ArtistesModel();
        $artiste = $model->findById($id);

        if(!empty($_POST)) {
            $error = [];

            foreach ($_POST as $field => $value) {
                if (empty($value)) {
                    $error[] = "Merci de remplir le champ $field";
                }
            }
            if (empty($error))
            {

                $description_artiste = strip_tags($_POST["description_artiste"]);
                $name_artiste = strip_tags($_POST["name_artiste"]);
                $categorie = strip_tags($_POST["categorie"]);

                $model->setNameArtiste($name_artiste)
                    ->setDescriptionArtiste($description_artiste)
                    ->setCategorie($categorie);



                $model->update($id);
                header("Location: /artistes");
            }

            //Ici, j'ai des erreurs, donc je crée ma session avec erreur
            $_SESSION["error"] = "Merci de remplir tous les champs";
        }


        $this->render("artistes/modify", compact("artiste"));
    }

    public function delete($id)
    {
        $model = new ArtistesModel();
        $artiste = $model->findById($id);

        if (!$artiste)
        {
            header("Location: /artistes");
            exit();
        }

        $artistedeleted = new ArtistesModel();
        $artistedeleted->delete($artiste->id);
        $_SESSION["message"] = "Votre artiste a été supprimé.";
        header("Location: /artistes");
    }


}


