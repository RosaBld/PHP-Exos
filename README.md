# Introduction

This repo is a meadley of the differents exercices in PhP we had to do.

We started easy, by learning how to use a web development environment with Apache2 and MySQL database (in my case by using WAMPServer).

So let's seen what we had to do!

## Statements

### Variables

1. Let's Write it out!

> - go into the folder served by your Web server (on Ubuntu, it often is /var/www/html or /htdocs or /public
> - Create a folder variable and inside, a file called humans.php containing this piece of code :
```php
  <html>
    <head><title>Hi!</title></head>
    <body>
  	  <?php if (isset($_GET['name'])){ ?>
    	  <h1>Aloha<?php echo $_GET['name']; ?>!</h1>
   	  <?php } ?>
    
    </body>
  </html>
  ```

> Create a file `called variable_types.php` and try to do this:
>
> 1. Store your first name in a variable, then display its value (`echo`) in a `<p>` html tag so that the screen shows:
>> Store your first name in a variable, then display its value (echo) in a `<p>`
> 2. Then add another variable to contain your age, then display it in a second `<p>` tag :
>> I am ____ years old.
> 3. Then add yet another variable that describes the colour of your eyes, then display it in another `<p>` tag :
>> My eyes are ____
> 4. Then add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ?
> 5.Display the value stored at the first index in another `<p>` tag :
>> The first person in my family is ____
> 6. And finally : what type of variable would you use to store the information whether you are hungry or not ?

### PhP Drill!

1. 1. Fix this code!

Code given, fixed it!

1. 2. Improve it!

> Let's now make our script a little smarter by allowing more than 2 possible values. The room could be either "health hazard", "filthy", "dirty", "clean", "immaculate" in that order. Store them in an array `$possible_states`.
>
> Use a `if/ elseif / else` for that. Invent the messages to display for each use case.
>
> Need a headstart? Here is a starting base, that you'll need to fix.

2. Display different greeting messages depending on the time of the day!

> Write a script that implements these specifications :
>
> -   If the time is between 05h00 and 09h00, display "Good morning !".
> -   If the time is between 09h01 and 12h00, display "Good day !".
> -   If the time is between 12h01 and 16h00, display "Good afternoon !".
> -   If the time is between 16h01 and 21h00, display "Good evening !".
> -   If the time is between 21h01 and 04h59, display "Good night !".
>
> Tip: you can combine multiple conditions (using `AND / OR`).

3. Display different greetings according to the user's age!

> Here is the user experience we aim for :
> First, users see a form asking for their age :
>
>>    Please type your age : __
>
> When they submit the form, the page displays the right message:
>
> -    if age is less than 12 years old, display "Hello kiddo!"
> -    if age is between 12 and 18 years old, display "Hello Teenager !"
> -    if age is between 18 and 115 years old, display Hello Adult !"
> -    if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
>
> Have both the form and the processing script in the same file. Use the GET method.

4. Display the different greetings according the user's age and gender!

> Improve the previous form to add another question: "Man or Woman?". Use an input of type `radio` to capture the data.
>
> If gender is "Woman", the displayed message should be adapted accordingly.
>
> For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".
>
> Do the same for all the other age ranges.
>
> Tip: You can use nest conditionnal structures inside others.

5. Display different greetings according to the user's age, gender and mothertongue!

> Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type `radio` to capture the data. Possible answers: "yes" or "no".
> 
> Then modify your form processing script to implement this :
>
> -    If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
> -    If the answer is "no", display "Aloha boy" or "Aloha Girl"
>
> Adapt all the other answers accordingly, using "Aloha" instead of "Hello".

6. The girl soccer team!

> You want to create a soccer team for girls between 21 and 40 years old.
>
> Create a form asking for the age, gender and name of the person. Use the `$age` and `$gender` variables in an `if/else` to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.

7. Achieve the same, without the ELSE!

> A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an `if` statement (without the `else`), and a default value that changes only if the condition is true.

8. "School sucks!" exercice!

> Start a new form that would allow a (nasty) teacher to grade a student.
>
> It would display a different message according to the number annotated :
>
> -    note below 4 : "This work is really bad. What a dumb kid! "
> -    note between 5 and 9 : "This is not sufficient. More studying is required."
> -    note equals 10 : "barely enough!"
> -    note is 11, 12, 13 or 14 : "Not bad!"
> -    note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
> -    note is 19 or 20 : "Too good to be true : confront the cheater!"

9. The switch structure

> `If/elseif/elseif/else` statements are hard to read. Fortunately, you can use another conditional structure: the `switch`.
>
> It makes for a much readable code. There is a catch though : you can only use it to test equalities, it's not possible to use other operators (`< > <= >= !=`).
> 
> 1. Read more on this really cool structure in the PHP manual : switch.
> 2. Create a new file `switch-structure.php` and do the previous exercise,using a switch structure instead of the if/else.

10. Ternary exercices

> - In a new file `ternary.php` declare a `$hello` variable which value is a greeting message. That greeting message depends on another variable `$gender`, which can either be "M" or "F". Finish by displaying the resulting message.
>
> - In a new file `unicorn.php`, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.


### Consolidation challenge: Face excuse notes generator

> With the help of a condition, generates the appropriate excuse word based on the answers to the form. The parent will only have to copy and paste the answer to write his or her letter of apology.
>
> __Bonus__
> Provide 5 apologies for each reason and ensure that one of the 5 apologies is randomly selected and included in the letter of apology.

### Array

1.
> -    Create an array representing your family members
> -    Display its content using the print_r function
> -    Then, create an array describing your favourite recipes
> -    Display its content using the print_r
> -    Then, create an array listing your favourite films
> -    Then, using that array, display only the one film you like best using its index

2.
> -    Describe yourself using an associative array: `$me`. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.
> -    Let's add your favourite movies to the `$me` array
> -    Add your hobbies using an array to your `$me` array
> -    Then, after the $me array, create a second array with the same keys as yours, to describe your `mother` : the `$mother` array (make it someone else if you prefer).
> -    Make sure to also describe her hobbies
> -    Then, below that, assign the `$mother` array to a new key in your `$me` array : let's call that key `'mother'`.
> -    Now, below that, check the content of `$me` using `print_r()`. (wrap it inside a `<pre>` html tag to make it more legible ). It should show a multi-dimensional array, where the `mother` array are values of your mother key.
> -    Read multiple times your code to make sure you understand what happens.

3.
> A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby. Try to find the right way to add that new hobby to your array's `'hobbies'` key.

4.
> You decide you need a reset and change your last name to `Durand`. How would you update your array ?

5.

> One day, you meet your `$soulmate`. Describe your soulmate as an array, with the same keys as yours.
>
> Now, I wonder ... What are the potential hobbies your child could have ? It turns out there was a documentary on TV the other day, in which an expert in Genetics explained 2 possible scenarios that could answer that question :
>
> -    either intersection (only the hobbies common to both arrays)
> -    or a fusion (all the hobbies of each array together)
>
> Try to guess the name of the 2 PHP functions that can make these two operations and look it up in the online PHP Manual. (Tip: both start with `array_`). Test their syntax and try to answer the question.
>
> Here is a headstart:

```php
$me = array(...);
$soulmate = array( ... );

// perform array operation
$possible_hobbies_via_intersection = array_...;
$possible_hobbies_via_merge = array_...;

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
```

6.

> Let's get more fluent in array manipulation : add, delete and replace elements.
>
> For each of these exercises, use `print_r()` or `var_dump()` to check if the result corresponds to the specifications.
>
> -    Create an array  `web_development` containing a `'frontend'` and a `'backend'` key. Assign an empty array to each key.
> -    Then, add a line underneath that pushes `'xhtml'` in the right array.
> -    Then, add a line underneath that pushes `'Ruby` on Rails' in the right array.
> -    Then, add a line underneath that pushes `'CSS'` in the right array.
> -    Then, add a line underneath that pushes `'Flash'` in the right array.
> -    Then, add a line underneath that pushes `'JavaScript'` in the right array.
> -    Then, add a line underneath that replace `'xhtml'` by `'html'`.
> -    Then, add a line underneath that removes `'Flash'` from the array.

### Loops!

1. Foreach
> Here is an array :

```php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
```
>
> Using `foreach`, build a loop that displays each element of the array
> Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a `<br>` to go to the next line. The result should be :


```php
I code
You code
He/She codes
We code
You code
They code
```

2. While Loop.

Trying a while loop to practice (but not a big one cause my computer can't take it).

3. For Loop.

Trying a for loop to practice (but not a big one cause my computer can't take it).

Recap:

> - Write a script that prints the numbers from 1 to 120 using `while` 
> - Write a script that prints the numbers from 1 to 120 using `for` 
> - Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
> - Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...
>
> - Now, edit your array so that it becomes an associative array: use the country ISO code as array key, and the country name as value. For example :
```php
$pays = array('BE'=>'Belgique');` 
```
> - Now, adapt your html select box so that the country ISO code becomes the `<option>` element value, and the country name be the visible part of the `<option>`.
> - Done! Congratz: that's exactly how an html select box should be done !


### Fonctions!

> - Use a function that capitalizes the first letter of the provided argument. Example: `"émile"` should return `"Émile"`
> - Use the native function allowing you to display the current year.
> - Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
> -Crée a "Sum" function that takes 2 numbers and returns their sum.
> - Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : `"Error: argument is the not a number."`
> - Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
> Example: `"In code we trust!"` should return: `ICWT`).
> - Create a function that replaces the letters "a" and "e" with "æ". Example: `"caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"` should respectively return `"cæcotrophie"`, `"chænichthys"`,`"microsphæra"`, `"sphærotheca"`.
> - Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca
> - Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
>
```php
echo feedback("Incorrect email address", "error");
```
> which will produce this html :
```php
<div class="error">Error: Incorrect email address.</div>
```
>
> - Improve that function by giving the default class the value of `"info"`. Look into the documentation documentation php.
> - Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
> - De-capitalize the string : `"STOP YELLING I CAN'T HEAR MYSELF THINKING!!"`
> - In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function `calculate_cone_volume`:
```php
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
```

##AZ-Store!

Group project that you can check [here](https://github.com/antoinel74/AZ-Store)!


---

#### Languages

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
<!-- ![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) -->
