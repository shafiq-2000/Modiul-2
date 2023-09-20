<?php
function fib($count) {
    if ($count <= 0) {
        echo "Invalid count. Please provide a positive count.";
        return;
    }
    $x = 0;
    $y = 1;

    echo "Fibonacci Series FIrst $count numbers: ";

    for ($i = 0; $i < $count; $i++) {
        echo $x;

        if ($i < $count - 1) {
            echo ", ";
        }

        $z = $x + $y;
        $x = $y;
        $y = $z;
    }
}
// Call the function to print the x$x 15 Fibonacci numbers
fib(15);
?>
