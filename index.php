<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de mot de passe</title>
    <link href="style.css" rel="stylesheet">
    <link href="style_responsive.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="app.js" defer></script>    
</head>
<body>
    <form class="container" id="container">
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
            <select name="how_many_glyphs" id="how_many_glyphs" required>
                <option value="">Veuillez sélectionner</option>
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
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
            </select>
        <label for="how_many_glyphs">Nombre de caractères</label><br>
       </div>

        <div class="button_container">
            <input class="submit" name="submit" type="submit" value="Générer mon mot de passe" />
        </div>
      
        <div class="result" style="display:none;"></div>

        <div class="button_container" style="display:none;" id="button_container_copy">
            <input type="button" onclick="copierTexte()" class="copy" value="Copier" />
        </div>
    </form>
        
</body>
</html>