<?php

echo 'Conditional Statements' ."<br/>";

echo "<a href='index.php'>Home</a>" . "<br/>";
echo "<a href='data-types.php'>Data Types</a>" . "<br/>";
echo "<a href='variables-and-constants.php'>Variables & Constants</a>" . "<br/>". "<br/>";


//Blokes last tutorial, uploaded on 12/2018 -_-, guess he's not finishing this
//Looking at "if" & "switch" statements

echo 'If statements' . "<br><br>";

echo 'If today is an odd day this statement below will echo: odd day today 
        or if even it will echo: even i saw this one coming' . "<br><br>";

//Setting the server time zone
date_default_timezone_set('UTC');

//Echo the timezone of the server
echo 'The current timezone of the server is ' . date_default_timezone_get() . "<br>";

// Formatting the date and assigning it to a var
$date = date('m/d/Y h:i:s a', time());
echo $date . "<br>";

// Gonna try and split the $date string into an array and try to isolate the date and echo it
$explodedDate = explode('/', $date);
$just_date = $explodedDate[0];
echo "Today's date is: " . $just_date . "<br><br>";

// Test to see if it worked
// $just_date = 5;

// To test if a number is odd or even this divides by 2, the remainder is zero its even else it's odd
// % is called modulo, it divides and returns the remainder, not the same as '/' or division
if ($just_date % 2 == 0){
    echo 'Even i saw this one coming';
}
else {
    echo 'Odd day today';
;}

echo "<br><br><br>" . 'Switch Statements' . "<br>";
echo "Below will show the lowest divider of today's date if it's 5 or less else echo something." . "<br>";

switch ($just_date) {
    case $just_date%2 == 0;
        echo "2";
        break;

    case $just_date%3 == 0;
        echo "3";
        break;

    case $just_date%4 == 0;
        echo "4";
        break;

    case $just_date%5 == 0;
        echo "5";
        break;

    default:
        echo "Date does not divide by 2,3,4 or 5";
        break;
}
