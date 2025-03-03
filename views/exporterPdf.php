<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;

// Vérifier si le contenu a été envoyé
if (!isset($_POST['content']) || empty($_POST['content'])) {
    die("Aucun contenu HTML n'a été reçu.");
}

$html = $_POST['content'];

// Afficher temporairement le contenu pour vérifier
echo $html;
exit;

// Récupérer le contenu HTML via POST
$html = $_POST['content'];

// Initialiser Dompdf
$dompdf = new Dompdf();

// Charger le contenu HTML dans Dompdf
$dompdf->loadHtml($html);

// Configurer la taille de la page et l'orientation (facultatif)
$dompdf->setPaper('A4', 'portrait');

// Rendre le PDF
$dompdf->render();

// Envoyer le PDF généré au navigateur
$dompdf->stream("bulletin_trimestriel.pdf", ["Attachment" => true]);
?>
