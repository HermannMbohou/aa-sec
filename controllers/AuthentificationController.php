<?php
    require_once('..\..\services\db\db.php');

    class AuthentificationController
    {

        private $pdo;

        function __construct(){
            $db = new Db();
            $this->pdo = $db->getPdo();
        }

         public function signup($name, $email, $password, $number){
             $PDO = $this->pdo;
             $req = $PDO->prepare("INSERT INTO profil (name,email,number,password) VALUES (:name,:email,:number,:password)");
             $res = $req->execute([
                ":name" => $name,
                ":email" => $email,
                ":number" => $number,
                ":password" => $password
             ]);
             $req->closeCursor();
             header('location:../../index.php');
            //  if($res===true)
            //  {
            //     header('location:../../index.php');
            //  }else{
            //     header('location:../../index.php');
            //  }
            //verifier si l'utilisateur est deja present dans la base de donnees
            //si oui retourner une erreur stipulant que l'utilisateur existe deja dans la bd
            //si non enregistrer le nouvel utilisateur
         }
         
         public function signin($phone, $password){
            $PDO = $this->pdo;
            $req = $PDO->prepare("SELECT * FROM profil WHERE number=:phone AND password=:password LIMIT 1");
            $req->execute([
               ":phone" => $phone,
               ":password" => $password
            ]);
            $res = $req->fetch(PDO::FETCH_OBJ);
            $req->closeCursor();
            if(!empty($res)){                
                echo json_encode($res);
            }else{
                echo json_encode("error");
            }
            //aller verifier si l'utilisateur est present dans la base de donnees
            //si oui retourner le dashbord de l'utilisateur loge
            //si non retourner une erreur stipulant que l'utilisateur n'existe pas en base de donnees
         }
    }
?>