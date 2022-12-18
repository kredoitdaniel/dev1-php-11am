<?php
    // if conditional

    // comparison operators
    # Equal (==) --> true if both values are equal
    $a = 7;
    $b = 7;
    if($a == $b){
        echo "They are equal";
    }
    echo "<br>";


    #Identical (===) --> true of two variables have the same value and data type
        # "5" -> numeric string (a number that is inside of the quotation)
    $c = 5;
    $d = 5;
    if($c === $d){
        echo "two variables have the same value and data type";
    }
    echo "<br>";


    #Not Equal (!=) -> true if variables are not equal
    $e = 6;
    $f = 7;
    if($e != $f){
        echo "True, variables are not equal";
    }
    echo "<br>";


    #Greater than (>) --> bigger than the other variable
    $g = 10;
    $h = 5;
    if($g > $h){
        echo $g . " is greater than " . $h;
    }
    echo "<br>";


    #Less than (<) --> lower than the other vaiable
    $i = 10;
    $j = 20;
    if($i < $j){
        echo $i . " is less than " . $j;
    }
    echo "<br>";


    #Greater than or equal (>=)
    $k = 30;
    $l = 30;
    if($k >= $l){
        echo $k . " is Greater than or equal to " . $l;
    }
    echo "<br>";


    #Less than or equal to (<=)
    $m = 30;
    $n = 30;
    if($m <= $n){
        echo $m . " is less than or equal to " . $n;
    }
    echo "<br><br>";



// logical operators
    #&& and
    if(2 > 1 && 6 < 10){
        echo "True";
    }
    // true && true = True
    // false and true = false
    // true && false = false
    // false && false = false

    echo "<br>";


    // || or
    if(4 < 2 || 3 > 2){
        echo "True";
    }
    // true || true = true
    // false or true = true
    // true || false = true
    // false || false = false

    echo "<br><br>";



    // if... else...
    $x = 100;
    $y = 200;
    if($x > $y){
        echo "True";
    }
    else{
        echo "False";
    }

    echo "<br><br>";


    // if... elseif ...else
    $grade = 101;

    if($grade >= 75 && $grade <= 100){
        echo $grade . " Passed!";
    }
    elseif($grade >= 60 && $grade <= 74){
        echo $grade . " Failed!";
    }
    else{
        echo $grade . " Invalid Grade!";
    }


