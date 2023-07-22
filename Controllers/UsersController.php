<?php
namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends Controller
{
    public function register()
    {
        $error = false;

        unset($_SESSION["error"]);

        //On contrôle que le formulaire n'est pas vide
        if(!empty($_POST)){
            foreach ($_POST as $field => $value){
                if(empty($value)){
                    echo "Merci de remplir tous le $field";
                    $error = true;
                    break;
                }
            }

            // On vérifie que l'email en est un
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !$error){
                echo "L'adress email est incorrecte.";
                $error = true;
            }

            /////////////////////////////////////////////
            /// ICI ON FAIT LES CONTRÔLES DE SECURITE ///
            /////////////////////////////////////////////

            //Vérification de la longueur du champs "name"
            if (strlen($_POST["name"]) < 2 || strlen($_POST["name"]) > 16) {
                $_SESSION["error"] = "Le name doit contenir entre 2 et 16 caractères";
                $error = true;
            }


            // Vérification s'il y a des espaces dans le "name"
            if (str_contains($_POST["name"], ' ') !== false) {
                $_SESSION["error"] = "Le name ne doit pas contenir d'espaces";
                $error = true;
            }


            // Vérifications pour le mot de passe
            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/', $_POST["password"]) && !$error) {
                $_SESSION["error"] = "Le mot de passe ne respecte pas les critères de validation. </br> ";
                $error = true;
            }


            //Ici, on a des données valides
            if (!$error){


                //On nettoie les données
                $email = strip_tags($_POST["email"]);
                $name = strip_tags($_POST["name"]);

                //On chiffre le mot de passe
                $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

                //On stocke les données
                //On instancie le modèle concerné
                $user = new UsersModel();

                $user->setEmail($email)
                    ->setName($name)
                    ->setPassword($password);

                $user->create($user);
                $_SESSION["message"] = "Votre compte a été créé avec succès.";
                header("Location: /users/login");


            }
        }

        $this->render('users/register');
    }

    public function login()
    {

        $error = false;

        //On contrôle que le formulaire n'est pas vide
        if(!empty($_POST)){
            foreach ($_POST as $field => $value){
                if(empty($value)){
                    echo "Merci de remplir tous le $field";
                    $error = true;
                    break;
                }
            }

            // On vérifie que l'email en est un
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !$error){
                echo "L'adress email est incorrecte.";
                $error = true;
            }

            /////////////////////////////////////////////
            /// ICI ON FAIT LES CONTRÔLES DE SECURITE ///
            /////////////////////////////////////////////

            // Formule "REGEX"

            $userModel = new UsersModel();
            $user = $userModel->findOneByMail($_POST["email"]);


            //Ici, on a pas d'utilisateur
            if (!$user){
                echo "Informations de connexion incorrectes";
            }

            //Ici on a un user qui peut se connecter
            $user = $userModel->hydrate($user);
            if(password_verify($_POST["password"], $user->getPassword())){
                $_SESSION["user"] = [
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "email" => $user->getEmail(),
                    "isAdmin"=> $user->getIsAdmin(),
                ];
                header("Location: /products");
                exit();
            }

        }
        $this->render('users/login');
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("Location: /"); //Permet de rediriger sur la page d'où venait l'utilisateur
        exit();
    }
    public function profil()
    {
        $this->render("users/profil");
    }
}
