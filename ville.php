<?php require('inc_connexion.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $id = $_GET['id'];
    $result = $mysqli->query('SELECT ville_id,ville_nom,ville_text FROM _ville WHERE ville_id=' . $id);
    $row = $result->fetch_array();
    $nom = $row['ville_nom'];
    $texte = $row['ville_text'];
    ?>
    <title><?php echo $nom ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1><?php echo $nom ?></h1>
        <p><?php echo $texte ?></p>
    </div>
    <?php require('inc_menu.php') ?>
    <?php require('inc_footer.php') ?>
</body>

</html>