<?php
    include './model/user.php';
    class UserMgr extends User{
        public function __construct(){}

        public function hashMdp(){
            $options = [
                'cost' => 12,
            ];
            $this->setMdp(password_hash($this->getMdp(), PASSWORD_DEFAULT, $options));
        }
        public function showName():string{
            return strtoupper($this->getName()); 
        }
        public function getUser($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM user INNER JOIN role 
                WHERE user.id_role = role.id_role');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        public function getUserArray($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM user INNER JOIN role 
                WHERE user.id_role = role.id_role');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        //version marqueur ?
        public function addUser($bdd):void{
            try{
                $req = $bdd->prepare("INSERT INTO user(name_user, first_name_user, id_role) 
                VALUES(?, ?, ?)");
                $req->execute(array(
                    $this->getName(),
                    $this->getFirstName(),
                    $this->getIdRole(),
                ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        //version tableau associatif
        public function addUser2($bdd):void{
            try{
                $req = $bdd->prepare("INSERT INTO user(name_user, first_name_user, id_role) 
                VALUES(:name_user, :first_name_user, :id_role)");
                $req->execute(array(
                    'name_user'=>$this->getName(),
                    'first_name_user'=>$this->getFirstName(),
                    'id_role'=>$this->getIdRole(),
                ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>