
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/liste.css">
    <link rel="stylesheet" href="../public/DataTables/datatables.min.css">
    <title>Liste Eleve</title>
</head>
</head>
<body>
<?php 
include '../views/header.php';
?>
    <div class="container resultat">



      <table id="example" class="display">

          <thead class="resultat">
              <tr class="heading">
                  <th class="resultat">id</th>
                  <th class="resultat">Nom</th>
                  <th class="resultat">Prenom</th>
                  <th class="resultat">Matricule</th>
                  <th class="resultat">Moyenne</th>
                  <th class="resultat">Rang</th>
              </tr>
          </thead>

          <tbody>
          <?php
              foreach($listeEleveNote as $elevenote):?>
              <tr class="tbody">
                  <td class="resultat"><?php echo $elevenote->eleveModel->getId(); ?></td>
                  <td class="resultat"><?php echo $elevenote->eleveModel->getNom(); ?></td>
                  <td class="resultat"><?php echo $elevenote->eleveModel->getPrenom(); ?></td>
                  <td class="resultat"><?php echo $elevenote->eleveModel->getMatricule(); ?></td>
                  <td class="resultat"><?php echo $elevenote->noteModel->getMoyenne(); ?></td>
                  <td class="resultat"><?php echo $elevenote->noteModel->getRang(); ?></td></tr>
              <?php endforeach ?>
          </tbody>

      </table>

      <h3 >Moyenne de classe : <strong class="classe"> <?php echo $moyenClasse; ?></strong></h3>
      


      
    </div>

    

<script src="../public/js/liste.js"></script>
<script src="../public/js/jquery-3.7.1.min.js"></script>
<script src="../public/DataTables/datatables.min.js"></script>

<script>
    new DataTable('#example');
</script>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 23:14:10 GMT -->
</html>
