<?php

function find_missing_letter_in($letters)
{
    $alpha = '';
    foreach (range('a', 'z') as $letter) {
        $alpha .= $letter;
    }

    $start = strpos($alpha, $letters[0]);

    for ($i = 0; $i < strlen($letters); $i++) {
        if ($letters[$i] !== $alpha[$start + $i]) {
            return $alpha[$start + $i];
        }
    }
    return "No Missing Letter In Sequence";
}

// Testing Ouput
echo find_missing_letter_in("adefghi") . "<br>"; // f
echo find_missing_letter_in("defgi") . "<br>"; // h
echo find_missing_letter_in("xyz") . "<br>"; // No Missing Letter In Sequence