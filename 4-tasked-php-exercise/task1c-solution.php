<?php
    // Given an array of employee names, check if "John" is in the list. If he is, print "John is an employee." If not, print "John is not an employee."
    $employees = ["Jane", "Doe", "John", "Smith", "Austin"];
    $employee_to_check = "John";

    // using if else
    echo "<p>Using if else</p>";
    if (in_array($employee_to_check, $employees)) {
        echo "$employee_to_check is an employee.";
    } else {
        echo "$employee_to_check is not an employee.";
    }

    // using switch statement
    echo "<p>Using switch statement</p>";
    $employee_to_check = "Kevin";
    switch (true) {
        case in_array($employee_to_check, $employees):
            echo "$employee_to_check is an employee.";
            break;
        default:
            echo "$employee_to_check is not an employee.";
    }

    // using ternary operator
    echo "<p>Using ternary operator</p>";
    $employee_to_check = "Austin";
    echo in_array($employee_to_check, $employees) ? "$employee_to_check is an employee." : "$employee_to_check is not an employee.";
?>