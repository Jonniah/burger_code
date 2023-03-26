<?php
require 'database.php';

if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}


$db = Database::connect();
$statement = $db->prepare('SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id
        WHERE items.id = ?');
$statement->execute(array($id));
$item = $statement->fetch();
Database::disconnect();

if (!empty($_POST)) {
    $id = checkInput($_POST['id']);
    $db = Database::connect();
    $statement = $db->prepare("DELETE FROM items WHERE id = ? ");
    $statement->execute(array($id));
    $image = '' . $item['image'];
    $imagePath          = '../images/' . $item['image'];
    if (file_exists($item['image'])) {
        $src =  unlink($imagePath);
    } else {
        echo ' non supr ';
    }
    Database::disconnect();
    header("Location:index.php");
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="" href="../style/css.css">
    <script src="../jquery-3.6.0.js"></script>
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.js"></script>
    <script src="../bootstrap.min (2).js"></script>
    <script src="../bootstrap.min.js"></script>
    <link rel="stylesheet" href="../glyphicon.css">
</head>

<body>
    <h1 class="text-logo">
        <span class="glyphicon glyphicon-cutlery"></span> Burger code
        <span class="glyphicon glyphicon-cutlery"></span>
    </h1>
    <div class="container admin">
        <div class="row">
            <h1><strong>Supprimer un item</strong></h1>
            <br>
            <form class="form" role="form" action="delete.php" method="post">
                <input class="hidden" name="id" value="<?php echo $id; ?>">
                <p class="alert alert-warning">Êtes vous sur de vouloir supprimer?<?= 'image' ?></p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-warning"> Oui</button>
                    <a class="btn btn-default" href="index.php">Non</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>