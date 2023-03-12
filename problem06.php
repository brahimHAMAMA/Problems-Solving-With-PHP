<?php

function longest_word_in($sentence)
{
    $array = explode(" ", $sentence);

    $j = 0;
    $word = $array[$j];
    for ($i = 1; $i < count($array); $i++) :
        if (strlen($array[$i]) > strlen($array[$j])) {
            $word = $array[$i];
        }
    endfor;
    return $word;
}

echo longest_word_in("In Programming We Love Elzero Academy Tooooooooooo Much");

echo "<br>=================<br>";