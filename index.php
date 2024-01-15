<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="app.js" defer></script>    
</head>
<body>
    <form class="container">
        <h1>Générateur de mot de passe aléatoire</h1>
        <div>
            <input type="checkbox" id="numbers" name="numbers" />
            <label for="numbers">Avec des chiffres</label>
        </div>
        <div>
            <input type="checkbox" id="capsletters" name="capsletters" />
        <label for="capsletters">Avec des lettres majuscules</label>
        </div>
       <div>
        <input type="checkbox" id="symbols" name="symbols" />
        <label for="symbols">Avec des caractères spéciaux</label>
       </div>
       <div>
            <select name="how_many_glyphs" id="how_many_glyphs">
                <option value="">Veuillez sélectionner</option>
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
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
            </select>
        <label for="how_many_glyphs">Nombre de caractères</label><br>
       </div>

        <div class="button_container">
            <input class="submit" name="submit" type="submit" value="Générer mon mot de passe" />
        </div>
      
        <div class="result" style="display:none;"></div>
    </form>
</body>
</html>