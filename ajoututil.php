<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
    <h3>Ajouter un utilisateur</h3>
    <form action="" method="post">
        <p>Saisir le nom de l'utilisateur</p>
        <input type="text" name="nom_utilisateur">
        <p>Saisir le prénom de l'utilisateur</p>
        <input type="text" name="prenom_utilisateur">
        <p>Saisir le mail de l'utilisateur'</p>
        <input type="text" name="mail_utilisateur">
        <p>Saisir le mot de passe de l'utilisateur</p>
        <input type="password" name="mdp_utilisateur" >
                <p><input type="submit" value="Ajouter"></p>
    </form>
    
    <?php
        //fichier de connexion à la BDD
        include 'connectbdd.php';
        //function requête SQL
        include 'fonctioninsert.php';
        if(isset($_POST['nom_utilisateur'])AND isset($_POST['prenom_utilisateur']) AND isset($_POST['mail_utilisateur']) AND isset($_POST['mdp_utilisateur']) AND
        $_POST['nom_utilisateur'] != "" AND $_POST['prenom_utilisateur'] !="" AND $_POST['mail_utilisateur'] !="" AND $_POST['mdp_utilisateur'] !=""){
            $nom = $_POST['nom_utilisateur'];
            $prenom = $_POST['prenom_utilisateur'];
            $mail = $_POST['mail_utilisateur'];
            $mdp = $_POST['mdp_utilisateur'];
            insertUtilisateur($bdd,$nom, $prenom,$mail,$mdp);
            echo "$nom à été ajouté en BDD";
            
        }
        else{
            echo 'Veuillez remplir les champs du  formulaire';
        }
    ?>
</body>
</html>