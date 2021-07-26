<?php
    require_once('..\services\db\db.php');

    class OperationsController
    {

        private $pdo;

        function __construct()
        {
            $db = new Db();
            $this->pdo = $db->getPdo();
        }

         public function add($transaction, $transaction_type, $amount, $id){
             $PDO = $this->pdo;
             $req = $PDO->prepare("INSERT INTO transaction (type,subtype,amount) VALUES (:type,:subtype,:amount)");
             $req->execute([
                ":type" => $transaction,
                ":subtype" => $transaction_type,
                ":amount" => $amount,
             ]);
             $req = $PDO->prepare("SELECT * FROM transaction ORDER BY id DESC LIMIT 1");
             $req->execute();
             $res = $req->fetch(PDO::FETCH_OBJ);
             $req = $PDO->prepare("INSERT INTO operation (id_profil,id_transaction) VALUES (:id_profil,:id_transaction)");
             $req->execute([
                ":id_profil" => $id,
                ":id_transaction" => $res->id,
             ]);
             $req->closeCursor();
             header('location:../../transaction.php?d='.$id.'');
         }

         public function index(){
             $date = new DateTime();
             $PDO = $this->pdo;
             $req = $PDO->prepare("SELECT * FROM transaction ORDER BY created_at DESC");
             $req->execute();
             $res = $req->fetchAll(PDO::FETCH_OBJ);
             $req->closeCursor();
             $data = json_encode($res);
             header('location:../../enregistrement.php?d='.$data.'');
         }
    }
?>