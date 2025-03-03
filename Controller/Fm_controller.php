<?php
    require_once '../Helper/Moyenne.php';
    require_once '../Models/EleveModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../Models/FmModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';


    if (isset($_POST['num']) && isset($_POST['malagasy']) && isset($_POST['francais']) && isset($_POST['anglais']) && isset($_POST['math']) &&
        isset($_POST['sphys']) && isset($_POST['techno']) && isset($_POST['mrdm']) && isset($_POST['anfab']) &&
        isset($_POST['tp']) && isset($_POST['dess']) && isset($_POST['eps']) && isset($_POST['ee']) && isset($_POST['trimestre']))  {
        
        $matiere = new FmModel(null,$_POST['num'],$_POST['malagasy'], $_POST['francais'], $_POST['anglais'], $_POST['math'],
         $_POST['sphys'], $_POST['techno'], $_POST['mrdm'], $_POST['anfab'],$_POST['tp']
         , $_POST['dess'], $_POST['eps'], $_POST['ee'], $_POST['trimestre']);
        $numMatricule = $_POST['num'];
        $trimestre = $_POST['trimestre'];
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        $verificationMatiere = $contro->InsertionNoteFM($matiere);
        $dem = $contro->RecupererNoteFMTrim($numMatricule,$trimestre);
        // $sphy = $el->getSphys();
        if ($verificationMatiere == true && $dem != null) {
            //header("Location:ListeController.php");
            $id_filiere = $dem->getId();
        
        $rang = 1;
        $LeMoyenne = new MoyenneFM();
        $moyenne = $LeMoyenne->Fm($dem);
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