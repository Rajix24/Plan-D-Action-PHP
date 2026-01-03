# Plan-D-Action-PHPa

WHAT IS PHP:

pls read this file because it has all the information that I learn in this plan d'action
what is php:
php stand for hypertext proseccor programe that is scripting langauge, can esembled with html element, to enter to php mode you can use tag in file php 
<?php // ...code ?>
<?php is the open tag tag that u start the code 
?> is the close tage in php is the end of your code php

What php can do?
php is foucse in the side of server script it can to do collecting data and generate daynamic page 
php can use in all the operator systemes (linux win macos)
php suport all the web server like Apache, IIS

DIFFRENTS PHP PROCEDURAL AND OOP:

PHP PROCEDURAL:

php procedural way of write code the procedural is foucse on the function and varibles; the old way of coding like:
<?php
    $var = "younes raji;
    function sayhi($name):string {
        return $name.' say hi to you';
    }
    sayhi($var);
?>
output: {string }: younes raji say hi to you

PHP OOP:

php oop is the modern way for build program is probleme with prosedural is in the large programs the programmers get confuse code be come to large and thier 
don't know what is the start and end so for that it comme the OOP is method of writing code; is base on class and obj the role of OOP is to capsulate varaibles and function to one object 

Lifecycle of a PHP request:
 as I understand life cyrcl of php request 
user enter URL path of the file this is the start of request (user create request);
request go to web server read this path is that end with .php request send to php engine
engin start to excute the script of file and load and requerte or links (ex: bootstrap)
read all the globle varaibles($_POST, $_GET)
handel connection to database and all that
then engine send respon to the request to browser
then is affich what in the php


STUCTURE OF SIMPLE PROJECT PHP  

to start any writing any code in file php u must to open tag <?php and closed ?> here is simple demo:
<?php
 $name = "Rajix"
 echo $name;
>
you can Also write html in the php file but you need to be outside the tag <?php .. ?> 
if you want to write only php code is the best thing to do is to open tag and not colse 


VARIABLES IN PHP:
to declare variable in php u need to put $ then name of the variabe, in php you don't need to declare the tyle of variable is automatic like javaScript
so that maening you can declar and variable with any type it will be know
example: 
<?php
    $name = "Rajix";
    $id = 234;
    $working = true;
    $tal = 1.82;
    $friends = ["yassir", "aymen"];
?>

CONCATENATION:

CONCATINATION is link to variables or to string with '.' dot example

<?php
    function test ($name){
        return 'my name is younes raji, and I'm '. $age . 'old';
    }
?>

VAR_DUMP() 
var_dump function is function in php that return variable inside it show all info about vaiable type contant and key if it array and all that

ISSET()
it function in php that is check if the variable inside are decleare are thier any value inside it it return true or false bool
NB is you declare variable and you put value to NULL this isset function will reture true

EMPTY()
it function in php that check if the variable are empty or not in it's empty return will be true if it not empty will return false

CONDITIONS 

IF CONDITION:
if is for check if the condition that you enter are true if it's it will do what is inside if  not it will scap 

OPERATOR:
operator in php are the same in any other langauge && is and || is or  

COMPARAISON:
(==) is check if tow variable are equal 
(===) is check if two variable are equal and are they has the same type
(!=) that is mean is not equal are the two variable not equal

LOOPS

FOR LOOP 
for loop it the base loop it loop on array indexial and you give to start and the end

WHILE LOOP
you put condition if condition are true it will loop and is consition are false it will stop 

DO  WHILE LOOP
is the same as wile loop the differnce is timing while loop is check the condition then it will run code but the do while is excute the code then check is the conditon stay true; if it is it will loop again is it not it will stop 


FOREATCH LOOP 
is loop the same as other but it work in array assos is array assos has key as string the for loop can do in to 
but in forEach loop is can loop it to array and is can output the keys and the variable at the same time so it is usefull in array assos


METHODS & GLOBLE VARIABLE
$_GET
GET is method that diffence in php transport data from file to other file in URL 
GET METHOD not used in sansative data like email and password 
$_GET is the gloable variable is array in first empty and when user put data in form $_GET will have this variables as array assos 
this keys are the name of input valur are the value of the input

$_POST
POST mehods is the same are $_GET but the differece is in post methode data don't show in URL that make it more secure and more usefull
$_POST is array the same plrincipe of $_GET

$_SERVER
is super global varaible is array assos that containe all indformation about http that that is usering and port serve name and method that you send data get or post
is you want to see all that you can write this:
var_dump($_SERVER);

SESSIONS
sessions in storage that is small 5 MB is empty array that you can enter any data you want any file in your project 
if you want to use session:
session_start() //to start session
$_SESSION['key'] = 'valuer';

Sessions

