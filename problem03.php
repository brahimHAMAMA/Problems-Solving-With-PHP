<?php
function remove_duplicate_words($sentence)
{
    $array = explode(' ', $sentence);

    $array = array_unique($array);
    $Word = implode(" ", $array);
    return $Word;
}

echo remove_duplicate_words("Hello Elzero Web Web Web Hello School");
// Hello Elzero Web School