<?php
    class User{
        /*---------------------------------
                    ATTRIBUTS
        ---------------------------------*/
        private $id;
        private $name;
        private $firstName;
        private $idRole = 2;
        private $mail;
        private $mdp;
        /*---------------------------------
                    CONSTRUCTEUR
        ---------------------------------*/
        public function __construct(){}
        /*---------------------------------
                GETTER AND SETTER
        ---------------------------------*/
        //Getters
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function getIdRole(){
            return $this->idRole;
        }
        public function getMail(){
            return $this->mail;
        }
        public function getMdp(){
            return $this->mdp;
        }
        //Setters
        public function setId($id){
            $this->id = $id;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function setIdRole($id){
            $this->idRole = $id;
        }
        public function setMail($mail){
            $this->mail = $mail;
        }
        public function setMdp($mdp){
            $this->mdp = $mdp;
        }
    }
?>