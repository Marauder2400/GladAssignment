<?php 

function superPower( $Z) {

    $array = str_split($Z);

$P = $array[0];
$Q = $array[1];


$power = pow($P,$Q);
echo "Power value = $power \n";
if( $power > 1)
 echo "\n 1";
else 
 echo "\n 0";

}


$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_Z);

$res = superPower($_Z);
echo $res;

 ?>