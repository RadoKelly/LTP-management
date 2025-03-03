<?php
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../Dbo/DbAcces.php";

class Bulletin {
    private $db;

    public function __construct($conn) { // Ajoute un paramètre pour la connexion PDO
        $this->db = new DbAcces($conn);
    }

    public function getDetailTrimestre($trimestre) {
        $sql = "SELECT num_matricule, Malagasy, Français, Anglais, MATH, RDM, SPHYS, TECHNO, HYDRAU, TOPO, DESS, TP, MOREX, EPS, EE
                FROM cec WHERE Trimestre = :trimestre";
        $params = [":trimestre" => $trimestre];
        return $this->db->executeQuery($sql, $params)->fetch(PDO::FETCH_OBJ);
    }
}


?>
