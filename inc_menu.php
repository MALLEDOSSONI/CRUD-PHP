<?php
$result = $mysqli->query('SELECT ville_id, ville_nom  FROM _ville');
while($row = $result->fetch_array()){
    $_ville[$row['ville_id']] = $row['ville_nom'];
}
?>
</div>
<ul>
    <li><a href="index.php">Accueil</a></li>
    <?php foreach($_ville as $id => $ville):?>
        <li><a href="ville.php?id=<?php echo $id ?>"><?php echo $ville?></a></li>
    <?php endforeach?>
</ul>
