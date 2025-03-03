<?php
    require_once '../Helper/Moyenne.php';
    require_once '../Models/EleveModel.php';
    require_once '../Models/MatiereModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';


    if (isset($_POST['num']) && isset($_POST['malagasy']) && isset($_POST['francais']) && isset($_POST['anglais']) && isset($_POST['math']) &&
        isset($_POST['sphys']) && isset($_POST['elec']) && isset($_POST['techno']) && isset($_POST['equipement']) &&
        isset($_POST['schauto']) && isset($_POST['dess']) && isset($_POST['inst']) && isset($_POST['esmes']) && 
        isset($_POST['eps']) && isset($_POST['ee'])) {
        
        $matiere = new MatiereModel(null,$_POST['num'],$_POST['malagasy'], $_POST['francais'], $_POST['anglais'], $_POST['math'],
         $_POST['sphys'], $_POST['elec'], $_POST['techno'], $_POST['equipement'],$_POST['schauto']
         , $_POST['dess'], $_POST['inst'], $_POST['esmes'], $_POST['eps'], $_POST['ee'], $_POST['trimestre']);
        $numMatricule = $_POST['num'];
        $trimestre = $_POST['trimestre'];
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        $verificationMatiere = $contro->InsertionNoteMatiere($matiere);
        $el = $contro->RecupererNoteMatiereTrim($numMatricule,$trimestre);
        $sphy = $el->getSphys();
        if ($verificationMatiere == true && $el != null) {
            //header("Location:ListeController.php");
            $id_filiere = $el->getId();
        
        $rang = 1;
        $LeMoyenne = new MoyenneEl();
        $moyenne = $LeMoyenne->El($el);
        $note = new NoteModel(null,$_POST['id'],$id_filiere, null,$moyenne[1], $moyenne[0], $rang,
         null, null, null, $_POST['trimestre'], null);
         $verifNote = $contro->InsertionNote($note);
            if($verifNote){
                echo 'succes moyenne : '.$moyenne[0];
                echo 'succes total note : '.$moyenne[1];
            }
            else{
                echo 'erreur sur note';
            }
        } else {
            
            echo 'un erreur sur matiere';
        }
        

    }
?>