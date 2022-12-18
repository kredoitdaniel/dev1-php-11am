<?php
    // built-in (Internal) functions

    #abs() --> return the value into positive
    echo abs(6.7) . "<br>";
    echo abs(-6.7) . "<br>";
    echo abs(-3) . "<br>";
    echo abs(3) . "<br>";
    echo "<br><br>";

    #max() --> return the highest value
    echo max(2,4,6,8,10) . "<br>";
    echo max(22,14,56,28,10) . "<br>";
    echo "<br><br>";

    #min() --> return the lowest value
    echo min(2,4,6,8,10) . "<br>";
    echo min(22,14,56,28,10) . "<br>";
    echo "<br><br>";

    #strtolower()
    echo strtolower("KREDO") . "<br>";
    echo "<br><br>";

    #strtoupper()
    echo strtoupper("kredo") . "<br>";
    echo "<br><br>";

    #is_numeric --> checks wether a variable is a number or a numeric string
                //  returns true(1) if the variable is a number or a numeric string, otherwise returns false/nothing
                // "5" is a numeric string
    echo "is_numeric" . "<br>";
    $h = 5;
    echo is_numeric($h);
    echo "<br><br>";

    #strlen --> returns the length of a string
    echo "strlen" . "<br>";
    $char = "john_82";
    echo strlen($char);
    echo "<br><br>";


    #substr(string, start, length)
    echo "substr()" . "<br>";
    $str = 'apple';
    echo substr($str, 0, 1) . "<br>";

    echo "<br><br>";



    // user-defined functions
    function displayMsg(){
        echo "Hello world! This is user defined function";
    }

    displayMsg();

    echo "<br><br>";


    #function with arguments
    $num1 = 10;
    $num2 = 5;

    function addition($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of " . $num1 . " and " . $num2 . " is " . $sum;
    }

    addition($num1, $num2);

    echo "<br><br>";


    #function with return
    $x = 10;
    $y = 5;

    function subtract($x, $y){
        $diff = $x - $y;
        return "The difference is " . $diff;
    }

    echo subtract($x, $y);





    // function subtraction($num1, $num2){
    //     $diff = $num1 - $num2;
    //     echo "The sum of " . $num1 . " and " . $num2 . " is " . $diff;
    // }


    

    // if(isset($_POST['compute'])){  
    //     $num1 = $_POST['num1'];
    //     $num2 = $_POST['num2'];
        
    
    //     echo "<div class='card card-body bg-primary text-white text-center mx-auto mt-3 w-25'>";
    //     echo "The sum is: " . addition($num1, $num2);
    //     echo "The difference is: " . subtraction($num1, $num2);
    // }
?>
