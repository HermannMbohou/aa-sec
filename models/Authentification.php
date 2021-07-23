<?php

    require_once('..\controllers\AuthentificationController.php');

    class Authentification
    {
        private $username;
        private $email;
        private $password;
        private $password_repeat;
        private $number;

        function __construct($username,$email,$password,$number){
            $this->setusername($username);
            $this->setemail($email);
            $this->setpassword($password);
            $this->setnumber($number);
        }

        function getusername(){
            return $this->username;
        }

        function getemail(){
            return $this->email;
        }

        function getpassword(){
            return $this->password;
        }

        function getnumber(){
            return $this->number;
        }

        function setusername($username){
            $this->username = $username;
        }

        function setemail($email){
            $this->email = $email;
        }

        function setnumber($number){
            $this->number = $number;
        }

        function setpassword($password){
            $this->password = $password;
        }
        
    }
?>