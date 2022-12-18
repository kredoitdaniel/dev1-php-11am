<?php

    // indexed array

    $fruits = ["Banana", "Apple", "Orange", "Mango"];
    $fruits[0] = "Banana";
    $fruits[1] = "Apple";
    $fruits[2] = "Orange";
    $fruits[3] = "Mango";

    print_r($fruits);
    echo "<br>";
    echo count($fruits);
    echo "<br>";

    #individual display
    echo $fruits[0];
    echo "<br>";
    echo $fruits[3];
    echo "<br>";
    echo $fruits[2];
    echo "<br><br>";

    #display all
    foreach($fruits as $fruit){
        echo $fruit . "<br>";
    }
    
    echo "<br><br>";



    // associative array
    $ages = ["Mark" => 20, "Jackson" => 26, "Lucas" => 21];
    $ages['Mark'] = 20;
    $ages['Jackson'] = 26;
    $ages['Lucas'] = 21;

    print_r($ages);
    echo "<br>";

    #individual display
    echo $ages['Mark'] . "<br>";
    echo $ages['Lucas'] . "<br>";

    echo "<br><br>";


    #display all
    foreach($ages as $name_key => $age_value){
        echo $name_key . " is " . $age_value . "<br>";
    }

    echo "<br><br>";



    // 2DF Associative array
    $markets = [
        "round" => ["fruit1" => "Orange", "fruit2" => "Grapes"],
        "yellow" => ["fruit3" => "Banana", "fruit4" => "Mango"]
    ];

    print_r($markets['round']);
    echo "<br>";
    print_r($markets['yellow']);
    echo "<br><br>";

    #individual display
    echo $markets['round']['fruit1'];
    echo "<br>";
    echo $markets['yellow']['fruit4'];

    echo "<br><br>";

    #display all
    /*foreach(array_name  as  key_nested_array  =>  inner_array){
        
            foreach(inner_array  as  key_fruit  =>  fruit_value){

            }
    }
    */
    foreach($markets as $key_nested_array => $inner_array){
        echo "market " . $key_nested_array . "<br>";
        foreach($inner_array as $key_fruit => $fruit_value){
            echo $key_fruit . " => " . $fruit_value . "<br>";
        }
    }

    echo "<br><br>";

    #display all using table
    foreach($markets as $key_nested_array => $inner_array){
        echo "<h1>$key_nested_array</h1>";
        echo "<table>
                <tr>
                    <th>Fruit #</th>
                    <th>Fruit Name</th>
                </tr>
        ";
        foreach($inner_array as $key_fruit => $fruit_value){
            echo "<tr>
                    <td>$key_fruit</td>
                    <td>$fruit_value</td>
                </tr>
            ";
        }
        echo "</table>";
    }

?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>