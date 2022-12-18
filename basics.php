<?php
    // SINGLE LINE COMMENT
    # SINGLE LINE COMMENT
    /* 
        MULITPLE
        LINE
        COMMENT
    */


    // echo
    echo "Hello World! <br>";
    echo "<br>";
    echo 'Hello World';
    echo "<p class='text-danger'>This is using paragraph tag.</p>";
    echo "John", " Daryl";
    echo "<br><br>";

    // print
    // print "John ", "Smith"; --> print will not accept two arguments
    print "Hi this is using print";
    echo "<br><br>";


    // concatenation (',' and '.')
    echo "Tim", " ", "Jack", " ", "Aaron", "<br>";
    echo "My name is" . " " . "John " . "Smith";
    echo "<br><br>";


    // variables
    $first_name = "John";
    $last_name = 'Smith';
    $age = 21;

    echo "My name is $first_name $last_name. I am $age years old. <br>";
    echo "My name is " . $first_name . " " . $last_name . ". I am " . $age . " years old.";
    echo "<br><br>";


    // Data Types
    #  string --> sequence of characters
    $firstName = "Jack";
    $username = 'jack_82';

        #var_dump() --> diplays the data type and value
        var_dump($firstName);
        echo "<br>";
        var_dump($username);
        echo "<br><br>";

    # integer --> whole number(positive or negative) no decimal point
    $age = 21;
    $num = -4;

        var_dump($age);
        echo "<br>";
        var_dump($num);
        echo "<br><br>";

    # float / double --> with decimal point
    $pi = 3.14159;
    $distance = 4501.4;

        var_dump($pi);
        echo "<br>";
        var_dump($distance);
        echo "<br><br>";

    #Boolean --> true or false | 0:false; 1:true (used for making decisions)
    $paid_bill = true;
    $paid_fare = false;

        var_dump($paid_bill);
        echo "<br>";
        var_dump($paid_fare);
        echo "<br><br>";


    
    // Operators
        #Arithmetic
        $num1 = 10;
        $num2 = 5;

        #addition
        $sum = $num1 + $num2;
        // echo "The sum is: " . $sum;

        #subtraction
        $diff = $num1 - $num2;

        #multiplication
        $prod = $num1 * $num2;

        #division
        $quotient = $num1 / $num2;

        #modulo --> gives the remainder of the two or more value
        $mod = $num1 % $num2;

        echo "The sum of $num1 and $num2 is: " . $sum . "<br>";
        echo "The difference of " . $num1 . " and " . $num2 . " is: " . $diff . "<br>";
        echo "The product is: " . $prod . "<br>";
        echo "The quotient is: " . $quotient . "<br>";
        echo "The modulo is: " . $mod . "<br>";

        echo "<br><br>";



        // increment(++) --> add one(1) to the value
        $a = 2;
        $b = 2;

            #preincrement --> add first before displaying
            echo ++$a;
            echo "<br>";

            #postincrement --> display first before adding
            echo $b++;
            echo "<br>";
            echo $b++;
            echo "<br>";
            echo $b++;

        echo "<br><br>";


        // decrement(--) -->subtract one(1) to the value
        $c = 2;
        $d = 2;

            #predecrement --> subtract first before displaying
            echo --$c;
            echo "<br>";
            echo --$c;
            echo "<br>";

            #postdecrement --> display first before subtracting
            echo $d--;
            echo "<br>";
            echo $d--;
            echo "<br>";
            echo $d--;
?> 