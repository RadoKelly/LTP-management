
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/liste.css">
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">
    <link rel="stylesheet" href="../public/DataTables/datatables.min.css">
    <title>Liste Eleve</title>
</head>
</head>
<body>
<?php 
include '../views/header.php';
?>
    <div class="container">

      <header>
        <div class="addMemberBtn">
              <a href="../formulaire.php"><button><i class="fa fa-plus"></i> Ajouter Membre </button></a>
              <a href="./NoteController.php"><button><i class="fa fa-plus"></i>  Ajouter Note</button></a>
          </div>
      </header>

      <table id="example" class="display">

          <thead>
              <tr class="heading">
                  <th>id</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Date de naissance</th>
                  <th>N°</th>
                  <th>Matricule</th>
                  <th>Sexe</th>
                  <th>Secteur</th>
                  <th>Filière</th>
                  <th>Niveau</th>
                  <th>Action</th>
              </tr>
          </thead>

          <tbody>
          <?php
              foreach($lesEleves as $eleve):?>
              <tr class="tbody">
                  <td><?php echo $eleve->getId(); ?></td>
                  <td><?php echo $eleve->getNom(); ?></td>
                  <td><?php echo $eleve->getPrenom(); ?></td>
                  <td><?php echo $eleve->getDate_naissance(); ?></td>
                  <td><?php echo $eleve->getNumero(); ?></td>
                  <td><?php echo $eleve->getMatricule(); ?></td>
                  <td><?php echo $eleve->getSexe(); ?></td>
                  <td><?php echo $eleve->getSecteur(); ?></td>
                  <td><?php echo $eleve->getFiliere(); ?></td>
                  <td><?php echo $eleve->getNiveau(); ?></td>
                  <td class="action-buttons">
                    <a href="./VoirEleveController.php/?id=<?php echo $eleve->getId(); ?>"><button class="view"><i class="fa fa-eye"></i></button></a>
                    <a href="./ModifierEleveController.php/?id=<?php echo $eleve->getId(); ?>"><button class="edit"><i class="fa fa-pencil"></i></button></a>
                    <a href="./AfficherNoteElController.php/?num_matricule=<?php echo $eleve->getMatricule(); ?>&fil=<?php echo $eleve->getFiliere(); ?>&id=<?php echo $eleve->getId(); ?>" ><button class="file"><i class="fa fa-file"></i></button></button></a>
                    <a href="../views/absFormulaire.php/?id=<?php echo $eleve->getId(); ?>"><button class="clock"><i class="fa fa-clock"></i></button></a>
                    <a href="./SupprimerEleveController.php/?id=<?php echo $eleve->getId(); ?>" onclick=" return comfirmDelete();" id="mylink"><button class="delete"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>
              <?php endforeach ?>
          </tbody>

      </table>
      


      
    </div>

    

<script src="../public/js/liste.js"></script>
<script src="../public/js/jquery-3.7.1.min.js"></script>
<script src="../public/DataTables/datatables.min.js"></script>

<script>
    new DataTable('#example');
</script>

<script>
    console.log('hello');
    function comfirmDelete() {
        return confirm("Etes-vous sûr de vouloir supprimer cet élève ?");
    }
</script>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 23:14:10 GMT -->
</html>
