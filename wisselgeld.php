<?php

$input = intval($argv[1]);
$eenheden = array(50, 20, 10, 5, 2, 1, 0.01);
foreach ($eenheden as $waarde) {
    $restgeld = floor($input / $waarde);
    
    if ($restgeld >= 1) {
        $input = $input - ($waarde * $restgeld);
        echo ($restgeld . " x " . $waarde . " euro") . PHP_EOL;
    }
}

$getal=intval(($argv[1]-floor($argv[1]))*100);
$cent=array(50,20,10,5);
foreach ($cent as $key => $value) {
    if ($getal > $value || $getal==$value) {
        $over=round($getal/$value);
        $getal=$getal%$value;
        print($over. " x ". $value ." cent".PHP_EOL);
    }
}

?>