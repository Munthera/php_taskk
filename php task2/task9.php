<?php
function find_first_different_char($str1, $str2) {
    $min_length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $min_length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }

    if (strlen($str1) !== strlen($str2)) {
        $diff_pos = $min_length + 1;
        $diff_char = strlen($str1) > strlen($str2) ? $str1[$min_length] : $str2[$min_length];
        return "The strings have different lengths. The difference is at position " . $diff_pos . ": \"" . $diff_char . "\" vs empty.";
    }

    return "The strings are identical.";
}

$string1 = 'dragonball';
$string2 = 'dragonboll';

$result = find_first_different_char($string1, $string2);
echo $result;
?>
