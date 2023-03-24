<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //récupération de la variable externe
    $id = $_GET['id'];
    if ($mysqli->query('DELETE FROM _ville WHERE ville_id=' . $id)) {
        $message = '<p class="message">La ville a bien été supprimée dans la base .<br><a href="liste.php">Accéder à la liste des _ville</a></p>';
    } else {
        $message = '<p class="error">Erreur de la suppression .</p>';
    }
    ?>
    <title>Suppression</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>
        <?php echo $message ?>
    </div>
</body>

</html>