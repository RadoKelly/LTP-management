
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/formulaire.css">
    <link rel="stylesheet" href="../../public/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/fontawesome.min.css">
    <title>Ajouter Eleves</title>
    <style>
    .container {
  position: relative;
  width: 100%;
  border-radius: 6px;
  padding: 30px;
  margin: 80px 15px;
  background-color: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
<?php 
include '../views/header.php';
?>
    <div class="container">
        <header>Resultat Eleves</header>

        <form action="../Controller/ResultatController.php" method="post">
            <div class="form first">
                <div class="details personal filtre" >
                        <div class="input-field">
                        <label for="inscription">Année Scolaire</label>
                            <select name="inscription" id="sexe">
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                                <option value="2026-2027">2026-2027</option>
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
                            <label for="trimestre">Trimestre</label>
                            <select name="trimestre" id="trimestre">
                                <option value="1er">1er Trimestre</option>
                                <option value="2em">2em Trimestre</option>
                                <option value="3em">3em Trimestre</option>
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
                    <button type="submit" class="btn">Suivant</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>