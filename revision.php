<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables de Multiplication</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <div class="row justify-content-center logo">
        <img src="images/logo.png" alt="logo">
    </div>

    <?php session_start();

    function resetscore()
        {
            $_SESSION['score'] = 0;
        }?>
    <div class="row justify-content-center">
    <a href="revisiontables.php" id="choixdestables" class="diva btn btn-orange" onclick="resetscore()">Tables</a>
    <a href="index.php" class="diva btn btn-vert">Retour</a>
    </div>

    <?php

    $_SESSION['check_list'] = $_POST['check_list'];
    $sessionCL = $_SESSION['check_list'];

    if (isset($_POST['check_list'])) {
        $sessionCL = $_SESSION['check_list'];
        $random = rand(1, 10);
        echo "<div class='row justify-content-center'>";
        echo "<p class='slogan'>Réviser la table du " . $sessionCL . " :</p>";
        echo "</div>";
        echo "<p>" . $random . "X" . $sessionCL . " = </p>";
        ?>

            <form method="post" action="revision.php">
            <label class="reponselabel">Réponse :</label><input type="number" name="input">
            <input style="display : none" name="reponse" value="<?php echo $random * $sessionCL ?>">
            <input style="display : none" name="check_list" value="<?php echo $sessionCL ?>">
            <div class="row justify-content-center">
            <input class="valider btn diva btn-orange" type="submit" name="valider" Value="Valider"/>
            </div>
            
            </form>

            <?php

        if (!isset($_SESSION['manches'])) {
            $_SESSION['score'] = 0;
            $_SESSION['manches'] = 1;
        }
        if (isset($_POST['input']) && isset($_POST['reponse']) && $_SESSION['manches'] < 5) {

            $essai = $_POST['input'];
            if ($essai === $_POST['reponse']) {
                echo "<div class='row justify-content-center'>";
                echo "<p class='txtgreen'>BONNE REPONSE</p>";
                echo "<p>Votre réponse : " . $_POST['input'] . "</p>";
                echo "<p>La bonne réponse : " . $_POST['reponse'] . "</br>";
                echo "</div>";
                $_SESSION['score'] += 1;
                $_SESSION['manches'] += 1;
            } else {
                echo "<div class='row justify-content-center'>";
                echo "<p class='txtrouge'>MAUVAISE REPONSE</p>";
                echo "<p>Votre réponse : " . $_POST['input'] . "</p>";
                echo "<p>La bonne réponse : " . $_POST['reponse'] . "</br>";
                echo "</div>";
                $_SESSION['manches'] += 1;
            }

        } else if ($_SESSION['manches'] >= 5 && $_POST['input'] === $_POST['reponse']) {
            echo "<div class='row justify-content-center'>";
            echo "<p>La partie est terminée !</p>";
            $_SESSION['score'] += 1;
            $_SESSION['manches'] = 1;
            $scorefinal = $_SESSION['score'];
            echo "<p>Votre score : " . $scorefinal . "</p>";
            $_SESSION['score'] = 0;
            echo "</div>";
        } else if ($_SESSION['manches'] >= 5 && $_POST['input'] != $_POST['reponse']) {
            echo "<div class='row justify-content-center'>";
            echo "<p>La partie est terminée !</p>";
            $_SESSION['manches'] = 1;
            $scorefinal = $_SESSION['score'];
            echo "<p>Votre score : " . $scorefinal . "</p>";
            $_SESSION['score'] = 0;
            echo "</div>";
        } else {
            echo "";
            $_SESSION['score'] = 0;
            $_SESSION['manches'] = 1;
        }
    } else {
        echo "Veuillez choisir une table.";
    }
    ?>
</div>



</body>

</html>