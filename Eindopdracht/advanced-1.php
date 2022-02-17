<!DOCTYPE html>
<html>
<body>

<form action="advanced-2.php" method="POST">
<tabel>
    Tabelranddikte (px): <input type="text" name="tabelrand" id="tabelrand"><br>
    Celpadding (px): <input type="text" name="celpadding" id="celpadding"><br>
    Achtergrondkleur: <select name="achtergrondkleur" id="achtergrondkleur">

    <?php  
    $kleuren = array("red", "blue", "green", "black", "brown");
    foreach ($kleuren as $achtergrondkleur){
        echo "<option value='$achtergrondkleur'>$achtergrondkleur</option>";
    }
    ?>
    </select><br>
    <label for="tekstkleur">Tekstkleur:</label>
    <select name="tekstkleur" id="tekstkleur">
    <?php
    foreach ($kleuren as $value){
        echo "<option value='$value'>$value</option>";
    } 
    ?>
    </select>
    <br>

<input type="submit" name="submit" value="verstuur"><br>


</form>
</tabel>
</body>
</html>