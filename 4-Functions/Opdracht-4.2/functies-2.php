<!DOCTYPE html>
<html>
<body>
<?php

function rekenUit($Getal1,$Getal2,$Getal3){

 $antwoord =$Getal1 + $Getal2 + $Getal3;

 return $antwoord;
}

$opdracht1 =rekenUit(3, 6 , 1);
$opdracht2 =rekenUit (12, 4 , 6);
$opdracht3 =rekenUit (9, 7 , 12);

echo "Als ik de getallen 3, 6 , 1 bij elkaar optel, is de uitkomst $opdracht1 ";
echo "</br>";
echo "Als ik de getallen 12, 4 , 6 bij elkaar optel, is de uitkomst $opdracht2 ";
echo"</br>";
echo "Als ik de getallen 9, 7 , 12 bij elkaar optel, is de uitkomst $opdracht3 ";

?>
</body>
</html>