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

<?php
session_start();

$sessionCL = $_SESSION['check_list'];

        echo "<p>Réviser la table du " . $sessionCL. " :</p>";
       $_SESSION['random']=rand(1,10);
       $random = $_SESSION['random'];
       echo "<p>" . $random ."X". $sessionCL . " = </p>";

?>

<form action="" method="post">
<input type="number" name="input"><label>Réponse : </label>
<input type="submit" name="reponse" Value="Valider"/>
</form>

<?php
$essai = $_POST['input'];

if (!empty($essai)){
    echo "<p>" . $essai . "</p>";
    echo $sessionCL*$random . "<br>";
    if($essai == $sessionCL*$random){
        echo "<p>BONNE REPONSE</p>";
        $random = rand(1,10);
    }
    else{
        echo "MAUVAISE REPONSE";
    }
}
else{
    echo "";
}

?>

</body>

</html>