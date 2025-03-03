<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php if($lienCss != null){ echo $lienCss; }else{echo '../public/css/formulaire.css';}?>">
    <link rel="stylesheet" href="<?php if($lienCss != null){ echo '../../public/css/liste.css'; }else{echo '../public/css/liste.css';}?>">
    <title>Ajouter Notes DEM</title>
</head>
<body class="body">
<?php 
include '../views/header.php';
?>
    
    <div class="nav">

    <table id="listeEleve" class="display">

<thead>
    <tr class="heading">
        <th></th>
        <th></th>
        <th></th>
        
    </tr>
</thead>

<tbody>
<?php
    foreach($lesEleves as $eleve):?>
    
    <tr class="tbody">
        <td><a href="
        <?php 
            if($id != null){
                echo '/projetEcole/Controller/NoteEleveController.php/?id='. $eleve->getId();
            }else{
                echo 'NoteEleveController.php/?id='.$eleve->getId();
            }
            ?>">
            <?php echo $eleve->getId(); ?></a>
        </td>
        <td><?php echo $eleve->getNom(); ?></td>
        <td><?php echo $eleve->getPrenom(); ?></td>
           
    </tr>
    
    <?php endforeach ?>
</tbody>

</table>
    
    </div>



    <div class="container">
        <header>Ajouter Notes</header>

        <form action="/projetEcole/Controller/Ob_controller.php" method="post">
            <div class="form first">
                <div class="details personal" >

                    <div class="information">
                        <?php  
                            if($unEleve != null){ ?>
                        <input type="text" name="id" hidden readonly value="<?php echo $unEleve->getId(); ?>">
                        <input type="text" name="num" hidden readonly value="<?php echo $unEleve->getMatricule(); ?>">
                        <p><span>Nom:</span> <?php echo $unEleve->getNom(); ?></p>
                        <p><span>Prenom:</span> <?php echo $unEleve->getPrenom(); ?></p>
                        <p><span>Matricule:</span> <?php echo $unEleve->getMatricule(); ?></p>
                        <p><span>Secteur:</span> <?php echo $unEleve->getSecteur(); ?></p>
                        <p><span>Filière:</span> <?php echo $unEleve->getFiliere(); ?></p>
                        <p><span>Niveau:</span> <?php echo $unEleve->getNiveau(); ?></p>
                        <?php  }
                        ?>
                        </div>
                        <div class="input-field">
                            <label for="niveau">Trimestre</label>
                            <select name="trimestre" id="trimestre">
                                <option value="1er">1er Trimestre</option>
                                <option value="2em">2em Trimestre</option>
                                <option value="3em">3em Trimestre</option>
                            </select>
                        </div>
                        <hr>

                        
        <table id="customers">
        <tr>
            <th>Matière</th>
            <th>Coefficient</th>
            <th>Notes</th>
            <th>N+C</th>
            <th>Observations</th>
        </tr>
        <tr>
            <td>Malagasy</td>
            <td>2</td>
            <td>
                <input type="number" name="malagasy">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Français</td>
            <td>2</td>
            <td>
                <input type="number" name="francais">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Anglais</td>
            <td>2</td>
            <td>
                <input type="number" name="anglais">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Math</td>
            <td>3</td>
            <td>
                <input type="number" name="math">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>SPHYS</td>
            <td>3</td>
            <td>
                <input type="number" name="sphys">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>OTS</td>
            <td>1</td>
            <td>
                <input type="number" name="ots">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TECHNO</td>
            <td>2</td>
            <td>
                <input type="number" name="techno">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>RDM</td>
            <td>3</td>
            <td>
                <input type="number" name="rdm">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>EFAB</td>
            <td>4</td>
            <td>
                <input type="number" name="efab">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>DESS</td>
            <td>6</td>
            <td>
                <input type="number" name="dess">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TP</td>
            <td>5</td>
            <td>
                <input type="number" name="tp">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>GEOD</td>
            <td>3</td>
            <td>
                <input type="number" name="geod">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>I.E</td>
            <td>1</td>
            <td>
                <input type="number" name="ie">
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>EPS</td>
            <td>1</td>
            <td>
                <input type="number" name="eps">
            </td>
            <td></td>
            <td></td>
        </tr>


        </table>
        <div class="form first">
                

            <button type="submit" class="btn">Enregistrer</button>
            
        </form>
    </div>
    
<script src="<?php if($lienCss != null){ echo '../../public/js/jquery-3.7.1.min.js'; }else{echo '../public/js/jquery-3.7.1.min.js';}?>"></script>
<script src="<?php if($lienCss != null){ echo '../../public/DataTables/datatables.min.js'; }else{echo '../public/DataTables/datatables.min.js';}?>"></script>

<script>
    new DataTable('#listeEleve');
</script>
</body>
</html>