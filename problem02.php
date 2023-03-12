<?php

function convert($num)
{
    $arrayNum = str_split($num);

    $reverceArray = array_reverse($arrayNum);
    print_r($arrayNum);
    echo "<br>";
    print_r($reverceArray);

    $numReverce = join("", $reverceArray);
    echo "<br>";
    echo $num . "<br>";
    echo $numReverce . "<br>";
}

// Testing Ouput
convert(1529132);
