<?php
namespace App\Controllers;

use App\Models\ProductsModel;

class MainController extends Controller
{
    public function index()
    {

        //Ici on appelle les données de la table "products"
        $model = new ProductsModel();

        //Ici on stock tous les produits venant de la BDD dans la variable $products
        $products = $model->findAll();

        $this->render('main/index', compact('products'));
    }

    public function error()
    {
        $this->render("main/404");
    }

}
