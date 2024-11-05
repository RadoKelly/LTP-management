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
        <header>Inscription</header>

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

                        <hr>

                        <div class="input-field">
                            <label for="secteur">Secteur</label>
                            <select name="secteur" id="secteur">
                                <option <?php if($eleve->getSecteur() == "genie civile"){ ?> selected <?php }?> value="genie civile">Génie_Civil</option>
                                <option <?php if($eleve->getSecteur() == "industrielle"){ ?> selected <?php }?> value="industrielle">Industrièl</option>
                                <option <?php if($eleve->getSecteur() == "Tertiaire"){ ?> selected <?php }?> value="tertiaire">Tertiaire</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="filiere">Filière</label>
                            <select name="filiere" id="filiere">
                                <option <?php if($eleve->getFiliere() == "G1"){ ?> selected <?php }?> value="G1">G1</option>
                                <option <?php if($eleve->getFiliere() == "G2"){ ?> selected <?php }?> value="G2">G2</option>
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
            <a class="btn" href="./Controller/ListeController.php">Retour</a>
        </form>
    </div>
</body>
</html>