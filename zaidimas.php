<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Atspėk skaičių žaidimas</title>
</head>
<body>
    <form method="POST" action="zaidimas.php">
        <div class="container w-75 p-3">
            <div>
                <label>Sudėtingumas</label>
                <select name="kiekis" id="kiekis" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="3" name="trys">Lengvas (3 skaičiai)</option>
                    <option value="5" name="penki">Vidutinis (5 skaičiai)</option>
                    <option value="7" name="septyni">Sunkus (7 skaičiai)</option>
                </select>
            </div>
            <div>
                <label>Skaičius, kurį spėjame</label>
                <input name="spejimas" class="form-control" type="text" placeholder="Įveskite skaičių" aria-label="default input example"/>
            </div>
            <div>
                <button name="play" class="btn btn-primary">Žaisti</button>
            </div>
        </div>
    </form>
    
<?php

    $skaicius=0;
    $spejimas=0;

   if(isset($_POST["play"])) {
        $skaicius=$_POST["kiekis"];
        $randomas=rand(1,$skaicius);
        $spejimas=$_POST["spejimas"];
        if($randomas==$spejimas) {
            echo "<div class=\"container alert alert-success\" role=\"alert\">Atspėjai! Tavo spėjimas buvo ".$spejimas.", o pasislėpęs skaičius taipogi buvo ".$randomas."</div>";
        } else {
            echo "<div class=\"container alert alert-danger\" role=\"alert\">Neatspėjai... Tavo spėjimas buvo ".$spejimas.", o pasislėpęs skaičius buvo ".$randomas."</div>";
        }
   }

?>
</body>
</html>