<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Révisions : Tables</title>
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
        <div class="row justify-content-center">
            <a href="index.php" class="diva btn btn-vert">Retour</a>
        </div>

        <?php session_abort();?>
        <form class="myforms" action="revision.php" method="post">
            <div class="row justify-content-center">
                <label class="slogan">Sélectionnez un table à réviser :</label>
            </div>
            <div class="row justify-content-center">
                <input class="radios" type="radio" name="check_list" value="1"><label class="labels">1</label>
                <input class="radios" type="radio" name="check_list" value="2"><label class="labels">2</label>
                <input class="radios" type="radio" name="check_list" value="3"><label class="labels">3</label>
                <input class="radios" type="radio" name="check_list" value="4"><label class="labels">4</label>
                <input class="radios" type="radio" name="check_list" value="5"><label class="labels">5</label>
            </div>
            <div class="row justify-content-center">
                <input class="radios" type="radio" name="check_list" value="6"><label class="labels">6</label>
                <input class="radios" type="radio" name="check_list" value="7"><label class="labels">7</label>
                <input class="radios" type="radio" name="check_list" value="8"><label class="labels">8</label>
                <input class="radios" type="radio" name="check_list" value="9"><label class="labels">9</label>
                <input class="radios" type="radio" name="check_list" value="10"><label class="labels">10</label>
            </div>
            <div class="row justify-content-center">
                <input class ="btn btn-orange diva" type="submit" name="revision" Value="Réviser !"/>
            </div>
        </form>
    </div>

</body>

</html>