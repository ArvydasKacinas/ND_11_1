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
        <div>
            <select name="kiekis" id="kiekis" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option value="3" name="trys">Lengvas (3 skaičiai)</option>
                <option value="5" name="penki">Vidutinis (5 skaičiai)</option>
                <option value="7" name="septyni">Sunkus (7 skaičiai)</option>
            </select>
        </div>
        <div>
            <input name="spejimas" class="form-control" type="text" placeholder="Įveskite skaičių" aria-label="default input example"/>
        </div>
        <div>
            <button name="play">Žaisti</button>
        </div>
    </form>
    
<?php
    // $trys=rand(1,3);
    // $penki=rand(1,5);
    // $septyni=rand(1,7);

    $skaicius=0;
    $spejimas=0;

   if(isset($_POST["play"])) {
        $skaicius=$_POST["kiekis"];
        $randomas=rand(1,$skaicius);
        $spejimas=$_POST["spejimas"];
        echo $spejimas;
        echo "<br>";
        echo $randomas;
        echo "<br>";
        if($randomas==$spejimas) {
            echo "Atspejai, pasislėpęs skaičius buvo ".$randomas;
        } else {
            // echo "Neatspėjai, pasislėpęs skaičius buvo ".$randomas;
            echo '<div class="alert alert-success" role="alert">Thank You!now please login </div>';
        }
   }

?>
</body>
</html>