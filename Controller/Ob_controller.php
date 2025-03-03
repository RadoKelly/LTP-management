<?php
    require_once '../Helper/Moyenne.php';
    require_once '../Models/EleveModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../Models/ObModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';


    if (isset($_POST['num']) && isset($_POST['malagasy']) && isset($_POST['francais']) && isset($_POST['anglais']) && isset($_POST['math']) &&
        isset($_POST['sphys']) && isset($_POST['ots']) && isset($_POST['techno']) && isset($_POST['rdm']) &&
        isset($_POST['efab']) && isset($_POST['dess']) && isset($_POST['tp']) && isset($_POST['geod']) && 
        isset($_POST['ie']) && isset($_POST['eps']) && isset($_POST['trimestre']))  {
        
        $matiere = new ObModel(null,$_POST['num'],$_POST['malagasy'], $_POST['francais'], $_POST['anglais'], $_POST['math'],
         $_POST['sphys'], $_POST['ots'], $_POST['techno'], $_POST['rdm'],
         $_POST['efab'], $_POST['dess'], $_POST['tp'], $_POST['geod'],
         $_POST['ie'], $_POST['eps'], $_POST['trimestre']);
        $numMatricule = $_POST['num'];
        $trimestre = $_POST['trimestre'];
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        $verificationMatiere = $contro->InsertionNoteOB($matiere);
        $ob = $contro->RecupererNoteOBTrim($numMatricule,$trimestre);
        // $sphy = $el->getSphys();
        if ($verificationMatiere == true) {
            //header("Location:ListeController.php");
            $id_filiere = $ob->getId();
        
        $rang = 1;
        $LeMoyenne = new MoyenneOb();
        $moyenne = $LeMoyenne->ob($ob);
        $note = new NoteModel(null,$_POST['id'],$id_filiere, null,$moyenne[1], $moyenne[0], $rang,
        null, null, null, $_POST['trimestre'],null );
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