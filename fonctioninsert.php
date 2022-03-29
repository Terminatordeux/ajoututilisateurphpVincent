<?php
    //requête ajouter un produit :
    function insertUtilisateur($bdd,$nom, $prenom,$mail,$mdp){
        try{

            $req = $bdd->prepare('INSERT INTO utilisateurs(nom_util, prenom_util,mail_util,mdp_util) 
            VALUES(:nom_utilisateur, :prenom_utilisateur, :mail_utilisateur, :mdp_utilisateur)');
            $req->execute(array(
                'nom_utilisateur' => $nom,
                'prenom_utilisateur' =>$prenom,
                'mail_utilisateur' =>$mail,
                'mdp_utilisateur' => $mdp
                ));
        }
        catch(Exception $e)
        {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
        }
    }
?>