<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/formulaire.css">
    <title>Formulaire</title>
</head>
<body>

    <div class="container">
        <header>Modification</header>

        <form action="Controller/ModifierEleveController.php" method="post">
        <input type="number" name="id" hidden readonly value="<?php echo $eleve->getId(); ?>">
            <div class="form first">
                <div class="details personal" >
                    <span class="title">Informations personnel</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="name">Nom</label>
                            <input type="text" name="nom" placeholder="Entrer le nom" required value="<?php echo $eleve->getNom(); ?>">
                        </div>

                        <div class="input-field">
                            <label >Prenom</label>
                            <input type="text" name="prenom" placeholder="Entrer le Prenom" required value="<?php echo $eleve->getPrenom(); ?>">
                        </div>
                        
                        <div class="input-field">
                            <label for="name">Date de naissance</label>
                            <input type="date" name="date_naissance" placeholder="Entrer la date de naissance" required value="<?php echo $eleve->getDate_naissance(); ?>">
                        </div>
                        
                        <div class="input-field">
                            <label for="name">N°</label>
                            <input type="number" name="numero" placeholder="Numero" required value="<?php echo $eleve->getNumero(); ?>">
                        </div>

                        <div class="input-field">
                            <label >N° Matricule</label>
                            <input type="text" name="matricule" placeholder="Entrer le Matricule" required value="<?php echo $eleve->getMatricule(); ?>">
                        </div>

                        <div class="input-field">
                            <label for="sexe">Sexe</label>
                            <select name="sexe" id="sexe" >
                                    <option <?php if($eleve->getSexe() == "F"){ ?> selected <?php }?>value="F">Femme</option>
                            
                                    <option <?php if($eleve->getSexe() == "H"){ ?> selected <?php }?> value="H">Homme</option>
                                   
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Contact</label>
                            <input type="text" name="contact" placeholder="Entrer le contact" required value="<?php echo $eleve->getContact(); ?>">
                        </div>

                        <div class="input-field">
                            <label >Address</label>
                            <input type="text" name="address" placeholder="Entrer l'address" required value="<?php echo $eleve->getAddress(); ?>">
                        </div>

                        <div class="input-field">
                        <label for="inscription">Année Scolaire</label>
                            <select name="inscription" id="inscription">
                                <option <?php if($eleve->getInscription() == "2024-2025"){ ?> selected <?php }?>value="2024-2025">2024-2025</option>
                                <option <?php if($eleve->getInscription() == "2025-2026"){ ?> selected <?php }?>value="2025-2026">2025-2026</option>
                                <option <?php if($eleve->getInscription() == "2026-2027"){ ?> selected <?php }?>value="2026-2027">2026-2027</option>
                            </select>    
                        </div>

                        <div class="input-field">
                        <label for="observation">Observation</label>
                            <select name="observation" id="sexe">
                                <option <?php if($eleve->getObservation() == "Passant"){ ?> selected <?php }?>value="Passant">Passant</option>
                                <option <?php if($eleve->getObservation() == "Redoublant"){ ?> selected <?php }?>value="Redoublant">Redoublant</option>
                            </select>    
                        </div>

                        <hr>

                        <div class="input-field">
                            <label for="secteur">Secteur</label>
                            <select name="secteur" id="secteur">
                                <option <?php if($eleve->getSecteur() == "gc"){ ?> selected <?php }?> value="gc">Génie_Civil</option>
                                <option <?php if($eleve->getSecteur() == "indu"){ ?> selected <?php }?> value="indu">Industrièl</option>
                                <option <?php if($eleve->getSecteur() == "ter"){ ?> selected <?php }?> value="ter">Tertiaire</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="filiere">Filière</label>
                            <select name="filiere" id="filiere">
                                <option <?php if($eleve->getFiliere() == "el"){ ?> selected <?php }?> value="el">EL</option>
                                <option <?php if($eleve->getFiliere() == "fm"){ ?> selected <?php }?> value="fm">FM</option>
                                <option <?php if($eleve->getFiliere() == "g2"){ ?> selected <?php }?> value="g2">G2</option>
                                <option <?php if($eleve->getFiliere() == "ob"){ ?> selected <?php }?> value="ob">OB</option>
                                <option <?php if($eleve->getFiliere() == "cec"){ ?> selected <?php }?> value="cec">CEC</option>
                                <option <?php if($eleve->getFiliere() == "om"){ ?> selected <?php }?> value="om">OM</option>
                                <option <?php if($eleve->getFiliere() == "g3"){ ?> selected <?php }?> value="g3">OM</option>
                                <option <?php if($eleve->getFiliere() == "dem"){ ?> selected <?php }?> value="dem">DEM</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="niveau">Niveau</label>
                            <select name="niveau" id="niveau">
                                <option <?php if($eleve->getNiveau() == "1er"){ ?> selected <?php }?> value="1er">1er année</option>
                                <option <?php if($eleve->getNiveau() == "2em"){ ?> selected <?php }?> value="2em">2er année</option>
                                <option <?php if($eleve->getNiveau() == "3em"){ ?> selected <?php }?> value="3em">3er année</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Modifier</button>
            <a class="btn" href="/projetEcole/Controller/ListeController.php">Retour</a>
        </form>
    </div>
</body>
</html>