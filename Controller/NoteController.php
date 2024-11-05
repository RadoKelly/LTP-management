<?php
    require_once '../Models/EleveModel.php';
    require_once '../Dbo/DbAcces.php';
    require_once '../config/database.php';
    $contro = new DbAcces($conn);
    $lesEleves = $contro->ListeEleve();
    $unEleve = null;
    $id = null;
    $lienCss = null;
    
    include '../formulaireNoteEL.php';