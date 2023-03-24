<?php require('inc_connexion.php');?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <?php
        if(isset($_POST['submit_form'])){
            $ville_nom = $_POST['ville_nom'];
            $ville_text = $_POST['ville_text'];
            if((empty($ville_nom)) or empty($ville_text)){
                $message = '<p class="error">Vous devez saisir le non d\'une ville et sa presentation</p>';
            }
            else{
                $result = $mysqli->query('SELECT count(ville_id) FROM _ville WHERE ville_nom="'.$ville_nom.'"');
                $row = $result-> fetch_array();
                if($row[0]>0){
                    $message = '<p class="error">la ville est deja enregistre</p>';

                }
                else{
                    //requete insert into 
                    if($mysqli->query('INSERT INTO _ville (ville_nom,ville_text) VALUES ("'.$ville_nom.'","'.$ville_text.'")'){
                        $message ='<p class="message">L\'ajout de la ville'.$ville_nom.'est effectue.</p>';
                    }
                    else{
                        $message ='<p class="error">L\'ajout de la ville'.$ville_nom.'n\'est pas effectue.</p>';
                    }
                }
            }
        }
    ?>
   