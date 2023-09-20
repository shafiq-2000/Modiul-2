<?php
function printEvenNumbers($x, $y, $z) {
    //for loop
    echo "Using For Loop: ";
    for ($i = $x; $i <= $y; $i += $z) {
        echo $i . ' ';
    }
    echo "<br> <br>";

    //while loop
    echo "Using While Loop: ";
    $i = $x;
    while ($i <= $y) {
        echo $i . ' ';
        $i += $z;
    }
    echo "<br> <br>";

    //do-while loop
    echo "Using Do-While Loop: ";
    $i = $x;
    do {
        echo $i . ' ';
        $i += $z;
    } while ($i <= $y);
}
// call function
printEvenNumbers(2, 20, 2);
?>
