<?php


$words = array("abcd", "abc", "de", "hjjj", "g", "wer");


$shortestLength = strlen($words[0]);
$longestLength = strlen($words[0]);

foreach ($words as $word) {
    $wordLength = strlen($word);

    if ($wordLength < $shortestLength) {
        $shortestLength = $wordLength;
    }

    if ($wordLength > $longestLength) {
        $longestLength = $wordLength;
    }
}

echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
