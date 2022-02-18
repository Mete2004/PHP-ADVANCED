<!DOCTYPE html>
<html>
<body>
<style> 
    table, tr, th{
        border: <?php echo $_POST["tabelrand"]?>px black;
        padding: <?php echo $_POST["celpadding"]?>px;
        background-color: <?php echo $_POST["achtergrondkleur"]?>;
        color:  <?php echo $_POST["tekstkleur"]?>;
    }
    </style>
</head>

<table>
<tr>
    <th>Key</th>
    <th>Value</th>
</tr>

<?php 
    $student = array("Naam"=>"Mete",
                     "Klas"=>"LCTSDO1A", 
                     "Leeftijd"=>"17", 
                     "Woonplaats"=>"Amsterdam", 
                     "Muzieksmaak"=>"hiphop", 
                     "Sport"=>"Zwemmen");

    function maakRij($sleutel, $waarde){ 
        echo "<tr>";
        echo "<td>$sleutel</td>";
        echo "<td>$waarde</td>";
        echo "</tr>";
     } 

 foreach($student as $key => $value){
     maakRij($key, $value);
}
?>
</table>
</form>

</body>
</html>