<?php
$familyMembers=['Didier', 'Martine', 'David', 'Aurélie', 'Rosalie'];
print_r($familyMembers);

echo '<br>';

$favoriteMovies=['Mulan', 'Pocahontas', 'Anastasia', 'Gardian of the galaxy vol 3', 'Hachi'];
print_r($favoriteMovies[1]);

echo '<br>';

$me=array(
    'age'=>29,
    'firstname'=>'Rosalie',
    'lastname'=>'Boulard',
    'favoriteSeries'=>array('Avatar The Last Airbender', 'Friends', 'Rick&Morty', 'Gravity Falls', 'Grace and Franky'),
    'favoriteseason'=>'spring',
    'likesoccer'=>false,
    'hobbies'=>array('video games', 'reading', 'piano', 'drawing', 'eating'),
);

$mother=array(
    'age'=>62,
    'firstname'=>'Martine',
    'lastname'=>'Laloux',
    'favoriteMovies'=>array('Outlander', 'Anne with an E', 'Bridgerton Chronicles', 'Downtown Abbey', 'The Crown'),
    'favoriteseason'=>'summer',
    'likesoccer'=>false,
    'hobbies'=>array('knitting', 'gardening', 'reading', 'cooking'),
);

$soulmate=array(
    'age'=>37,
    'firstname'=>'Jean',
    'lastname'=>'Wilfart',
    'favoriteSeries'=>array('American Horror Story', 'American Dad', 'Rick&Morty', 'Family Guy', 'Malcolm In the Middle'),
    'favoriteseason'=>'automn',
    'likesoccer'=>false,
    'hobbies'=>array('video games', 'game board', 'Magic the Gathering', 'roleplaying', 'eating'),
);

$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"], $soulmate["hobbies"]);

$myHobbiesCount=count($me['hobbies']);
$momHobbiesCount=count($mother['hobbies']);
$totalHobbies=$myHobbiesCount + $momHobbiesCount;
echo $totalHobbies;

$me['hobbies'][]='taxidermy';
$me['lastname']='Durand';

$web_development=array(
    'frontend'=>[],
    'backend'=>[],
);

$web_development['frontend'][]='xhtml';
$web_development['backend'][]='ruby on rails';
$web_development['frontend'][]='CSS';
$web_development['frontend'][]='flash';
$web_development['frontend'][]='JavaScript';
$web_development['frontend'][0]='html';
unset($web_development['frontend'][2]);

echo '<pre>';
print_r($me);
print_r($mother);
print_r($soulmate);
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
print_r($web_development);
echo '</pre>';
?>