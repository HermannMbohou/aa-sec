<?php

    require_once('../../controllers/AuthentificationController.php');

    if(!empty($_POST))
    {
        extract($_POST);
        $name = strip_tags($name);
        $number = strip_tags($number);
        $password = strip_tags($password);
        $email = strip_tags($email);

        $authController = new AuthentificationController();

        if(isset($email))
        {
            $authController->signup($name, $email, $password, $number);
        }
    }
?>