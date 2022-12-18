<?php
    // while loop
    echo "while loop" . "<br>";

    $num = 1; // initial counter
    while($num < 5){ // condition
        // loop body
        echo $num . ": the number is less than 5." . "<br>";
        $num++; // update statement
    }
    echo "<br><br>";



    // do while loop
    echo "do while loop <br>";

    $num2 = 1; // initial counter
    do{
        // loop body
        echo $num2 . ": the number is less than 5." . "<br>";
        $num2++; // update statement
    }while($num2 < 5); // condition
    echo "<br><br>";



    // for loop
    echo "for loop <br>";
        /* for(initial_counter;  condition;  update_statement){
                loop body
        } 
        */

    // $num3 = $_POST['num3'];

    for($num3 = 1; $num3 < 5; $num3++){
        echo $num3 . ": the number is less than 5. <br>";
    }
