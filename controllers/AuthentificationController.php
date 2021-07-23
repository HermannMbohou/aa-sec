<?php
    require_once('../services/db/db.php');

    if(!empty($_POST))
    {

        extract($_POST);
        $name = strip_tags($name);
        $phone = strip_tags($phone);
        $email = strip_tags($email);
        $password = strip_tags($password);

    } else {
        echo "post vide";
    }

    class AuthentificationController
    {
         public function signup($name, $email, $password, $number){
             echo "reached";
            //verifier si l'utilisateur est deja present dans la base de donnees
            //si oui retourner une erreur stipulant que l'utilisateur existe deja dans la bd
            //si non enregistrer le nouvel utilisateur
         }
         
         public function signin($username, $password){
            //aller verifier si l'utilisateur est present dans la base de donnees
            //si oui retourner le dashbord de l'utilisateur loge
            //si non retourner une erreur stipulant que l'utilisateur n'existe pas en base de donnees
         }
    }
?>