<?php
    $colors = array("Red", "Green", "Blue");
    // Accessing elements
    echo "$colors[0]<br>";
    echo "$colors[1]<br>";
    echo "$colors[2]<br>";

    $person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
    );
    foreach ($person as $key => $value) {
    echo "Key: $key, Value: $value<br>";
    }
?>