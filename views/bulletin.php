<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bulletin Trimestriel</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Import jQuery -->
</head>
<body>

  <div class="header">
    <button onclick="loadTrimestre(1)">1er trimestre</button>
    <button onclick="loadTrimestre(2)">2e trimestre</button>
    <button onclick="loadTrimestre(3)">3e trimestre</button>
  </div>

  <div class="container" id="content">
    <h1>Bulletin Trimestriel</h1>
    <h2 id="trimestre-title"><?php echo $detailNote->getTrimestre(); ?> Trimestre</h2>
    <div class="student-info">
      <p>Nom: <span id="student-name"><?php echo $detailNote->getNom(); ?></span></p>
      <p>Moyenne Générale: <span id="moyenne"><?php echo $detailNote->getMoyenne(); ?></span></p>
      <p>Classement: <span id="classement"><?php echo $detailNote->getClassement(); ?></span></p>
    </div>
  </div>

  <script>
    function loadTrimestre(trimestre) {
      $.ajax({
        url: "get_bulletin.php",
        type: "POST",
        data: { trimestre: trimestre },
        dataType: "json",
        success: function(response) {
          // Mettre à jour le bulletin avec les nouvelles données
          $("#trimestre-title").text(response.trimestre + " Trimestre");
          $("#student-name").text(response.nom);
          $("#moyenne").text(response.moyenne);
          $("#classement").text(response.classement);
        },
        error: function() {
          alert("Erreur lors du chargement des données !");
        }
      });
    }
  </script>

</body>
</html>
