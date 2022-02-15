<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="mijngegevens.php" method="POST">
 <style>
        <?php 
            $test = $_POST['lievelingskleur'];
            echo "body{background-color:$test;}"
        ?>
    </style>
</head>
<body>
    
<?php

echo $_POST["Vnaam"]. "<br>";  
echo $_POST["Anaam"]. "<br>";  
echo $_POST["klas"]. "<br>";    
echo $_POST["Leeftijd"]. "<br>";    
echo $_POST["Adres"]. "<br>";   
echo $_POST["Pnaam"]. "<br>";    
echo $_POST["Fm"]. "<br>";   
echo $_POST["gender"]. "<br>";  
?>





</body>
</html>



