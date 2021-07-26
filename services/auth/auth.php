<?php

    require_once('../../controllers/AuthentificationController.php');

    if(!empty($_POST))
    {
        extract($_POST);
        if(!empty($email))
        {
            $name = strip_tags($name);
            $number = strip_tags($number);
            $password = strip_tags($password);
            $email = strip_tags($email);
            $authController = new AuthentificationController();
            $authController->signup($name, $email, $password, $number);
        }else{
            $number = strip_tags($number);
            $password = strip_tags($password);
            $authController = new AuthentificationController();
            $authController->signin($number, $password);
        }
    }
    if(!empty($_GET))
    {
        header('location: /../../../index.php');
    }
?>