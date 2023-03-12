<?php
function remove_char($sentence, $char)
{

    $sentence = str_replace(strtolower($char), '',  strtolower($sentence));
    return $sentence;
}

echo remove_char("ElddzeroD WebDD ddSchool", "d") . '<br>'; // Elzero Web School
echo remove_char("ElxzeroX Web Sxchool", "x") . '<br>'; // Elzero Web School
echo remove_char("Elzero@ Web@@ @@School", "@") . '<br>'; // Elzero Web School


echo "<br>=================<br>";

function remove_char2($sentence, $c)
{
    $array = str_split($sentence);
    $newSentence = "";

    foreach ($array as $char) :
        if ($char !== strtolower($c) && $char !== strtoupper($c)) {
            $newSentence .= $char;
        }
    endforeach;

    return $newSentence;
}

echo remove_char2("ElddzeroD WebDD ddSchool", "d") . '<br>'; // Elzero Web School
echo remove_char2("ElxzeroX Web Sxchool", "x") . '<br>'; // Elzero Web School
echo remove_char2("Elzero@ Web@@ @@School", "@") . '<br>'; // Elzero Web School