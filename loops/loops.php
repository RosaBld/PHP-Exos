<?php

$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key => $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);

// 1.
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $key => $pronoun) {
    $code;
    $code = ($key==2) ? 'codes':'code';
    echo $pronoun, ' ', $code;
    echo '<br>';
};

echo '<br>';
// 2.

$num = 1;
while ($num <= 5) {
    echo $num . ". This is a test <br>";
    $num++;
};

echo '<br>';
// 3. 

for ($amount_of_lines = 1; $amount_of_lines <= 10; $amount_of_lines ++) {
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
}

echo '<br>';

// Recap:

$number=1;
while ($number<=120) {
    echo $number;
    echo '<br>';
    $number++;
}
echo '<br>';

for ($nums=1; $nums <= 120; $nums++) {
    echo $nums .'<br>';
}
echo '<br>';

$beCode=array('Bastien', 'Vens', 'Layla', 'Robin', 'Valentin', 'Virginie', 'VDW', 'Tim', 'Lucas', 'Lidwine', 'Elisabeth', 'Antoine', 'Pierre', 'Mathias', 'Tom', 'Justine', 'Elodie', 'Justin', 'Carole', 'Okly', 'Stéphane', 'Kimi');
foreach ($beCode as $name) {
    echo $name;
    echo '<br>';
}
echo '<br>';

$countries=array('Belgium', 'Italy', 'Austria', 'Japan', 'Canada', 'Korea', 'Finland', 'Moroco', 'Algeria', 'Chile');
?>

<html>
    <form method='get'>
        <select name='countries'>
            <?php
            foreach ($countries as $key=>$value) {
                ?>
                <option value='<?php echo $key; ?>'><?php echo $value; ?> </option>
                <?php
            }
            ?>
        </select>
    </form>
</html>