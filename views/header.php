<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../public/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/fontawesome.min.css">
    <title>Document</title>

    <style>

    .header {
        position: absolute;
        top: 0;
    display: flex;
    width: 100%;
    justify-content: space-between;
    padding: 20px 10px;
    list-style-type: none;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    /* background: #6ee500; */
}

.menu {
    display: flex;
    gap: 30px;
    list-style-type: none;
    margin-right: 20px;
}

.header a {
    text-decoration: none;
    color: #000;
    position: relative;
}

.header a.lien::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 0;
    height: 2px;
    background-color: #6ee500;
    transition: width 0.3s ease;
}

.header a.lien:hover::after {
    width: 100%;
}

.dec a {
    background: transparent;
    border: 1px solid #38d39f;
    color: #5C5C5C;
    padding: 7px 13px;
    border-radius: 5px;
    transition: background 0.3s;
}

.dec a:hover{
    color: #fff;
    background: #38d39f;
    opacity: 0.8;
}

.header-logo {
    height: 30px; /* Ajuste la hauteur de l'image */
    width: auto; /* Maintient le ratio d'aspect */
    object-fit: contain; /* Ajuste l'image sans la déformer */
}

.header {
    display: flex;
    align-items: center; /* Aligne verticalement le contenu, y compris l'image */
}

    </style>
</head>
<body>
    <header class="header">
        <li><a href="/projetEcole/Controller/ListeController.php">LTP Antsirabe</a></li>
        <div class="menu">
            <li><a class="lien" href="/projetEcole/Controller/ListeController.php">Eleves</a></li>
            <li><a class="lien" href="/projetEcole/views/resultat.php">Notes</a></li>
            <li class="dec"><a href="/projetEcole/Controller/deconnectionController.php"><i class="fa fa-sign-out"></i></a></li>
        </div>
    </header>
</body>
</html>