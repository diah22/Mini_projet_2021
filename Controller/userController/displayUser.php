<?php
    include("../../Models/Transaction/connexion.php");
    include("../../Models/Transaction/userTransaction.php");
    include("../../Models/Entity/user.php");

    $connexion = new Connexion();
    $bdd= $connexion->connectToDb();
    $user= new User();
    $usertrans= new UserTransaction($bdd);

    $users= $usertrans->getAllUser();

    while($user=$users->fetch()){
        
    }
?>