<?php

$num = 9;
echo "Tabuada do número $num" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
        $res =  $num * $i;
        echo "$num x $i = $res" . PHP_EOL;
}