<?php require('inc_connexion.php');?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        //recuperation des variables
        if(isset($_POST['submit_form'])){
            $ville_nom = $_POST['ville_nom'];
            $ville_text = $_POST['ville_text'];
            $ville_id = $_POST['ville_id'];
            // verification du contenu des variables
            if((empty($ville_nom)) or empty($ville_text)){
                $message = '<p class= "error">Vous devez saisir le nom d\'une ville et sa presentation.</p>';
            }
            else
            {
                if($mysqli->query('UPDATE _ville SET ville_nom="'.$ville_nom.'",ville_text ="'.$ville_text.'" WHERE  ville_id='.$ville_id))
                {
                    $message = '<p class="message>La mise a jour de la ville'.$ville_nom.'est effectuee.</p>';
                }
                else
                {
                    $message= '<p class="error">La mise a jour de la ville'.$ville_nom.'n\'est pas effectuee.</p>';
                }
            }
        }
        //recuperation de la variable externe
        $id = $_GET['id'];
        //requete
        $result =$mysqli->query('SELECT ville_id,ville_nom,ville_text FROM _ville WHERE ville_id'.$id);
        //creation de la nouvel array
        $row = $result->fetch_array();
        //variables destines a l'affichage
        $nom = $row['ville_nom'];
        $text = $row['ville_text'];
        ?>
    <div>
        <h1>Ajouter une Ville</h1>
        <?php if(isset($message))echo $message?>
        <form action="" method="post">
            <p>Nom de la Ville : <input type="text" name="ville_nom" value="<?php echo $nom?>"/></p>
            <p>Texte de presentation</p><br>
            <textarea name="ville_text" id="" cols="30" rows="10"><?php echo $text?></textarea>
            <input type="hidden" name="ville_id" value="<?php echo $id?>
            "/>
            <p><input type="submit" name="submit_form" value="valider"/></p>


        </form>
    </div>



















        
    </body>
</html>