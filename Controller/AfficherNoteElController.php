<?php
    require_once '../Models/EleveModel.php';
    require_once '../Models/MatiereModel.php';
    require_once '../Models/NoteModel.php';
    require_once '../Dbo/DbAcces.php';
    require_once '../Helper/Moyenne.php';
    require_once '../config/database.php';
    $contro = new DbAcces($conn);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(isset($_GET['num_matricule']) && isset($_GET['fil']) ){
            $matricule = $_GET['num_matricule'];
            $note=null;
            $detailNote = null;
            $fil = $_GET['fil'];
            $id = $_GET['id'];
            $trim = null;
            $unEleve = $contro->RecupererEleve($id);
            $LeMoyenne = new MoyenneEl();
            $LeMoyenneCEC = new MoyenneCec();
            $LeMoyenneDEM = new MoyenneDem();
            $LeMoyenneG3 = new MoyenneG3();
            $LeMoyenneG2 = new MoyenneG2();
            $LeMoyenneOM = new MoyenneOM();
            $LeMoyenneOB = new MoyenneOB();
            $LeMoyenneFM = new MoyenneFM();
            switch($fil) {
                
                case 'el':
                    $note = $contro->RecupererNoteMatiere($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenne->El($note);
                    }
                    break;
                case 'dem':
                    $note = $contro->RecupererNoteDEM($matricule,$trim);
                    if($note != null){
                        $moyenne = $LeMoyenneDEM->Dem($note);
                    }
                    break;
                case 'g3':
                    $note = $contro->RecupererNoteG3($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenneG3->G3($note);
                    }
                    break;
                case 'g2':
                    $note = $contro->RecupererNoteG2($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenneG2->G2($note);
                    }
                    break;
                case 'om':
                    $note = $contro->RecupererNoteOM($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenneOM->OM($note);
                    }
                    break;
                case 'cec':
                    $note = $contro->RecupererNoteCEC($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenneCEC->CEC($note);
                    }
                    break;
                case 'ob':
                    $note = $contro->RecupererNoteOB($matricule);
                    if( $note != null) {
                        $moyenne = $LeMoyenneOB->Ob($note);
                    }
                    break;
                case 'fm':
                    $note = $contro->RecupererNoteFM($matricule);
                    if($note != null){
                        $moyenne = $LeMoyenneFM->Fm($note);
                    }
                    break;
                default:
                    echo '404 NOT FOUND';
            }
            if($note != null){
                $detailNote =  $contro->RecupererNoteEleve($note->getId());
                include '../views/afficherNote.php';
            }else{
                echo '<center><strong>Cette eleve n\'a pas de note pour le moment !!! </strong></center>';
            }
            
        }
        
    };
    
    
    