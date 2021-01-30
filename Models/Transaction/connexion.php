<?php

class Connexion{
    public function connectToDb(){
        try{
            $bdd= new PDO('mysql:hostname=localhost;dbname=gestion_tache', 'root', '');
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        
        return $bdd;
    }
}
?>