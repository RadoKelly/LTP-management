<?php
    require_once '../Helper/Moyenne.php';
    require_once '../Models/EleveModel.php';
    require_once '../Models/g2Model.php';
    require_once '../Models/NoteModel.php';
    require_once '../config/database.php';
    require_once '../Dbo/DbAcces.php';
    // g2Model;


    if (isset($_POST['num']) && isset($_POST['malagasy']) && isset($_POST['francais']) && isset($_POST['anglais']) && isset($_POST['math_g']) &&
        isset($_POST['philosophie']) && isset($_POST['maths_fi']) && isset($_POST['statistiques']) && isset($_POST['compta']) &&
        isset($_POST['info']) && isset($_POST['economie']) && isset($_POST['droit_fiscal']) && isset($_POST['droit_com']) &&
        isset($_POST['droit_soc']) && isset($_POST['eps']) && isset($_POST['ee'])  && isset($_POST['trimestre'])) {
        
        $matiere = new g2Model(null,$_POST['num'],$_POST['malagasy'], $_POST['francais'], $_POST['anglais'], $_POST['math_g'],
        $_POST['philosophie'], $_POST['maths_fi'], $_POST['statistiques'], $_POST['compta'],$_POST['info'],
        $_POST['economie'], $_POST['droit_fiscal'], $_POST['droit_com'],  $_POST['droit_soc'], $_POST['eps'], $_POST['ee'] , $_POST['trimestre']);
        $numMatricule = $_POST['num'];
        $trimestre = $_POST['trimestre'];
        // Passe $conn à DbAcces
        $contro = new DbAcces($conn);
        $verificationMatiere = $contro->InsertionNoteg2($matiere);
        $g2 = $contro->RecupererNoteG2Trim($numMatricule,$trimestre);
        // $sphy = $el->getSphys();
        if ($verificationMatiere == true && $g2 != null) {
            //header("Location:ListeController.php");
            $id_filiere = $g2->getId();
        
        $rang = 1;
        $LeMoyenne = new Moyenneg2();
        $moyenne = $LeMoyenne->G2($g2);
        $note = new NoteModel(null,$_POST['id'],$id_filiere, null,$moyenne[1], $moyenne[0], $rang,null,null,null, $_POST['trimestre'],null );
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