<?php
    // input
    $username = $_GET['username'];
    $password = $_GET['password'];
    $gender = $_GET['gender'];

    // output
    echo "<div class='bg-info'>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Gender: " . $gender . "<br>";
?>