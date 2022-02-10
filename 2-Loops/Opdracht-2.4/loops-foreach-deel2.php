<!DOCTYPE html>
<html>
<body>

<form class= "Form" method="GET" action="JEBEM.php">
    <label>Klassenformulier</label> <br>
    <label>Ik zit in klas:</label> 
<select id="school" name="school">
    
<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach($klassen as $klas)
    
if($Klas == $klas){
    echo "<option value='$Klas' selected>$klas</option>";
}
else{
    echo "<option value='$Klas'>$klas</option>";
}
?>
</select> <br>
<button class= "btn">Verzend</button>
</form>




</body>
</html>