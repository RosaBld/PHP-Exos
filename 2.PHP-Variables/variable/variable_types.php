<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>PHP exo 2</title>
    </head>
    <body>
        <?php
            $name="Michel Cuisse";
            $age="42";
            $eyes="green";
            $family=array(
                0=>"Mathieu",
                1=>"Marc",
                2=>"Murielle",
                3=>"Martine"
            );
            $isHungry=true;
        ?>

            <p>Hi! My name is <?php echo $name;?>.</p>
            <p>I am <?php echo $age;?> years old.</p>
            <p>My eyes are <?php echo $eyes;?></p>
            <p>The first person in my family is <?php echo $family[0];?></p>
            <p>Am I hungry ? <?php echo $isHungry;?></p>
    </body>
</html>
