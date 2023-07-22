<?php
namespace App\Controllers;

use App\Models\ProductsModel;

class ProductsController extends Controller
{
    public function index()
    {
        //Ici on appelle les données de la table "products"
        $model = new ProductsModel();

        //Ici on stock tous les produits venant de la BDD dans la variable $products
        $products = $model->findAll();
        $this->render("products/index", compact('products'));
    }

    public function more($id)
    {
        $model = new ProductsModel();
        $product = $model->findById($id);

        $this->render("products/more", compact('product'));
    }

    public function add()
    {
        //Ici, l'utilisateur est bien connecté, il peut créer un post
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

                $productname = strip_tags($_POST["name_products"]);
                $shortdescription = strip_tags($_POST["short_description"]);
                $longdescription = strip_tags($_POST["long_description"]);
                $categoriename = strip_tags($_POST["categorie_name"]);
                $artistename = strip_tags($_POST["artist_name"]);

                $model = new ProductsModel();
                $model->setNameProducts($productname)
                    ->setPriceProducts($_POST["price_products"])
                    ->setShortDescription($shortdescription)
                    ->setLongDescription($longdescription)
                    ->setCategorieName($categoriename)
                    ->setArtisteName($artistename);

                $model->create($model);

                //On redirige avec un message
                $_SESSION["message"] = "Votre article a bien été enregistré";
                header("Location: /products");
                exit();

            }
            //Ici, j'ai des erreurs, donc je crée ma session avec erreur
            $_SESSION["error"] = "Merci de remplir tous les champs";
        }
        $this->render("products/add");
    }
    public function modify($id)
    {

        $model = new ProductsModel();
        $product = $model->findById($id);

        if(!empty($_POST)) {
            $error = [];

            foreach ($_POST as $field => $value) {
                if (empty($value)) {
                    $error[] = "Merci de remplir le champ $field";
                }
            }
            if (empty($error))
            {
                $productname = strip_tags($_POST["name_products"]);
                $shortdescription = strip_tags($_POST["short_description"]);
                $longdescription = strip_tags($_POST["long_description"]);
                $categoriename = strip_tags($_POST["categorie_name"]);
                $artistename = strip_tags($_POST["artist_name"]);

                $model->setNameProducts($productname)
                    ->setPriceProducts($_POST["price_products"])
                    ->setShortDescription($shortdescription)
                    ->setLongDescription($longdescription)
                    ->setCategorieName($categoriename)
                    ->setArtisteName($artistename);

                $model->update($id);
                header("Location: /products");
            }

                 //Ici, j'ai des erreurs, donc je crée ma session avec erreur
                $_SESSION["error"] = "Merci de remplir tous les champs";
        }


        $this->render("products/modify", compact("product"));
    }
    public function delete($id)
    {
        $model = new ProductsModel();
        $product = $model->findById($id);

        if (!$product)
        {
            header("Location: /products");
            exit();
        }

        $productdeleted = new ProductsModel();
        $productdeleted->delete($product->id);
        $_SESSION["message"] = "Votre article a été supprimé.";
        header("Location: /products");
    }

}


