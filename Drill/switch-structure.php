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
    switch ($grade) {
        case ($grade<=4):
            echo "This work is really bad. What a dumb idiot!";
            break;
        case ($grade>=5 && $grade<=9):
            echo "This is not sufficiant. More studying is required.";
            break;
        case ($grade==10):
            echo "Barely enough!";
            break;
        case ($grade>=11 && $grade<=14):
            echo "Not bad!";
            break;
        case ($grade>=15 && $grade<=18):
            echo "Bravo, bravissimo!";
            break;
        default:
            echo "Too good to be true: confront the cheater!";
    } 
}
?>