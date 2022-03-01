<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3t3k@@n</title>
</head>
<body>
    
<form name="Forum" method="POST" action="advanced-2.php">
<p>Tekstkleur: 
    <select id="kleur" name="color"></p>
        <?php 
        $kleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($kleuren as $kleur){
            echo "<option value='$kleur' selected>$kleur</option>";
        }
        ?>
    </select></p>

<p>Achtergrondkleur:
    <select id="bkg-color" name="backgroundColor"></p>
    <?php 
        $achtergrondkleuren = ['red' , 'blue' , 'green' , 'black' , 'brown'];
        foreach($achtergrondkleuren as $achtergrondkleur){
            echo "<option value='$achtergrondkleur' selected>$achtergrondkleur</option>";
        }
        ?>
    </select></p>
<p>Naam: <input name="name"></p>
<p>Leeftijd: <input name="age"></p>
<p>Lengte: <input name="height"></p>
<p>Sport: <input name="sport"></p>
<p>Hobby's: <input name="hobbies"></p>
<p>Tabel-border dikte: <input name="border-dikte"></p>
<p>padding: <input name="padding"></p>
<button>Verstuur</button>
</form>

</body>
</html>