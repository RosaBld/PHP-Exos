<?php

    //series of exercices
    $temperature=10;
    if($temperature>=15) {
        $clothes='t-shirt';
        $should_I_wear_a_scarf=false;
    } else {
        $clothes='pull-over';
        $should_I_wear_a_scarf=true;
    };
    if($should_I_wear_a_scarf==true) {
        // grab_scarf_from_the_hanger();
    }
    echo $clothes;

    echo '<br><br>';
    //1.1 Clean your room!
    $room_is_filthy=true;

    if ($room_is_filthy==true) {
        echo "Yuk, Room is dirty: let's clean it up!";
        // cleanup_room();
        echo '<br>Room is clean now!';
        $room_is_filthy=false;
    } else {
        echo '<br>Nothing to do, room is neat.';
    }

    echo '<br><br>';
    // 1.2. Improve it!
    $possible_states=['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];
    $room_filthiness=$possible_states[0];

    if($room_filthiness=$possible_states[0]) {
        echo 'Yuk, room is disgustig! Lets clean it up!';
    } else if ($room_filthiness=$possible_states[1]) {
        echo '<br>yuk! room is dirty! let clean it up!';
    } else if ($room_filthiness=$possible_states[2]) {
        echo '<br>yuk! room is dirty! let clean it up!';
    } else if ($room_filthiness=$possible_states[3]) {
        echo '<br>yuk! room is dirty! let clean it up!';
    } else if ($room_filthiness=$possible_states[4]) {
        echo '<br>Nothing to do, room is clean.';
    } else {
        echo '<br>Nothing to do, room is neat.';
    }

    echo '<br><br>';
    // 2. Display a different message depending on the time of the day
    date_default_timezone_set('Europe/Amsterdam');
    $now=date('H:i');
    if($now>='5:00' AND $now<='9:00') {
        echo 'Good Morning!';
    } else if ($now>='9:01' AND $now<='12:00') {
        echo 'Good day!';
    } else if ($now>='12:01' AND $now<='16:00') {
        echo 'Good afternoon!';
    } else if ($now>='16:01' AND $now<='21:00') {
        echo 'Good evening!';
    } else {
        echo 'Good night!';
    }

    echo '<br><br>';
?>
    <!-- 3. Display different greetings accirding to the user's age 
    + 4. Display different greetings according to the user's age and gender
    + 5. Display different grentings according to the user's age, gender and mothertongue-->
<html>
    <form method='get'>
        <div>
            <label for='age'>
                What is your age:
            </label>
            <br>
            <input type='' name='age'/>
        </div>
        <div>
            <label for='gender'>What's your gender?</label>
            <br>
            <input type='radio' id='male' name='gender' value='male'/>
            <label for='male'>Male</label>
            <input type='radio' id='female' name='gender' value='female'/>
            <label for='female'>Female</label>
        </div>
        <div>
            <label for='language'>Do you speak English?</label>
            <br>
            <input type='radio' id='yes' name='language' value='true'/>
            <label for='yes'>Yes</label>
            <input type='radio' id='no' name='language' value='false'/>
            <label for='no'>No</label>
        </div>
        <input type='submit' name='submit' value='Greetings'/>
    </form>   
</html>
<?php
    if (isset($_GET['age'], $_GET['gender'], $_GET['language'])) {

        if ($_GET['gender']=='male')
            $gender='Mister';
        else
            $gender='Miss';

        if ($_GET['language']==true)
            $greeting='Hello';
        else
            $greeting='Aloha';
        
        if ($_GET['age']<12)
            echo "$greeting $gender Kiddo!";
        else if ($_GET['age']>=12 && $_GET['age']<18) 
            echo "$greeting $gender Teenager!";
        else if ($_GET['age']>=18 && $_GET['age']<115)
            echo "$greeting $gender Adult!";
        else
            echo 'Wow! Still alive? Are you a robot like me? Can I hug you?';
    }

    echo '<br><br>';
?>
    <!-- 2.6. The girl soccer team -->
<html>
    <form method='get'>
        <div>
            <label for='soccerAge'>What is your age?</label>
            <br>
            <input type='number' name='soccerAge'>
        </div>
        <div>
            <label for='genderSoccer'>What's your gender?</label>
            <br>
            <input type='radio' id='male' name='genderSoccer' value='male'/>
            <label for='male'>Male</label>
            <input type='radio' id='female' name='genderSoccer' value='female'/>
            <label for='female'>Female</label>
        </div>
        <input type='submit' name='submit' value='Send'/>
    </form>
</html>

<?php
    // if (isset($_GET['soccerAge'], $_GET['genderSoccer'])) {
    //     $soccerAge=$_GET['soccerAge'];
    //     $genderSoccer=$_GET['genderSoccer'];
    //     if ($soccerAge>=21 && $soccerAge<40 && $genderSoccer=='female') 
    //         echo "Welcome to the team!";
    //     else
    //         echo "Sorry, you do not meet the criteria to join the team.";
    // };

    // echo '<br><br>';

    // 2.7. Achieve the same, without the ELSE
    if (isset($_GET['soccerAge'], $_GET['genderSoccer'])) {
        $soccerAge=$_GET['soccerAge'];
        $genderSoccer=$_GET['genderSoccer'];
        if ($soccerAge>=21 && $soccerAge<40 && $genderSoccer=='female') 
            echo "Welcome to the team!";
        if ($soccerAge<21 || $soccerAge>=40 || $genderSoccer!='female')
            echo "Sorry, you do not meet the criteria to join the team.";
    };

    echo '<br><br>';
?>
    <!-- 2.8. "School sucks!" exercice -->
<html>
    <form method='get'>
        <div>
           <label for='grade'>Grade:</label>
           <input type='number' name='grade' min='0' max='20'> 
        </div>
        <input type='submit' name='submit' value="How's your grade"/>
    </form>
</html>
<?php
if (isset($_GET['grade'])) {
    $grade=$_GET['grade'];
    if ($grade<5)
        echo "This work is really bad. What a dumb idiot!";
    else if ($grade>=5 && $grade<=9)
        echo "This is not sufficiant. More studying is required.";
    else if ($grade==10)
        echo "Barely enough!";
    else if ($grade>=11 && $grade<=14)
        echo "Not bad!";
    else if ($grade>=15 && $grade<=18)
        echo "Bravo, bravissimo!";
    else
        echo "Too good to be true: confront the cheater!";
}
?>
