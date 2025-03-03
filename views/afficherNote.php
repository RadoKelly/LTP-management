<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>

</head>
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        padding: 20px;
        /* Ajout du padding global */
        font-size: 14px;
    }

    .container {
        width: 90%;
        /* Ajuster la largeur du conteneur à 90% pour occuper plus de place */
        margin: 55px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 210mm;
        /* Limiter la largeur à 210mm (largeur A4) */
        min-height: 80%;
        /* Remplir 80% de la page A4 */
    }

    h1,
    h2 {
        text-align: center;
        color: #333;
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;
    }

    .student-info p {
        margin: 5px 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #444444;
    }

    th,
    td {
        padding: 12px;
        /* Augmenter le padding pour améliorer la lisibilité */
        text-align: left;
        font-size: 14px;
    }

    th {
        background-color: #f2f2f2;
    }

    th:nth-child(1),
    td:nth-child(1) {
        width: 3cm;
        /* Augmenter la largeur de la première colonne */
    }

    th:nth-child(2),
    td:nth-child(2),
    th:nth-child(3),
    td:nth-child(3),
    th:nth-child(4),
    td:nth-child(4) {
        width: 2.5cm;
        /* Ajuster la largeur des colonnes Coefficient, Notes, N+C */
    }

    th:nth-child(5),
    td:nth-child(5) {
        width: 4.5cm;
        /* Ajuster la largeur de la colonne Observation */
    }

    .footer {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .footer .left,
    .footer .right {
        width: 48%;
    }

    .footer p {
        margin: 5px 0;
    }

    .signature {
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        font-style: italic;
        text-align: left;
    }

    .signature p {
        margin: 5px 80px;
    }

    .signature .left {
        text-align: left;
    }

    .signature .right {
        text-align: left;
    }

    #btn-print {
        z-index: 1000;
        font-size: 16px;
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 5px;
        margin-right: 20px;
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        text-transform: uppercase;
        border-radius: 5px;
        font-weight: 550;
        transition: all 0.6s easa-out;
    }

    #btn-print:hover {
        opacity: 0.8;
    }

    .right p:last-child {
        margin-top: 20px;
    }


    @media print {

        /* Styles globaux pour l'affichage sur le navigateur */
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            font-size: 14px;
            /* Taille de la police */
        }

        h1,
        h2 {
            text-align: center;
            color: #333;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
        }

        table,
        th,
        td {
            border: 1px solid #444444;
            font-size: 14px;
        }

        th,
        td {
            padding: 12px;
        }

        /* Pour les styles spécifiques à l'impression */
        @media print {
            body {
                font-size: 14px;
                /* Assurez-vous que la taille de la police est la même en impression */
            }

            h1,
            h2 {
                font-size: 18px;
                /* Assurez-vous que les titres ont la même taille */
            }

            table,
            th,
            td {
                font-size: 14px;
                /* Taille de police dans le tableau */
            }

            .footer p,
            .signature p {
                font-size: 14px;
                /* Maintenir la taille des paragraphes dans le footer et la signature */
            }

            /* Forcer le comportement du div */
            .container,
            .content,
            .footer {
                page-break-inside: avoid;
                /* Empêche la coupure de page à l'intérieur de ces sections */
                break-inside: avoid;
            }

            /* Vous pouvez également ajuster les marges ou les paddings pour éviter que certains éléments ne soient coupés */
            .container {
                padding: 20px;
                /* S'assurer qu'il y a suffisamment d'espace pour les éléments */
            }
        }

    }
</style>

<body>



    <?php
    if ($fil == "el") {
    ?>
        <?php
        include '../views/btnHeader.php';
        ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2><?php echo $detailNote->getTrimestre(); ?> Trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> INDUSTRIEL</p>
                    <p><strong>SPECIALITE :</strong> ELECTROTECHNIQUE (EL)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?> année</p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Matières</th>
                        <th>Coefficient</th>
                        <th>Notes</th>
                        <th>N+C</th>
                        <th>Observation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ELEC</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getElec(); ?>
                        </td>
                        <td><?php echo $note->getElec() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Equipement</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getEquipement(); ?>
                        </td>
                        <td><?php echo $note->getEquipement() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SCH.AUTO</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSchauto(); ?>
                        </td>
                        <td><?php echo $note->getSchauto() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>INST</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getInst(); ?>
                        </td>
                        <td><?php echo $note->getInst() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ESMES</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getEsmes(); ?>
                        </td>
                        <td><?php echo $note->getEsmes() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>41</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            <div>

            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
        </div>
        

    <?php
    }
    ?>


    <?php
    if ($fil == "dem") {
    ?>
        <?php
        include '../views/btnHeader.php';
        ?>

        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> BATIMENT ET TRAVAUX PUBLICS (BTP)</p>
                    <p><strong>SPECIALITE :</strong> DESSINATEUR METREUR (DEM)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>

            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RDM</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getRdm(); ?>
                        </td>
                        <td><?php echo $note->getRdm() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HYDRAU</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getHydrau(); ?>
                        </td>
                        <td><?php echo $note->getHydrau() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TOPO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTopo(); ?>
                        </td>
                        <td><?php echo $note->getTopo() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TP</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTp(); ?>
                        </td>
                        <td><?php echo $note->getTp() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MOREX</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMorex(); ?>
                        </td>
                        <td><?php echo $note->getMorex() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps() * 1; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe() * 1; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>

        </div>
        <div>

            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>


    <?php
    if ($fil == "g3") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> TERTIAIRE</p>
                    <p><strong>SPECIALITE :</strong> AGENT COMMERCIAL (G3)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math G</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath_g(); ?>
                        </td>
                        <td><?php echo $note->getMath_g() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PHILOSOPHIE</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getPhilosophie(); ?>
                        </td>
                        <td><?php echo $note->getPhilosophie() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MATHS FI</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getMaths_fi(); ?>
                        </td>
                        <td><?php echo $note->getMaths_fi() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>STATISTIQUE</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getStatistiques(); ?>
                        </td>
                        <td><?php echo $note->getStatistiques() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>COMPTA G</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getCompta_g(); ?>
                        </td>
                        <td><?php echo $note->getCompta_g() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>INFO</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getInfo(); ?>
                        </td>
                        <td><?php echo $note->getInfo() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ECONOMIE</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getEconomie(); ?>
                        </td>
                        <td><?php echo $note->getEconomie() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT FISCAL</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_fiscal(); ?>
                        </td>
                        <td><?php echo $note->getDroit_fiscal() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT COM</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_com(); ?>
                        </td>
                        <td><?php echo $note->getDroit_com() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT SOC</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_soc(); ?>
                        </td>
                        <td><?php echo $note->getDroit_soc() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT CIV</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_civ(); ?>
                        </td>
                        <td><?php echo $note->getDroit_civ() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TEC COM</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTec_com(); ?>
                        </td>
                        <td><?php echo $note->getTec_com() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            
        </div>
        <div>

            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>

    <?php
    if ($fil == "g2") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> TERTIAIRE</p>
                    <p><strong>SPECIALITE :</strong> GESTION COMPTABLE (G2)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math G</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath_g(); ?>
                        </td>
                        <td><?php echo $note->getMath_g() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>PHILOSOPHIE</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getPhilosophie(); ?>
                        </td>
                        <td><?php echo $note->getPhilosophie() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MATHS FI</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getMaths_fi(); ?>
                        </td>
                        <td><?php echo $note->getMaths_fi() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>STATISTIQUE</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getStatistiques(); ?>
                        </td>
                        <td><?php echo $note->getStatistiques() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>COMPTA</td>
                        <td>8</td>
                        <td>
                            <?php echo $note->getCompta(); ?>
                        </td>
                        <td><?php echo $note->getCompta() * 8; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>INFO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getInfo(); ?>
                        </td>
                        <td><?php echo $note->getInfo() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ECONOMIE</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getEconomie(); ?>
                        </td>
                        <td><?php echo $note->getEconomie() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT FISCAL</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_fiscal(); ?>
                        </td>
                        <td><?php echo $note->getDroit_fiscal() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT COM</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_com(); ?>
                        </td>
                        <td><?php echo $note->getDroit_com() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DROIT SOC</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getDroit_soc(); ?>
                        </td>
                        <td><?php echo $note->getDroit_soc() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>35</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>

    <?php
    if ($fil == "om") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> INDUSTRIEL</p>
                    <p><strong>SPECIALITE :</strong> OUVRAGE METALLIQUE (OM)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RDM</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getRdm(); ?>
                        </td>
                        <td><?php echo $note->getRdm() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ANFAB</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getAnfb(); ?>
                        </td>
                        <td><?php echo $note->getAnfb() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TRC</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getTrc(); ?>
                        </td>
                        <td><?php echo $note->getTrc() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TP</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTp(); ?>
                        </td>
                        <td><?php echo $note->getTp() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>

    <?php
    if ($fil == "cec") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> BATIMENT ET TRAVAUX PUBLICS (BTP)</p>
                    <p><strong>SPECIALITE :</strong> CHEF D'EQUIPE DE CHANTIER (CEC)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RDM</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getRdm(); ?>
                        </td>
                        <td><?php echo $note->getRdm() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HYDRAU</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getHydrau(); ?>
                        </td>
                        <td><?php echo $note->getHydrau() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TOPO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTopo(); ?>
                        </td>
                        <td><?php echo $note->getTopo() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TP</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTp(); ?>
                        </td>
                        <td><?php echo $note->getTp() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MOREX</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMorex(); ?>
                        </td>
                        <td><?php echo $note->getMorex() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>


    <?php
    if ($fil == "ob") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> INDUSTRIEL</p>
                    <p><strong>SPECIALITE :</strong> OUVRAGE BOIS (OB)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>OTS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getOts(); ?>
                        </td>
                        <td><?php echo $note->getOts() * 1; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>RDM</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getRdm(); ?>
                        </td>
                        <td><?php echo $note->getRdm() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EFAB</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getEfab(); ?>
                        </td>
                        <td><?php echo $note->getEfab() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>6</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 6; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TP</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTp(); ?>
                        </td>
                        <td><?php echo $note->getTp() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GEOD</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getGeod(); ?>
                        </td>
                        <td><?php echo $note->getGeod() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>I.E</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getIe(); ?>
                        </td>
                        <td><?php echo $note->getIe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            
        </div>
        <div>

            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>

    <?php
    if ($fil == "fm") {
    ?>
    <?php
        include '../views/btnHeader.php';
    ?>
        <div class="container" id="content">
            <h1>Bulletin Trimestriel</h1>
            <h2>Premier trimestre</h2>
            <div class="student-info">
                <?php
                if ($unEleve != null) { ?>
                    <p><strong>NOM :</strong> <?php echo $unEleve->getNom(); ?></p>
                    <p><strong>PRENOM :</strong> <?php echo $unEleve->getPrenom(); ?></p>
                    <p><strong>NUMERO :</strong> <?php echo $unEleve->getNumero(); ?> <strong>MATRICULE :</strong> <?php echo $unEleve->getMatricule(); ?></p>
                    <p><strong>SECTEUR :</strong> INDUSTRIEL</p>
                    <p><strong>SPECIALITE :</strong> FABRICATION MECANIQUE (FM)</p>
                    <p><strong>NIVEAU :</strong> <?php echo $unEleve->getNiveau(); ?></p>
                    <p><strong>ANNEE SCOLAIRE :</strong> 2024 – 2025</p>
                <?php  }
                ?>
            </div>
            <table>
                <thead>
                    <th>Matière</th>
                    <th>Coefficient</th>
                    <th>Notes</th>
                    <th>N+C</th>
                    <th>Observations</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Malagasy</td>
                        <td>2</td>
                        <td><?php echo $note->getMalagasy(); ?></td>
                        <td><?php echo $note->getMalagasy() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getFrancais(); ?>
                        </td>
                        <td><?php echo $note->getFrancais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Anglais</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getAnglais(); ?>
                        </td>
                        <td><?php echo $note->getAnglais() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getMath(); ?>
                        </td>
                        <td><?php echo $note->getMath() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SPHYS</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getSphys(); ?>
                        </td>
                        <td><?php echo $note->getSphys() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TECHNO</td>
                        <td>2</td>
                        <td>
                            <?php echo $note->getTechno(); ?>
                        </td>
                        <td><?php echo $note->getTechno() * 2; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MRDM</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getMrdm(); ?>
                        </td>
                        <td><?php echo $note->getMrdm() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ANFAB</td>
                        <td>3</td>
                        <td>
                            <?php echo $note->getAnfab(); ?>
                        </td>
                        <td><?php echo $note->getAnfab() * 3; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TP</td>
                        <td>5</td>
                        <td>
                            <?php echo $note->getTp(); ?>
                        </td>
                        <td><?php echo $note->getTp() * 5; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DESS</td>
                        <td>4</td>
                        <td>
                            <?php echo $note->getDess(); ?>
                        </td>
                        <td><?php echo $note->getDess() * 4; ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EPS</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEps(); ?>
                        </td>
                        <td><?php echo $note->getEps(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>EE</td>
                        <td>1</td>
                        <td>
                            <?php echo $note->getEe(); ?>
                        </td>
                        <td><?php echo $note->getEe(); ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>36</strong></td>
                        <td><strong><?php echo $moyenne[1]; ?></strong></td>
                        <td><strong><?php echo $moyenne[2]; ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <div class="left">
                    <p><strong>Moyenne de la classe :</strong> <?php echo round($detailNote->getMoyenne_classe(), 2); ?></p>
                    <p><strong>Moyenne de l’élève :</strong> <?php echo $moyenne[0]; ?></p>
                    <p><strong>Rang:</strong><?php echo $detailNote->getRang(); ?></p>
                    <p><strong>Appreciation:</strong></p>
                </div>
                <div class="right">
                    <p><strong>Absence :</strong> <?php echo $detailNote->getAbsence(); ?></p>
                    <p><strong>Retard :</strong> <?php echo $detailNote->getRetard(); ?></p>
                </div>
            </div>

            <div class="signature">
                <div class="left">
                    <p>Les Parents</p>
                </div>
                <div class="right">
                    <p>Fait à Antsirabe le, </p>
                    <p>Le Proviseur Adjoint</p>
                </div>
            </div>
            <button type="submit" id="btn-print">Exporter en PDF</button>
        </div>
    <?php
    }
    ?>
    <script src="/projetEcole/public/js/jquery-3.7.1.min.js"></script>
    <script src="/projetEcole/public/js/html2canvas.min.js"></script>
    <script src="/projetEcole/public/js/jspdf.umd.min.js"></script>





    <!-- Votre code JavaScript -->
    <script>
        $(document).ready(function() {
            $('#btn-print').click(function() {
                const {
                    jsPDF
                } = window.jspdf;

                // Ajoute du padding au contenu avant de l'exporter
                $('#content').css('padding', '20px'); // 20px de padding autour du contenu
                $('#content').css('width', '80%'); // 80% de la largeur de la page

                html2canvas(document.getElementById('content'), {
                    scale: 4
                }).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const imgWidth = 210 * 0.9; // Largeur en mm (80% de la largeur A4)
                    const pageHeight = 297; // Hauteur en mm (A4)
                    const imgHeight = canvas.height * imgWidth / canvas.width;
                    let heightLeft = imgHeight;
                    let position = 10; // 10mm de marge en haut

                    const doc = new jsPDF({
                        orientation: 'portrait',
                        unit: 'mm',
                        format: 'a4',
                    });

                    // Ajouter l'image au PDF
                    doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight); // Ajouter 10mm de marge à gauche et 10mm en haut
                    heightLeft -= pageHeight;

                    // Ajouter des pages supplémentaires si nécessaire
                    while (heightLeft >= 0) {
                        position = heightLeft - imgHeight;
                        doc.addPage();
                        doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
                        heightLeft -= pageHeight;
                    }

                    // Sauvegarder le fichier PDF
                    doc.save('bulletin.pdf');
                });
            });
        });
    </script>









</body>

</html>
?>