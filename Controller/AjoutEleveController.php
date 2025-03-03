<?php
    require_once '../Models/EleveModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['numero']) && isset($_POST['matricule']) && isset($_POST['sexe'])
        && isset($_POST['secteur']) && isset($_POST['filiere']) && isset($_POST['niveau']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['inscription']) && isset($_POST['observation'])) {
        
        $eleve = new EleveModel(null,$_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['numero'], $_POST['matricule'], $_POST['sexe'], $_POST['secteur'], $_POST['filiere'],$_POST['niveau'],$_POST['contact'],$_POST['address'],$_POST['inscription'],$_POST['observation']);
        
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        
        $verification = $contro->InsertionEleve($eleve);
        
        if ($verification == true) {
            header("Location:ListeController.php");
        } else {
            
            echo 'un erreur';
        }
    }
?>