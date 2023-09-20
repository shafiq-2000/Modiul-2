<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    $next = $first + $second;

    if ($next > 100) {
        break; // Break out of the loop
    }
    // current Fibonacci number
    echo $next;
    if ($count < 9) {
        echo ", ";
    }
    // Update variables for the next iteration
    $first = $second;
    $second = $next;
    $count++;
}
?>
