<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Révisions : Tables</title>
</head>
<body>

<a href="index.php" class="nosboutons">Retour</a>

<?php session_abort();?>
<form action="revision.php" method="post">
<label class="heading">Sélectionnez un table à réviser: </label>
<input type="radio" name="check_list" value="1"><label>1</label>
<input type="radio" name="check_list" value="2"><label>2</label>
<input type="radio" name="check_list" value="3"><label>3</label>
<input type="radio" name="check_list" value="4"><label>4</label>
<input type="radio" name="check_list" value="5"><label>5</label>
<input type="radio" name="check_list" value="6"><label>6</label>
<input type="radio" name="check_list" value="7"><label>7</label>
<input type="radio" name="check_list" value="8"><label>8</label>
<input type="radio" name="check_list" value="9"><label>9</label>
<input type="radio" name="check_list" value="10"><label>10</label>
<input type="submit" name="revision" Value="Réviser !"/>
</form>

</body>
</html>