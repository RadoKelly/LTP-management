<?php
    require_once '../Models/EleveModel.php';
    require_once '../Dbo/DbAcces.php';
    require_once '../config/database.php';
    require_once '../Helper/EleveEtNote.php';

    if (isset($_POST['inscription']) && isset($_POST['filiere']) && isset($_POST['niveau']) && isset($_POST['trimestre'])) {
        $isValide = true;
        $inscription = $_POST['inscription'];
        $filiere = $_POST['filiere'];
        $niveau = $_POST['niveau'];
        $trimestre = $_POST['trimestre'];
        $contro = new DbAcces($conn);
        $listeEleves = $contro->ListeEleveClasse($inscription,$filiere,$niveau,$trimestre);
        $listeNote = [];
        $listeEleveNote = [];
        $i = 0;
        foreach($listeEleves as $eleve){
            $i++;
            $noteEleve = $contro->RecupererNoteEleveFin($eleve->getId());
            if($noteEleve != null){
                array_push($listeNote, $noteEleve);
                $EleveNote = new EleveEtNote();
                $EleveNote->eleveModel = $eleve;
                $EleveNote->noteModel = $noteEleve;
                $listeEleveNote[] = $EleveNote;

                if($EleveNote->eleveModel != null){
                    echo $EleveNote->eleveModel->getId();
                }
                else{
                    echo 'null';
                }
            }else{
                $isValide = false;
                echo 'note Eleve du dbAcces null N° '.$i;
                
            }
        }
        if($isValide){
            $moyenClasse = 0;
            usort($listeNote,function($a, $b){
                return $a->getMoyenne() <=> $b->getMoyenne();
            });
            $tailleListeNote = count($listeNote);
            $tailleNote = $tailleListeNote;
            $test = true;
            foreach($listeNote as $UpdateNote){
                $test = false;
                $contro->ModifierEleveNote($UpdateNote->getId(),$tailleNote);
                foreach($listeEleveNote as $elNote){
                    if($elNote->noteModel->getId()== $UpdateNote->getId()){
                        $elNote->noteModel->setRang($tailleNote);
                        break;
                    }
                }
                $tailleNote--;
                $test = true;
                $moyenClasse += $UpdateNote->getMoyenne();
            }

            foreach($listeEleves as $UpdateNote){
                $moyenCl = $moyenClasse/$tailleListeNote;
                $contro->UpdateMoyenClasse($UpdateNote->getId(),$moyenCl);
            }
            if($test){

                echo 'update succes';
                if($tailleListeNote > 0){
                    $moyenClasse = $moyenClasse / $tailleListeNote;
                    $moyenClasse = round($moyenClasse,2);
                }else{
                    echo 'autre page';
                }
                
            }else{
                echo 'une erreur sur update';
            }
            include '../views/afficherResultat.php';
        }
        
    }
