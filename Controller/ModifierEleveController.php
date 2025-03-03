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
    include '../modifierFormulaire.php';
};


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $numero = $_POST['numero'];
    $matricule = $_POST['matricule'];
    $sexe = $_POST['sexe'];
    $secteur = $_POST['secteur'];
    $filiere = $_POST['filiere'];
    $niveau = $_POST['niveau'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $inscription = $_POST['inscription'];
    $observation = $_POST['observation'];

    // Créer une instance d'EleveModel
    $eleve = new EleveModel($id, $nom, $prenom, $date_naissance, $numero, $matricule, $sexe, $secteur, $filiere, $niveau, $contact, $address, $inscription, $observation);

    // Appeler la méthode pour modifier l'élève
    if ($db->ModifierEleve($eleve)) {
        header("Location:../../ListeController.php");
    } else {
        echo "Échec de la modification de l'élève.";
    }
}
?>
