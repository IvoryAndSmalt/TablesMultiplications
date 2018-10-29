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

<p>
<form action="" method="post">
	Choisissez la table
    <select name="multi">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	</select>
    <input type="submit" value="Calculer">
    </form>
</p>

<?php
    $multi = $_POST['multi'];
    echo "<p>Table du " . $multi . " :</p>";

        for ($i=1; $i <= 10 ; $i++) { 
            echo "<p>" . $i . "x" . $multi . "=" . $i*$multi . "</p>"; 
        }
    
	?>

</body>

</html>