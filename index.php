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


<?php

 $multi = 3;

for ($i=1; $i <=10 ; $i++) { 
    echo "<p>" . $i . "x" . $multi . "=" . $i*$multi . "</p>"; 
}

?>
</body>
</html>