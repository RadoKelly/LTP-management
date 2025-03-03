
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/formulaire.css">
    <title>Ajouter Eleves</title>
</head>
<body>

    <div class="container">
        <header>Inscription</header>

        <form action="Controller/AjoutEleveController.php" method="post">
            <div class="form first">
                <div class="details personal" >
                    <span class="title">Informations personnel</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="name">Nom</label>
                            <input type="text" name="nom" placeholder="Entrer le nom" required>
                        </div>

                        <div class="input-field">
                            <label >Prenom</label>
                            <input type="text" name="prenom" placeholder="Entrer le Prenom" required>
                        </div>
                        
                        <div class="input-field">
                            <label for="name">Date de naissance</label>
                            <input type="date" name="date_naissance" placeholder="Entrer le nom" required>
                        </div>
                        
                        <div class="input-field">
                            <label for="name">N°</label>
                            <input type="number" name="numero" placeholder="Numero" required>
                        </div>

                        <div class="input-field">
                            <label >N° Matricule</label>
                            <input type="text" name="matricule" placeholder="Entrer le Matricule" required>
                        </div>

                        <div class="input-field">
                            <label for="sexe">Sexe</label>
                            <select name="sexe" id="sexe">
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Contact</label>
                            <input type="text" name="contact" placeholder="Entrer le contact" required>
                        </div>

                        <div class="input-field">
                            <label >Address</label>
                            <input type="text" name="address" placeholder="Entrer l'address" required>
                        </div>

                        <div class="input-field">
                        <label for="inscription">Année Scolaire</label>
                            <select name="inscription" id="inscription">
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                                <option value="2026-2027">2026-2027</option>
                            </select>    
                        </div>

                        <div class="input-field">
                        <label for="observation">Observation</label>
                            <select name="observation" id="observation">
                                <option value="Passant">Passant</option>
                                <option value="Redoublant">Redoublant</option>
                            </select>    
                        </div>

                        <hr>

                        <div class="input-field">
                            <label for="secteur">Secteur</label>
                            <select name="secteur" id="secteur">
                                <option value="gc">Génie_Civil</option>
                                <option value="indu">Industrièl</option>
                                <option value="ter">Tertiaire</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="filiere">Filière</label>
                            <select name="filiere" id="filiere">
                                <option value="el">EL</option>
                                <option value="fm">FM</option>
                                <option value="g2">G2</option>
                                <option value="ob">OB</option>
                                <option value="cec">CEC</option>
                                <option value="om">OM</option>
                                <option value="g3">G3</option>
                                <option value="dem">DEM</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="niveau">Niveau</label>
                            <select name="niveau" id="niveau">
                                <option value="1er">1er année</option>
                                <option value="2em">2em année</option>
                                <option value="3em">3em année</option>
                            </select>
                        </div>


                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Enregistrer</button>
            <a class="btn" href="./Controller/ListeController.php">Retour</a>
        </form>
    </div>
</body>
</html>