<?php
    // require_once '../Models/UtilisateurModel.php';
    // require_once '../config/database.php';
    // require_once '../Dbo/DbAcces.php';

    // if(isset($_POST['identifiant']) && isset($_POST['mdp'])){
    //     $user = new UtilisateurModel($_POST['identifiant'],$_POST['mdp']);
    //     $acces = new DbAcces($conn);
    //     $verifUser = $acces->VerifierUtilisateur($user);
    //     if($verifUser){
    //         header('Location:ListeController.php');
    //         exit();
    //     }else{
    //         echo "Identifiant ou mot de passe incorrect.";
    //     }
    // }

    require_once '../Models/UtilisateurModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';

    session_start(); // Démarre la session

    if(isset($_POST['identifiant']) && isset($_POST['mdp'])){
        $user = new UtilisateurModel($_POST['identifiant'], $_POST['mdp']);
        $acces = new DbAcces($conn);
        $verifUser = $acces->VerifierUtilisateur($user);

        if($verifUser){
            // L'utilisateur est authentifié, stockez l'utilisateur dans la session
            $_SESSION['user'] = $user; // Vous pouvez stocker plus d'informations si nécessaire
            header('Location: ListeController.php');
            exit();
        } else {
            echo "Identifiant ou mot de passe incorrect.";
        }
    }
?>