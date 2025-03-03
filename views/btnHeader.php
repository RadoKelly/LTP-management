<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bulletin Trimestriel</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Import jQuery -->
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 10;
    }

    .header button {
      margin: 0 10px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .header button:hover {
      background-color: #0056b3;
    }

    .content {
      margin-top: 80px;
      padding: 20px;
      display: none;
    }

    .content.active {
      display: block;
    }
  </style>
</head>
<body>

  <div class="header">
    <button onclick="showContent(1)">1er trimestre</button>
    <button onclick="showContent(2)">2e trimestre</button>
    <button onclick="showContent(3)">3e trimestre</button>
  </div>

  <div id="trimestre1" class="content active">
    <h2>1er Trimestre</h2>
    <div id="notes-trimestre1">Chargement...</div>
  </div>

  <div id="trimestre2" class="content">
    <h2>2e Trimestre</h2>
    <div id="notes-trimestre2">Chargement...</div>
  </div>

  <div id="trimestre3" class="content">
    <h2>3e Trimestre</h2>
    <div id="notes-trimestre3">Chargement...</div>
  </div>

  <script>
    function showContent(trimestre) {
      // Masquer tous les contenus
      document.querySelectorAll('.content').forEach(content => {
        content.classList.remove('active');
      });

      // Afficher uniquement le trimestre sélectionné
      document.getElementById("trimestre" + trimestre).classList.add('active');

      // Charger les notes via AJAX
      $.ajax({
        url: "/get_bulletin.php", // Ajuste selon ton chemin
        type: "POST",
        data: { trimestre: trimestre },
        dataType: "json",
        success: function(response) {
          let notesHtml = `<p>Nom: ${response.nom}</p>`;
          notesHtml += `<p>Moyenne Générale: ${response.moyenne}</p>`;
          notesHtml += `<p>Classement: ${response.classement}</p>`;
          document.getElementById("notes-trimestre" + trimestre).innerHTML = notesHtml;
        },
        error: function() {
          document.getElementById("notes-trimestre" + trimestre).innerHTML = "<p>Erreur lors du chargement des données !</p>";
        }
      });
    }
  </script>

</body>
</html>
