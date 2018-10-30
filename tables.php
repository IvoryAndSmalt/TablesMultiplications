<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables</title>
</head>
<body>

<a href="index.php" class="nosboutons">Retour</a>

<!-- <form action="" method="post">
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

balise PHP ouvrante

$multi = $_POST['multi'];

if (isset($multi)) {
    echo "<p>Table du " . $multi . " :</p>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>" . $i . "x" . $multi . "=" . $i * $multi . "</p>";
    }
} else {
    echo "<p>Table du " . 0 . " :</p>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>" . $i . "x" . 0 . "=" . $i * 0 . "</p>";
    }
}

?> -->

<form action="" method="post">
<label class="heading">Sélectionnez les tables que vous voulez afficher : </label>
<input type="checkbox" name="check_list[]" value="1"><label>1</label>
<input type="checkbox" name="check_list[]" value="2"><label>2</label>
<input type="checkbox" name="check_list[]" value="3"><label>3</label>
<input type="checkbox" name="check_list[]" value="4"><label>4</label>
<input type="checkbox" name="check_list[]" value="5"><label>5</label>
<input type="checkbox" name="check_list[]" value="6"><label>6</label>
<input type="checkbox" name="check_list[]" value="7"><label>7</label>
<input type="checkbox" name="check_list[]" value="8"><label>8</label>
<input type="checkbox" name="check_list[]" value="9"><label>9</label>
<input type="checkbox" name="check_list[]" value="10"><label>10</label>
<input type="submit" name="submit" Value="Submit"/>

</form>

<?php

if (isset($_POST['submit'])) {
    foreach ($_POST['check_list'] as $selected) {
        echo "<p>Table du " . $selected . " :</p>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<p>" . $i . "x" . $selected . "=" . $i * $selected . "</p>";
        }
    }
} else {
    echo "<b>Veuillez cocher au moins une option.</b>";
}
?>
</body>
</html>