<?php
require_once '../Models/NoteModel.php';
require_once '../Dbo/DbAcces.php'; // Assurez-vous d'importer votre classe DbAcces
require_once '../config/database.php';

$id = null;
$recup = null;

// Créer une instance de DbAcces
$db = new DbAcces($conn);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['idEleve']) && isset($_POST['absence']) && isset($_POST['retard'])){
        $id = $_POST['idEleve'];
        $abs = $_POST['absence'];
        $rtd = $_POST['retard'];
        $isUpdate = $db->UpdateNote($id,$abs,$rtd);
        if($isUpdate){
            header("Location:ListeController.php");
        }else{
            echo "Erreur, note non modifié";
        }
    }
};


if ($id !== null) {
    $db = new DbAcces($conn);
    $detailNote =  $contro->RecupererNoteEleve($id);
    echo $id;
}


?>
