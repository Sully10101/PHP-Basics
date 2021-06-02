<?php

error_reporting(E_ALL);

echo 'Variables & Constants' ."<br/>";

echo "<a href='index.php'>Home</a>" . "<br/>";
echo "<a href='data-types.php'>Data Types</a>" . "<br/>";
echo "<a href='conditional-statements.php'>Conditional Statements</a>" . "<br/>". "<br/>";
//Variables & Constants

//Variable is a mutable value, a value that can change
//Constant is the opposite, its immutable & cannot be changed


//Variable
$myVariable = "a mutable value";
echo $myVariable . "<br>";

//$ - Signifies the definition of a variable
//myVariable - name of the var, must begin with a letter
//= - assignment operator


//Constant

//2 ways to define a constant:
    //Using the define function
    //Creating a constant within a class

//Define Function

define('constant', 'a constant');
define('asd', 123);
echo constant . "<br>";
echo asd . "<br>";
//define - the function
//constant - name of the constant, must be a string
//a constant - the value to assign to the constant
//Dont need the $ to reference a constant

//Trying to reassign a constant
define('constant', 456);
echo constant;

//This still echoes "a constant" as you cannot change a constant
//The error_reporting line at the top will let all error messages show, for this reassigning one it shows:
//"Notice: Constant constant already defined in /var/www/html/variables-and-constants.php on line 40
//a constant"

