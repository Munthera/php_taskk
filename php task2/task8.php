<?php
function replace_first_word($sentence, $new_word) {
    $words = explode(' ', $sentence);
    $words[0] = $new_word;
    $new_sentence = implode(' ', $words);
    return $new_sentence;
}

$sample_sentence = 'That new trainee is so genius.';
$new_word = 'Our';

$modified_sentence = replace_first_word($sample_sentence, $new_word);
echo $modified_sentence;
?>
