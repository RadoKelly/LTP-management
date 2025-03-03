<?php 
class MoyenneEl {
    public function El($noteEl) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteEl->getMalagasy(),  // Note sur 40
            'Francais'     => $noteEl->getFrancais(),  // Note sur 40
            'Anglais'      => $noteEl->getAnglais(),   // Note sur 40
            'Math'         => $noteEl->getMath(),      // Note sur 60
            'Sphys'        => $noteEl->getSphys(),     // Note sur 60
            'Elec'         => $noteEl->getElec(),      // Note sur 80
            'Techno'       => $noteEl->getTechno(),    // Note sur 40
            'Equipement'   => $noteEl->getEquipement(),// Note sur 80
            'Schauto'      => $noteEl->getSchauto(),   // Note sur 60
            'Dess'         => $noteEl->getDess(),      // Note sur 100
            'Inst'         => $noteEl->getInst(),      // Note sur 100
            'Esmes'        => $noteEl->getEsmes(),     // Note sur 80
            'Eps'          => $noteEl->getEps(),       // Note sur 20
            'Ee'           => $noteEl->getEe()         // Note sur 20
        ];



        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'Sphys'        => 3,
            'Elec'         => 4,
            'Techno'       => 2,
            'Equipement'   => 4,
            'Schauto'      => 3,
            'Dess'         => 5,
            'Inst'         => 5,
            'Esmes'        => 4,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;
    
        // Vérification des notes et des coefficients avant le calcul
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            //echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n";  // Debug: Afficher les détails
            $totalNote += $note;
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Affichage des totaux pour vérifier
        // echo "Total des notes pondérées: $totalPondere\n";
        // echo "Total des coefficients: $totalCoefficients\n";

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];
        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}


class MoyenneDem {
    public function Dem($noteDem) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteDem->getMalagasy(),
            'Francais'     => $noteDem->getFrancais(),
            'Anglais'      => $noteDem->getAnglais(),
            'Math'         => $noteDem->getMath(),
            'RDM'          => $noteDem->getRdm(),
            'SPHYS'        => $noteDem->getSphys(),
            'TECHNO'       => $noteDem->getTechno(),
            'HYDRAU'       => $noteDem->getHydrau(),
            'TOPO'         => $noteDem->getTopo(),
            'Dess'         => $noteDem->getDess(),
            'TP'           => $noteDem->getTp(),
            'MOREX'        => $noteDem->getMorex(),
            'Eps'          => $noteDem->getEps(),
            'Ee'           => $noteDem->getEe()
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'RDM'          => 3,
            'SPHYS'        => 3,
            'TECHNO'       => 2,
            'HYDRAU'       => 2,
            'TOPO'         => 2,
            'Dess'         => 5,
            'TP'           => 5,
            'MOREX'        => 3,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Calcul des notes pondérées et des coefficients
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n";  // Debug: Afficher les détails
            $coefficient = $coefficients[$matiere];
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Affichage des totaux pour vérification
        // echo "Total des notes pondérées: $totalPondere\n";
        // echo "Total des coefficients: $totalCoefficients\n";

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}


class MoyenneFM {
    public function Fm($noteDem) {
        // $notes = null;
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteDem->getMalagasy(),
            'Francais'     => $noteDem->getFrancais(),
            'Anglais'      => $noteDem->getAnglais(),
            'Math'         => $noteDem->getMath(),
            'SPHYS'        => $noteDem->getSphys(),
            'TECHNO'       => $noteDem->getTechno(),
            'MRDM'         => $noteDem->getMrdm(),
            'ANFAB'        => $noteDem->getAnfab(),
            'TP'           => $noteDem->getTp(),
            'Dess'         => $noteDem->getDess(),
            'Eps'          => $noteDem->getEps(),
            'Ee'           => $noteDem->getEe()
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'SPHYS'        => 3,
            'TECHNO'       => 2,
            'MRDM'         => 4,
            'ANFAB'        => 3,
            'TP'           => 5,
            'Dess'         => 4,
            'Eps'          => 1,
            'Ee'           => 1
        ];
        

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Calcul des notes pondérées et des coefficients
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n";  // Debug: Afficher les détails
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0; // Si les coefficients sont nuls
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}


class MoyenneOB {
    public function Ob($noteDem) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteDem->getMalagasy(),
            'Francais'     => $noteDem->getFrancais(),
            'Anglais'      => $noteDem->getAnglais(),
            'Math'         => $noteDem->getMath(),
            'SPHYS'        => $noteDem->getSphys(),
            'OTS'          => $noteDem->getOts(),
            'TECHNO'       => $noteDem->getTechno(),
            'RDM'          => $noteDem->getRdm(),
            'EFAB'         => $noteDem->getEfab(),
            'Dess'         => $noteDem->getDess(),
            'TP'           => $noteDem->getTp(),
            'GEOD'         => $noteDem->getGeod(),
            'I.E'          => $noteDem->getIe(),
            'Eps'          => $noteDem->getEps(),
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'SPHYS'        => 3,
            'OTS'          => 4,
            'TECHNO'       => 2,
            'RDM'          => 3,
            'EFAB'         => 5,
            'Dess'         => 4,
            'TP'           => 4,
            'GEOD'         => 4,
            'I.E'          => 4,
            'Eps'          => 1,
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Calcul du total pondéré et des coefficients
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n";  // Debug: Afficher les détails
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Eviter division par zéro
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}
   

class MoyenneCec {
    public function CEC($noteDem) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteDem->getMalagasy(),  // Note sur 40
            'Francais'     => $noteDem->getFrancais(),  // Note sur 40
            'Anglais'      => $noteDem->getAnglais(),   // Note sur 40
            'Math'         => $noteDem->getMath(),      // Note sur 60
            'RDM'          => $noteDem->getRdm(),       // Note sur 60
            'SPHYS'        => $noteDem->getSphys(),     // Note sur 60
            'TECHNO'       => $noteDem->getTechno(),    // Note sur 40
            'HYDRAU'       => $noteDem->getHydrau(),    // Note sur 80
            'TOPO'         => $noteDem->getTopo(),      // Note sur 80
            'Dess'         => $noteDem->getDess(),      // Note sur 100
            'TP'           => $noteDem->getTp(),        // Note sur 100
            'MOREX'        => $noteDem->getMorex(),     // Note sur 80
            'Eps'          => $noteDem->getEps(),       // Note sur 20
            'Ee'           => $noteDem->getEe()         // Note sur 20
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'RDM'          => 3,
            'SPHYS'        => 3,
            'TECHNO'       => 2,
            'HYDRAU'       => 2,
            'TOPO'         => 2,
            'Dess'         => 5,
            'TP'           => 5,
            'MOREX'        => 3,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Vérification des notes et des coefficients avant le calcul
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n";  // Debug: Afficher les détails
            // Calcul des totaux pondérés
            $totalNote += $note;
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourner la moyenne arrondie à 2 décimales
        return $reponse;
    }
}


class MoyenneG3 {
    public function G3($noteG3) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteG3->getMalagasy(),  // Note sur 40
            'Francais'     => $noteG3->getFrancais(),  // Note sur 40
            'Anglais'      => $noteG3->getAnglais(),   // Note sur 40
            'Math_g'       => $noteG3->getMath_g(),    // Note sur 60
            'Philosophie'  => $noteG3->getPhilosophie(), // Note sur 40
            'Maths_fi'     => $noteG3->getMaths_fi(),  // Note sur 60
            'Statistiques' => $noteG3->getStatistiques(), // Note sur 40
            'Compta_g'     => $noteG3->getCompta_g(),  // Note sur 80
            'INFO'         => $noteG3->getInfo(),      // Note sur 60
            'Economie'     => $noteG3->getEconomie(),  // Note sur 80
            'Droit_Fiscal' => $noteG3->getDroit_Fiscal(), // Note sur 60
            'Droit_Com'    => $noteG3->getDroit_Com(),  // Note sur 40
            'Droit_Soc'    => $noteG3->getDroit_Soc(),  // Note sur 40
            'Droit_Civ'    => $noteG3->getDroit_Civ(),  // Note sur 60
            'Tec_com'      => $noteG3->getTec_com(),   // Note sur 40
            'Eps'          => $noteG3->getEps(),       // Note sur 20
            'Ee'           => $noteG3->getEe()         // Note sur 20
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math_g'       => 3,
            'Philosophie'  => 2,
            'Maths_fi'     => 2,
            'Statistiques' => 2,
            'Compta_g'     => 2,
            'INFO'         => 2,
            'Economie'     => 2,
            'Droit_Fiscal' => 2,
            'Droit_Com'    => 2,
            'Droit_Soc'    => 2,
            'Droit_Civ'    => 2,
            'Tec_com'      => 5,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Vérification des notes et des coefficients avant le calcul
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n"; 
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // echo "Total des notes pondérées: $totalPondere\n";
        // echo "Total des coefficients: $totalCoefficients\n";

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }

        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}


class MoyenneG2 {
    public function G2($noteG2) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteG2->getMalagasy(),   // Note sur 40
            'Francais'     => $noteG2->getFrancais(),   // Note sur 40
            'Anglais'      => $noteG2->getAnglais(),    // Note sur 40
            'Math_g'       => $noteG2->getMath_g(),     // Note sur 60
            'Philosophie'  => $noteG2->getPhilosophie(), // Note sur 40
            'Maths_fi'     => $noteG2->getMaths_fi(),   // Note sur 60
            'Statistiques' => $noteG2->getStatistiques(), // Note sur 40
            'Compta'       => $noteG2->getCompta(),     // Note sur 80
            'INFO'         => $noteG2->getInfo(),       // Note sur 60
            'Economie'     => $noteG2->getEconomie(),   // Note sur 80
            'Droit_Fiscal' => $noteG2->getDroit_fiscal(), // Note sur 60
            'Droit_Com'    => $noteG2->getDroit_com(),   // Note sur 40
            'Droit_Soc'    => $noteG2->getDroit_soc(),   // Note sur 40
            'Eps'          => $noteG2->getEps(),        // Note sur 20
            'Ee'           => $noteG2->getEe()          // Note sur 20
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math_g'       => 3,
            'Philosophie'  => 2,
            'Maths_fi'     => 2,
            'Statistiques' => 2,
            'Compta'       => 8,
            'INFO'         => 2,
            'Economie'     => 2,
            'Droit_Fiscal' => 2,
            'Droit_Com'    => 2,
            'Droit_Soc'    => 2,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Vérification des notes et des coefficients avant le calcul
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n"; 
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // echo "Total des notes pondérées: $totalPondere\n";
        // echo "Total des coefficients: $totalCoefficients\n";

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }

        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}

class MoyenneOM {
    public function OM($noteOM) {
        // Notes de l'élève pour chaque matière
        $notes = [
            'Malagasy'     => $noteOM->getMalagasy(),   // Note sur 40
            'Francais'     => $noteOM->getFrancais(),   // Note sur 40
            'Anglais'      => $noteOM->getAnglais(),    // Note sur 40
            'Math'         => $noteOM->getMath(),       // Note sur 60
            'SPHYS'        => $noteOM->getSphys(),      // Note sur 60
            'TECHNO'       => $noteOM->getTechno(),     // Note sur 40
            'RDM'          => $noteOM->getRdm(),        // Note sur 60
            'ANFAB'        => $noteOM->getAnfb(),       // Note sur 60
            'TRC'          => $noteOM->getTrc(),        // Note sur 80
            'TP'           => $noteOM->getTp(),         // Note sur 100
            'Dess'         => $noteOM->getDess(),       // Note sur 100
            'Eps'          => $noteOM->getEps(),        // Note sur 20
            'Ee'           => $noteOM->getEe()          // Note sur 20
        ];

        // Coefficients des matières
        $coefficients = [
            'Malagasy'     => 2,
            'Francais'     => 2,
            'Anglais'      => 2,
            'Math'         => 3,
            'SPHYS'        => 3,
            'TECHNO'       => 2,
            'RDM'          => 3,
            'ANFAB'        => 3,
            'TRC'          => 4,
            'TP'           => 5,
            'Dess'         => 5,
            'Eps'          => 1,
            'Ee'           => 1
        ];

        // Initialisation des totaux
        $totalPondere = 0;
        $totalCoefficients = 0;
        $totalNote = 0;

        // Calcul des totaux pondérés
        foreach ($notes as $matiere => $note) {
            $coefficient = $coefficients[$matiere];
            $totalNote += $note;
            // echo "Matière: $matiere, Note: $note, Coefficient: $coefficient\n"; 
            $totalPondere += $note * $coefficient;
            $totalCoefficients += $coefficient;
        }

        // Calcul de la moyenne pondérée
        if ($totalCoefficients != 0) {
            $moyennePonderee = $totalPondere / $totalCoefficients;
        } else {
            $moyennePonderee = 0;  // Si les coefficients sont nuls
        }
        $reponse = [round($moyennePonderee, 2),$totalNote,$totalPondere];

        // Retourne la moyenne arrondie à 2 décimales
        return $reponse;
    }
}

    
?>
