<?php
if (isset($_GET['age'])) {
    $age = intval($_GET['age']);

    // Using if-else
    if ($age < 12) {
        $category_if = "child";
    } elseif ($age >= 13 && $age <= 22) {
        $category_if = "teenager";
    } elseif ($age >= 23 && $age <= 38) {
        $category_if = "adult";
    } else {
        $category_if = "senior";
    }

    // Using switch
    switch (true) {
        case ($age < 12):
            $category_switch = "child";
            break;
        case ($age >= 13 && $age <= 22):
            $category_switch = "teenager";
            break;
        case ($age >= 23 && $age <= 38):
            $category_switch = "adult";
            break;
        default:
            $category_switch = "senior";
            break;
    }

    echo "Using if-else: You are a $category_if.<br>";
    echo "Using switch: You are a $category_switch.<br>";
} else {
    echo "Please provide your age in the URL, e.g., ?age=25";
}
?>