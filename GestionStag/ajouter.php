<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once('navbar.php');
    require_once('DB.php');
if (isset($_POST['ajouter'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    if(!empty($nom)&&!empty($prenom)&&!empty($age)){
        $sqlState= $pdo->prepare('INSERT INTO stagiaire VALUES(null,?,?,?)');
        $sqlState->execute([$nom,$prenom,$age]);
        header('Location: index.php');
    }else echo ("les champs sont obligatoires");
}






?>

    <div class="container">
        <h1>formulaire d'ajoute</h1>
    <form method="POST" >
    <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age">
        </div>

        <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
    </form>
    </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>