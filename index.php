<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables de Multiplication</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<<<<<<< HEAD
<body>

<form method="post" action="">
<select name="first_dropdown">
<option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
</select>
<input type="submit" />
</form>

<?php 
if (isset($_POST['first_dropdown']) && !empty($_POST['first_dropdown']) ):
?>

<?php
//if user select a
if ($_POST['first_dropdown'] == "a"):
?>
<option value="a1">a1</option>
<option value="a2">a2</option>
<option value="a3">a3</option>
<?php endif; ?> //
=======

<body>
>>>>>>> origin/master

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

<<<<<<< HEAD
 $multi = 3;

for ($i=1; $i <=10 ; $i++) { 
    echo "<p>" . $i . "x" . $multi . "=" . $i*$multi . "</p>"; 
}

?>
=======
        for ($i=1; $i <= 10 ; $i++) { 
            echo "<p>" . $i . "x" . $multi . "=" . $i*$multi . "</p>"; 
        }
    
	?>

>>>>>>> origin/master
</body>

</html>