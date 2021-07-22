<?php
    class Profil
    {

        private $id;
        private $number;
        private $email;
        private $password;
        private $role;
        private $created_at;
        private $updated_at;
        private $deleted_at;

        function __construct($id,$number,$email,$password,$role,$created_at,$updated_at,$deleted_at){
            $this->setid($id);
            $this->setnumber($number);
            $this->setemail($email);
            $this->setpassword($password);
            $this->setrole($role);
            $this->setcreated_at($created_at);
        }

        public function getid(){
            return $this->id;
        }

        public function getnumber(){
            return $this->number;
        }

        public function getemail(){
            return $this->email;
        }

        public function getpassword(){
            return $this->password;
        }

        public function getrole(){
            return $this->role;
        }

        public function getcreated_at(){
            return $this->created_at;
        }

        public function getupdated_at(){
            return $this->updated_at;
        }

        public function getdeleted_at(){
            return $this->deleted_at;
        }

        public function setid($id){
            $this->id = $id;
        }

        public function setnumber($number){
            $this->number = $number;
        }

        public function setemail($email){
            $this->email = $email;
        }

        public function setpassword($password){
            $this->password = $password;
        }

        public function setrole($role){
            $this->role = $role;
        }

        public function setcreated_at($created_at){
            $this->created_at = $created_at;
        }

        public function setupdated_at($updated_at){
            $this->updated_at = $updated_at;
        }

        public function setdeleted_at($deleted_at){
            $this->deleted_at = $deleted_at;
        }
    }
?>