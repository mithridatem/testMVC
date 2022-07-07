<?php
    include './manager/userManager.php';
    include './utils/connectBdd.php';
    $userManager = new UserMgr();
    //récupération tableau d'objet
    $liste = $userManager->getUser($bdd);
    //récupération tableau associatif
    $liste2 = $userManager->getUserArray($bdd);
    //foreach tableau d'objet
    echo "Parcours d'un tableau d'objets avec un foreach<br>";
    foreach($liste as $value){
        echo $value->name_user."<br>";
    }
    //foreach tableau associatif
    echo "Parcours d'un tableau associatif avec un foreach<br>";
    foreach($liste2 as $value2){
        echo $value2['name_user']."<br>";
    }
    //boucle for tableau d'objet
    echo "Parcour d'un tableau d'objets avec une boucle for<br>";
    for($i = 0; $i<sizeof($liste); $i++){
        echo $liste[$i]->name_user."<br>";
    }
    //boucle for tableau associatif
    echo "Parcour d'un tableau associatif avec une boucle for<br>";
    for($i = 0; $i<sizeof($liste2); $i++){
        echo $liste2[$i]['name_user']."<br>";
    }
    //boucle while tableau d'objet
    echo "Parcour d'un tableau d'objets avec une boucle while<br>";
    $y = 0;
    while($y<sizeof($liste)){
        echo $liste[$y]->name_user."<br>";
        $y++;
    }  
    //boucle while tableau associatif
    echo "Parcour d'un tableau associatif avec une boucle while<br>";
    $z = 0;
    while($z<sizeof($liste2)){
        echo $liste2[$z]['name_user']."<br>";
        $z++;
    }
?>