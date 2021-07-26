<?php

    require_once('../controllers/OperationsController.php');

    if(!empty($_POST))
    {
        extract($_POST);
        $transaction = strip_tags($type);
        $transaction_type = strip_tags($subtype);
        $amount = strip_tags($amount);
        $oparationsController = new OperationsController();
        $oparationsController->add($transaction, $transaction_type, $amount, $_GET['d']);
    }

    if(!empty($_GET))
    {
        extract($_GET);
        $d = strip_tags($d);
        if($d==="list")
        {
            $oparationsController = new OperationsController();
            $oparationsController->index();
        }
    }

?>