<?php

echo 'Data Types' ."<br/>";

echo "<a href='index.php'>Home</a>" . "<br/>";
echo "<a href='variables-and-constants.php'>Variables & Constants</a>" . "<br/>";
echo "<a href='conditional-statements.php'>Conditional Statements</a>" . "<br/>". "<br/>";

//3 Main data types

//Scalar
    //Boolean
        true;
        false;

//Integer
        123;
        -123;

//Float
        1.3;
        -1.2;
        1E-1;

//String
    $var = 123;
    echo 'This is a string, single quotes do not process the text e.g $var' . "<br/>";
    echo "This is also a string, double quotes mean string will be processed e.g $var". '<br/>';


//Compound
    //Array
    // [];    //like java
    // Arrays start from i=0
    $testArray = array(1,5,7);
    echo $testArray[2] . "<br/>"; //should print 7
    echo 'The above should be 7 then this on a new line' . "<br/>";

    $mapArray = [
      '1st' => 34,
      '2nd' => 45,
      '3rd' => 222
    ];
    echo $mapArray['2nd'] . '<br/>';
    echo 'should be 45 above, using a map array' .'<br/>';



    //Object
    //Defining an object
    $obj = new stdClass();
        //$obj is an instance of stdClass
        // ( stdClass is a generic empty class build into php, used when casting to other types of objects)
    $obj ->first = 100;
    echo $obj ->first . "<br/>";
    //The above has given the obj a variable called first and defined it as '100' then echoed it.


    //Creating a class to instantiate an object and create a function

    Class yeetClass {

        public function yeety(){

            return 'myFuncValue';

        }
    }

    $objFromClass = new yeetClass();
    echo $objFromClass -> yeety() . "<br/>";

    //the above created a class called yeetClass, this class has a function called yeety
    //next i instantiated and object call objFromClass, this is an instance of the yeetClass
    //then i echoed the valued of the function yeety

    //Final way to instantiate an object
    //(object) null;
    //Creates a null and casts it as an object, skips the use of constructor

    //Special
    //Null
    $nullValue = null;
    var_dump($nullValue);
    //The above created a variable called nullValue and assigned null or no value,
    //var_dump will dump the value of the var to the browser

    echo "<br/>";

    var_dump(isset($nullValue));
    //this line checks if the var being passed has a value set to it, should return false

    echo "<br/>";

    var_dump(empty($nullValue));
    //checks if var is empty, should be true

