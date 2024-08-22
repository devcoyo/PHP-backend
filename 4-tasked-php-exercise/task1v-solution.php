<?php
// Create a script that assigns values to different variables (string, integer, float, and boolean) and prints their types and values.   
    echo "<h1>Displaying different types of variables</h1>";
    $string = "dev coyo";
    $integer = 45;
    $float = 45.5;
    $boolean = true;
    echo "String: $string <br>";
    echo "Type of string: " . gettype($string) . "<br>";
    echo "Integer: $integer <br>";
    echo "Type of integer: " . gettype($integer) . "<br>";
    echo "Float: $float <br>";
    echo "Type of float: " . gettype($float) . "<br>";
    echo "Boolean: $boolean <br>";
    echo "Type of boolean: " . gettype($boolean) . "<br>";
?>