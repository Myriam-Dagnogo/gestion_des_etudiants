<?php
include "db.php";

if (isset($_POST ["envoyer"])){
var_dump($_POST);
    if(!empty($_POST['nom']) AND !empty($_POST['prenoms']) AND !empty($_POST['mdp'])){  
        function validate($data){
           $data = trim($data);
            $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
       }
       
        $nom= validate($_POST['nom']);
        $prenom=validate($_POST['prenoms']);
        $pass=validate($_POST['mdp']);
        
    
        $insert= $conn->prepare( "INSERT INTO presence(nom, prenoms, mdp) VALUES(?,?,?)");
        $insert->execute(array($nom, $prenom, $pass));
        header ("Location:index.php");
        
    }
    
}
?>