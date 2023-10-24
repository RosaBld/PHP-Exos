<?php

function capitalize($name) {
    return ucfirst($name);
    
}
echo capitalize('maria');

echo '<br>';

function displayYear() {
    return date('Y-m-d H:i:s');
}
echo displayYear();

echo '<br>';

function sum($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a+$b;
    } else {
        return 'Error: argument is not a number';
    }
}
echo sum(2, 5);
echo '<br>';
echo sum('2', 'hello');
echo '<br>';
echo sum ('2', '7');

echo '<br>';

function acronym($string) {
    $words=explode(' ', $string);
    $acronym='';
    foreach ($words as $word) {
        $acronym .= ucfirst($word[0]);
    }
    return $acronym;
}
echo acronym('In code we trust!');
echo'<br>';
echo acronym("I'm just a baby!");
echo '<br>';

function replace($words) {
    $words=str_replace('ae', 'æ', $words);
    return $words;
}
echo replace('caecotrophie');
echo '<br>';
echo replace('chaenichthys');
echo '<br>';
echo replace('microsphaera');
echo '<br>';
echo replace('sphaerotheca');
echo '<br>';

echo '<br>';

function rereplace($words) {
    $words=str_replace('æ', 'ae', $words);
    return $words;
}
echo rereplace('cæcotrophie');
echo '<br>';
echo rereplace('chænichthys');
echo '<br>';
echo rereplace('microsphæra');
echo '<br>';
echo rereplace('sphærotheca');
echo '<br>';

echo '<br>';

function feedback(string $message, string $class = "info"): string
{
    return "<div class=\"$class\">" . ucfirst($class) . ": $message.</div>";
}
echo feedback("Incorrect email address", "error");
echo feedback("Incorrect email address");
echo feedback("Incorrect email address", "warning");
echo feedback("Incorrect email address", "success");
echo feedback("Incorrect email address", "info");
echo "</br>";


?>