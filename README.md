# Introduction

This repo is a meadley of the differents exercices in PhP we had to do.

We started easy, by learning how to use a web development environment with Apache2 and MySQL database (in my case by using WAMPServer).

So let's seen what we had to do!

## Statements

### Variables

1. Let's Write it out!

> - go into the folder served by your Web server (on Ubuntu, it often is /var/www/html or /htdocs or /public
> - Create a folder variable and inside, a file called humans.php containing this piece of code :
> ```php
  <html>
    <head><title>Hi!</title></head>
    <body>
  	  <?php if (isset($_GET['name'])){ ?>
    	  <h1>Aloha<?php echo $_GET['name']; ?>!</h1>
   	  <?php } ?>
    
    </body>
  </html>
  ```
>
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

> Create a form asking for the age, gender and name of the person. Use the `$age` and `$gender` variables in an `if/else` to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.

7. Achieve the same, without the ELSE!

> A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an `if` statement (without the `else`), and a default value that changes only if the condition is true.

8. "School sucks!" exercice!

> Start a new form that would allow a (nasty) teacher to grade a student.
>
> It would display a different message according to the number annotated :

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




---

#### Languages

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
