<?php
    include("../../Models/Transaction/connexion.php");
    include("../../Models/Transaction/userTransaction.php");
    include("../../Models/Entity/user.php");

    $connexion = new Connexion();
    $bdd= $connexion->connectToDb();
    $user= new User();
    $usertrans= new UserTransaction($bdd);

    $username=$_POST['username'];
    $password=$_POST['password'];

    
    $users= $usertrans->getAllUser();

    while($user=$users->fetch()){
        if($username==$user['username'] && $password==$user['password']){
            switch($user['role']){
                case 'admin';
                    Header('Location:../../View/User/admin.php');
                    break;
                default:
                    Header('Location:../../index.php');
            }
            
        }
        else{
            Header('Location:../../index.php');
        }
    }
?>