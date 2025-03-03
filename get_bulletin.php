<?php
require_once __DIR__ . "/config/database.php";

require_once __DIR__ . "/Models/Bulletin.php"; // Corrigé

if (isset($_POST['trimestre'])) {
    $trimestre = intval($_POST['trimestre']);
    $bulletin = new Bulletin($conn);
    $detailNote = $bulletin->getDetailTrimestre($trimestre);

    if ($detailNote) {
        echo json_encode([
            "trimestre" => $trimestre,
            "nom" => "Nom Élève", // Ajoute la récupération du nom si possible
            "moyenne" => array_sum((array)$detailNote) / count((array)$detailNote), // Moyenne simple
            "classement" => "Non défini" // Ajouter un calcul de classement si nécessaire
        ]);
    } else {
        echo json_encode(["error" => "Aucune donnée trouvée"]);
    }
}

?>
