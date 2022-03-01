<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php 
echo "<body style='background-color:".$_POST['backgroundColor']."'>";
?>

<?php
    function maakRij($ranja, $GT){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$ranja</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$GT</td>";
        echo "</tr>";
    }

    $mezelf = [
    'naam'     => $_POST['name'],
    'leeftijd' => $_POST['age'],
    'lengte'   => $_POST['height'],
    'sport'    => $_POST['sport'],
    'hobbies'  => $_POST['hobbies'],
    ]; 

    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

    foreach($mezelf as $key =>$me){
         maakRij($key, $me);
    }
    echo "</table>"
?>

</body>
</html>