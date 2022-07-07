<?php
    include './env.php';
    //connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname='.$dbName.'', $id, $mdp, 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>