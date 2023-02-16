<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdarcht3</title>
</head>
<body>



<h1>De 5 snelste achtbanen van Europa</h1>

<form method="post" action="create.php">
    <label for="naam-achtbaan">Naam achtbaan:</label><br>
    <input type="text" id="naam-achtbaan" name="naam-achtbaan" required> <br>

    <label for="naam-pretpark">Naam Pretpark:</label><br>
    <input type="text" id="naam-pretpark" name="naam-pretpark" required> <br>

    <label for="naam-land">Naam Land:</label><br>
    <input type="text" id="naam-land" name="naam-land" required> <br>

    <label for="topsnelheid">Topsnelheid:</label><br>
    <input type="number" id="topsnelheid" name="topsnelheid" min="1" max="200" required><br>

    <label for="hoogte">Hoogte:</label><br>
    <input type="number" id="hoogte" name="hoogte" min="1" max="200" required><br>

    <label for="datum-eerste-opening">Datum eerste opening:</label><br>
    <input type="date" id="datum-eerste-opening" name="datum-eerste-opening" required><br>

    <label for="cijfer-achtbaan">Cijfer voor achtbaan:</label><br>
    <input type="range" id="cijfer-achtbaan" name="cijfer-achtbaan" min="1" max="10" step="0.1" onchange="document.getElementById('cijfer-achtbaan-output').value = this.value;"><br>
    <output for="cijfer-achtbaan" id="cijfer-achtbaan-output">5</output><br>

  <input type="submit" value="Versturen">
</body>
</html>