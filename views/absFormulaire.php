

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absence & Retard</title>
    <link rel="stylesheet" href="<?php if($lienCss != null){ echo $lienCss; }else{echo '../public/css/formulaire.css';}?>">
</head>
<style>
    /* public/css/formulaire.css */

body {
    font-family: Arial, sans-serif;

    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form {
    background-color: #fff;
    width: 400px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 50px;
    text-align: center;
}

.fields {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.input-field {
    display: flex;
    flex-direction: column;
    gap: 5px;
    margin-top: 10px;
}

.input-field label {
    font-size: 0.9rem;
    font-weight: bold;
    color: #666;
}

.input-field input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 0.95rem;
    transition: border-color 0.3s ease;
}

.input-field input:focus {
    border-color: #007bff;
    outline: none;
}

.btn {
    margin-top: 20px;
    padding: 10px 15px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    width: 100%;
    text-align: center;
    transition: background-color 0.3s ease;
}

.btn:hover {
    opacity: 0.8;
}

</style>
<body>
<?php 
include '../views/header.php';
require_once '../Controller/AbsController.php';
require_once '../config/database.php';
require_once '../Dbo/DbAcces.php';


$id = null;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['id'])){
        $id = $_GET['id']; 
         
    }
    if ($id !== null) {
        $db = new DbAcces($conn);
        $detailNote =  $db->RecupererNoteEleve($id);
        
    }
};

?>
    <div class="form first">
        <form action="/projetEcole/Controller/AbsController.php" method="post">
                <div class="details personal" >
                    <span class="title">Informations</span>
                    <input type="text" name="idEleve" value="<?php echo $id ?>" hidden readonly>
                    <div class="fields">
                        <div class="input-field">
                            <label for="absence">Absence</label>
                            <input type="number" name="absence" value="<?php echo $detailNote->getAbsence();?>" required>
                        </div>

                        <div class="input-field">
                            <label >Retard</label>
                            <input type="number" name="retard" value="<?php echo $detailNote->getRetard();?>" required>
                        </div>
                        
                        

                </div>
            </div>

            <button type="submit" class="btn">Enregistrer</button>
            
        </form>
    </div>   
</body>
</html>






