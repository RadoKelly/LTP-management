<?php
    require_once '../Models/EleveModel.php';
    require_once '../Dbo/DbAcces.php';
    require_once '../config/database.php';
    $contro = new DbAcces($conn);
    $lesEleves = $contro->ListeEleve();
    $unEleve = null;
    $id = $_GET['id'];
    $unEleve = $contro->RecupererEleve($id);
    $lienCss = "../../public/css/formulaire.css";

    $db = new DbAcces($conn);
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $eleve = $db->RecupererNoteEleveFin($id);
    }
}

    switch($unEleve->getFiliere()){
        case 'dem':
            include '../views/formulaireNoteDEM.php';
            break;
        case 'el':
            include '../formulaireNoteEL.php';
            break;
        case 'g3':
            include '../views/formulaireNoteG3.php';
            break;
        case 'g2':
            include '../views/formulaireNoteG2.php';
            break;
        case 'om':
            include '../views/formulaireNoteOM.php';
            break;
        case 'cec':
            include '../views/formulaireNoteCEC.php';
            break;
        case 'ob':
            include '../views/formulaireNoteOB.php';
            break;
        case 'fm':
            include '../views/formulaireNoteFM.php';
            break;

    }
