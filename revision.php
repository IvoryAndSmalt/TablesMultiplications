<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables de Multiplication</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php session_start();

function resetscore()
{
    $_SESSION['score'] = 0;
}?>

<a href="revisionstables.php" id="choixdestables" class="nosboutons" onclick="resetscore()">Tables</a>
<a href="index.php" class="nosboutons">Retour</a>

<?php

$_SESSION['check_list'] = $_POST['check_list'];
$sessionCL = $_SESSION['check_list'];

if (isset($_POST['check_list'])) {
    $sessionCL = $_SESSION['check_list'];
    $random = rand(1, 10);
    echo "<p>Réviser la table du " . $sessionCL . " :</p>";
    echo "<p>" . $random . "X" . $sessionCL . " = </p>";
    ?>

    <form method="post" action="revision.php">
    <label>Réponse : </label><input type="number" name="input">
    <input style="display : none" name="reponse" value="<?php echo $random * $sessionCL ?>">
    <input style="display : none" name="check_list" value="<?php echo $sessionCL ?>">
    <input type="submit" name="valider" Value="Valider"/>
    </form>

    <?php

    if (!isset($_SESSION['manches'])) {
        $_SESSION['score'] = 0;
        $_SESSION['manches'] = 1;
    }
    if (isset($_POST['input']) && isset($_POST['reponse']) && $_SESSION['manches'] < 5) {

        $essai = $_POST['input'];
        if ($essai === $_POST['reponse']) {
            echo "<p>BONNE REPONSE</p>";
            echo "<p>Votre réponse : " . $_POST['input'] . "</p>";
            echo "<p>La bonne réponse : " . $_POST['reponse'] . "</br>";
            $_SESSION['score'] += 1;
            $_SESSION['manches'] += 1;
        } else {
            echo "<p>MAUVAISE REPONSE</p>";
            echo "<p>Votre réponse : " . $_POST['input'] . "</p>";
            echo "<p>La bonne réponse : " . $_POST['reponse'] . "</br>";
            $_SESSION['manches'] += 1;
        }

    } else if ($_SESSION['manches'] >= 5 && $_POST['input'] === $_POST['reponse']) {
        echo "<p>La partie est terminée !</p>";
        $_SESSION['score'] += 1;
        $_SESSION['manches'] = 1;
        $scorefinal = $_SESSION['score'];
        echo "<p>Votre score : " . $scorefinal . "</p>";
        $_SESSION['score'] = 0;
    } else if ($_SESSION['manches'] >= 5 && $_POST['input'] != $_POST['reponse']) {
        echo "<p>La partie est terminée !</p>";
        $_SESSION['manches'] = 1;
        $scorefinal = $_SESSION['score'];
        echo "<p>Votre score : " . $scorefinal . "</p>";
        $_SESSION['score'] = 0;
    } else {
        echo "";
        $_SESSION['score'] = 0;
        $_SESSION['manches'] = 1;
    }
} else {
    echo "Veuillez choisir une table.";
}
?>

</body>

</html>