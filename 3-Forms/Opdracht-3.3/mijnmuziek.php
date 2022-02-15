<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijnmuziek</title>
    <form action="invoer.html" method="GET">
</head>
<body>
    
</body>
</html>

<?php
echo "Artiest is " . $_GET ["artiest"];
echo "<br>";
echo "Titel is " .$_GET ["titel"];
echo "<br>";
echo "Het jaar van uitkomst is " . $_GET ["Jaarvanuitkomst"];
echo "<br>";
echo "Deze track is van het muzieksoort " . $_GET ["Muzieksoort"];
?>

<! ---- http://localhost/Blok%204/PHP-ADVANCED/3-Forms/taak03/mijnmuziek.php?artiest=Wiz+Khalifa&titel=See+you+again&Jaarvanuitkomst=2015&Muzieksoort=Hiphop%2Frap&submit=verstuur
----->