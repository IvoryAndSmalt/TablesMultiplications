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

<?php session_start();?>

<a href="index.php" id="choixdestables" class="nosboutons">Tables</a>

<?php

if (isset($_POST['check_list']) && (!isset($random))) {

    $_SESSION['check_list'] = $_POST['check_list'];
    $sessionCL = $_SESSION['check_list'];
    $_SESSION['random'] = rand(1, 10);
    $random = $_SESSION['random'];
    echo "<p>Réviser la table du " . $sessionCL . " :</p>";
    echo "<p>" . $random . "X" . $sessionCL . " = </p>";

} 
else if (isset($_POST['check_list']) && isset($random)) {

    $_SESSION['check_list'] = $checklist;
    $sessionCL = $_SESSION['check_list'];
    echo "<p>Réviser la table du " . $sessionCL . " :</p>";
    echo "<p>" . $random . "X" . $sessionCL . " = </p>";
    ?>

    <form method="post">
    <input type="number" name="input"><label>Réponse : </label>
    <input name="stCL" id="stockageRetS" value="<?php echo $random . "X" . $sessionCL . " = " ?>">
    <input name="strandom" value="<?php echo $random ?>">;
    <input name="stcheck" value="<?php echo $sessionCL ?>">;
    <input type="submit" name="reponse" Value="Valider"/>
    </form>

    <?php echo $_POST['stCL'];
    echo $_POST['strandom'];
    echo $_POST['stcheck'];

    if (isset($_POST['input'])) {
        $essai = $_POST['input'];
        echo $_POST['stCL'];

        echo "<p>" . $essai . "</p>";
        if ($essai === $_POST['stcheck'] * $_POST['strandom']) {
            echo "<p>BONNE REPONSE</p>";
            $_SESSION['random'] = rand(1, 10);
            $random = $_SESSION['random'];
        }
        else {
            echo "MAUVAISE REPONSE";
        }
    }
    else {
        echo "";
    }
}
else {
    echo "Veuillez choisir une table.";
}

?>

</body>

</html>
