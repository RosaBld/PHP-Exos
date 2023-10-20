<html>
    <form method='post'>
        <div>
            <label for='animal'>What are you?</label>
            <br>
            
            <input type='radio' id='human' name='animal' value='human'/>
            <label for='human'>Human</label>

            <input type='radio' id='cat' name='animal' value='cat'/>
            <label for='cat'>Cat</label>

            <input type='radio' id='unicorn' name='animal' value='unicorn'/>
            <label for='unicorn'>Unicorn</label>
        </div>

        <br>
        <input type='submit' name='submit' value='Answer'>
    </form>
</html>

<?php
    if (isset($_POST['animal'])) {
        $animal=$_POST['animal'];
        $gif=($animal=='human') ? 'https://media.giphy.com/media/3o85g2ttYzgw6o661q/giphy.gif':(($animal=='cat')?'https://media.giphy.com/media/8CFKqeK9vks3C/giphy.gif':'https://media.giphy.com/media/lN1MTl03Qls145LJ3w/giphy.gif');
    }
    echo "<img src='$gif'/>"; //to display the img.gif 
?>