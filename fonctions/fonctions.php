<?php

function capitalize($name) {
    return ucfirst($name);
    
}
echo capitalize('maria');

echo '<br>';
echo '<br>';

function displayYear() {
    return date('Y-m-d H:i:s');
}
echo displayYear();

echo '<br>';
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

echo '<br>';

function generateWord($minLength, $maxLength) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $length = rand($minLength, $maxLength);
    $word = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($alphabet) - 1);
        $word .= $alphabet[$index];
    }
    return $word;
}

$word1 = generateWord(1, 5);
$word2 = generateWord(7, 15);

echo "<h2>Generate a new word</h2>";
echo "<p>$word1 $word2</p>";
echo "<button onclick=\"location.reload()\">Generate</button>";

echo '<br>';
echo '<br>';

function decapitalize($string) {
    $string=strtolower($string);
    $string=ucfirst($string);
    return $string;
}
echo decapitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
echo '<br>';
echo '<br>';

function coneVolume($radius, $height) {
    $volume = (1/3) * pi() * pow($radius, 2) * $height;
    $message="The volume of the cone which ray is $radius and height is $height is: ";
    return "$message $volume";
}
echo coneVolume(5, 10, "The volume of the cone is: ");

echo '<br>';
echo '<br>';

?>