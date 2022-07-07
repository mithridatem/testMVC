<?php
    /*---------------------------------
                IMPORTS
    ---------------------------------*/
    include './manager/userManager.php';
    include './utils/connectBdd.php';
    include './view/formAddUser.php';
    //instance du manager
    $userManager = new UserMgr();
    /*---------------------------------
                LOGIQUE
    ---------------------------------*/
    if(isset($_POST['add'])){
        if(!empty($_POST['name']) AND !empty($_POST['first_name'])){
            $userManager->setName($_POST['name']);
            $userManager->setFirstName($_POST['first_name']);
            $userManager->addUser($bdd);
            echo $_POST['name']." a été ajouté à la BDD.";
        }
        else{
            echo "Veuillez compléter tous les champs de formulaires";
        }
    }
    else{
        echo "Veuillez remplir les champs de formulaires";
    }
?>