document.getElementById('btn-print').addEventListener('click', function() {
    var doc = new jsPDF();
    
    // Récupère le contenu de la section avec id="content"
    var content = document.getElementById('content').innerHTML;

    // Utilise html pour ajouter le contenu HTML au PDF
    doc.html(content, {
        callback: function (doc) {
            doc.save('bulletin.pdf'); // Sauvegarde le fichier PDF avec le nom souhaité
        },
        margin: [10, 10, 10, 10],
        autoPaging: true
    });
});
