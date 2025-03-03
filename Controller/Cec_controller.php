<?php
    require_once '../Helper/Moyenne.php';
    require_once '../Models/EleveModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../Models/MatiereModel.php';
    require_once '../Models/CecModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';


    if (isset($_POST['num']) && isset($_POST['malagasy']) && isset($_POST['francais']) && isset($_POST['anglais']) && isset($_POST['math']) &&
        isset($_POST['rdm']) && isset($_POST['sphys']) && isset($_POST['techno']) && isset($_POST['hydrau']) &&
        isset($_POST['topo']) && isset($_POST['dess']) && isset($_POST['tp']) && isset($_POST['morex']) && 
        isset($_POST['eps']) && isset($_POST['ee']) && isset($_POST['trimestre'])) {
        
        $matiere = new CecModel(null,$_POST['num'],$_POST['malagasy'], $_POST['francais'], $_POST['anglais'], $_POST['math'],
         $_POST['rdm'], $_POST['sphys'], $_POST['techno'], $_POST['hydrau'],$_POST['topo']
         , $_POST['dess'], $_POST['tp'], $_POST['morex'], $_POST['eps'], $_POST['ee'], $_POST['trimestre']);
        $numMatricule = $_POST['num'];
        $trimestre = $_POST['trimestre'];
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        $verificationMatiere = $contro->InsertionNoteCEC($matiere);
        $cec = $contro->RecupererNoteCECTrim($numMatricule,$trimestre);
        // $sphy = $el->getSphys();
        if ($verificationMatiere == true && $cec != null) {
            //header("Location:ListeController.php");
            $id_filiere = $cec->getId();
        
        $rang = 1;
        $LeMoyenne = new MoyenneCec();
        $moyenne = $LeMoyenne->CEC($cec);
        $note = new NoteModel(null,$_POST['id'],$id_filiere, null,$moyenne[1], $moyenne[0], $rang,
         null, null, null, $_POST['trimestre'], null );
        $verifNote = $contro->InsertionNote($note);
            if($verifNote){
                echo 'succes moyenne : '.$moyenne[0];
                echo 'succes total note : '.$moyenne[1];
            }
            else{
                echo 'erreur sur note';
            }
        }else { 
            echo 'un erreur sur matiere';
        }
        

    }
?>