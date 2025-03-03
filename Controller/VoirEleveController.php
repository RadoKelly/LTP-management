<?php
require_once '../Models/EleveModel.php';
require_once '../Dbo/DbAcces.php'; // Assurez-vous d'importer votre classe DbAcces
require_once '../config/database.php';

// Créer une instance de DbAcces
$db = new DbAcces($conn);
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $eleve = $db->RecupererEleve($id);
    }
    include '../views/voirEleve.php';
};


?>
