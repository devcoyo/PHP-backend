<?php
    $num1 = 10;
    $num2 = 5;
    $operation = "addition";

    // using if else
    if ($operation == "addition") {
        echo $num1 + $num2;
    } elseif ($operation == "subtraction") {
        echo $num1 - $num2;
    } elseif ($operation == "multiplication") {
        echo $num1 * $num2;
    } elseif ($operation == "division") {
        echo $num1 / $num2;
    } else {
        echo "Invalid operation";
    }

    // using switch statement
    switch ($operation) {
        case "addition":
            echo $num1 + $num2;
            break;
        case "subtraction":
            echo $num1 - $num2;
            break;
        case "multiplication":
            echo $num1 * $num2;
            break;
        case "division":
            echo $num1 / $num2;
            break;
        default:
            echo "Invalid operation";
    }

    // using switch statement with multiple cases
    switch ($operation) {
        case "addition":
        case "subtraction":
        case "multiplication":
        case "division":
            echo $operation == "addition" ? $num1 + $num2 : ($operation == "subtraction" ? $num1 - $num2 : ($operation == "multiplication" ? $num1 * $num2 : $num1 / $num2));
            break;
        default:
            echo "Invalid operation";
    }