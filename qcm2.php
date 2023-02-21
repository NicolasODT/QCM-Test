<?php
require_once ('qcm.php');

if (!empty($_POST)) {
    if(isset($_POST['question']) && $_POST['question'] != "" 
    && isset($_POST['reponse1']) && $_POST['reponse1'] != "" 
    && isset($_POST['reponse2']) && $_POST['reponse2'] != "" 
    && isset($_POST['reponse3']) && $_POST['reponse3'] != "" ){
        $radio = isset($_POST['radio']) ? $_POST['radio'] : null;
        if ($radio !== null) {
            $qcm = new QCM();
            $radio1 = ($radio === '1') ? true : false;
            $radio2 = ($radio === '2') ? true : false;
            $radio3 = ($radio === '3') ? true : false;
            $qcm->fillReponse($_POST['question'], $_POST['reponse1'], $radio1, $_POST['reponse2'], $radio2, $_POST['reponse3'], $radio3);
            echo "YOUHOU !!";
        } else {
            echo "toi devoir choisir bouton qui vrais !";
        }
    }else{
        echo "tu doit remplire";
    }
} else {
    echo "Marche pas";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <label for="question">Question:</label>
    <input type="text" name="question" id="question" >
    <br>
    <label for="reponse1">Réponse 1:</label>
    <input type="text" name="reponse1" id="reponse1" >
    <input type="radio" name="radio" id="reponse1" value="1">
    <br>
    <label for="reponse2">Réponse 2:</label>
    <input type="text" name="reponse2" id="reponse2" >
    <input type="radio" name="radio" id="reponse2" value="2">
    <br>
    <label for="reponse3">Réponse 3:</label>
    <input type="text" name="reponse3" id="reponse3" >
    <input type="radio" name="radio" id="reponse3" value="3" >
    <br>
    <button>envoyer</button>
</form>
</body>
</html>


