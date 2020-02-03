<?php
echo("Hoeveel stapels wil je hebben?") . PHP_EOL;
$a = readline("");
 for ($i = 1; $i <= $a; $i++) { 
    for($j = 1; $j <= $i; $j++){
        echo("*");
    }
    echo("").PHP_EOL;
 }
?>