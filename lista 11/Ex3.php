<?php

$n1 = $_POST ['n1'];
$n2 = $_POST ['n2'];
$n3 = $_POST ['n3'];

echo "Sua média é: ", ($n1 + $n2 + $n3)/3;
echo "<br>";

$media =  ($n1 + $n2 + $n3)/3;

if($media >=7)
 echo "passou de anu";

else{
echo"nao passou";
}

?>