<?php
//  Create a script that checks if a number is even or odd and prints a message accordingly.
echo '<script>
var number = prompt("Please enter a number:");
if (number !== null) {
    window.location.href = window.location.pathname + "?number=" + number;
}
</script>';

if (isset($_GET['number'])) {
    $number = intval($_GET['number']);
    switch ($number % 2) {
        case 0:
            echo "$number is even.";
            break;
        default:
            echo "$number is odd.";
            break;
    }
}