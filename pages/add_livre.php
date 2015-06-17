<?php
    // connexion à la base
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test_livre;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->prepare('INSERT INTO `test_livre`.`livre` (`Titre`, `Auteur`) VALUES (?, ?)');
    $req->execute(array($_POST['titre'], $_POST['auteur']));

    echo 'Le livre a bien été ajouté !';
header('Location: Ajout_Livre.php');
?>