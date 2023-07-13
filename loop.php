<h2>20-06 ASSIGNMENT</h2>

<h3>LOOPS</h3>

<h4>(1) FOR LOOP</h4>

<?php
    for ($i = 0; $i < 5; $i++) {
        echo "Write: " . $i . "<br>";
    }
?>

<h4>(2) FOREACH LOOP</h4>

<?php
    $fruits = array("Apple", "Banana", "Orange", "Mango");

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

?>

<h4>(3) WHILE LOOP</h4>

<?php
$num = 1;
    while ($num <= 5) {
        echo "Number: " . $num . "<br>";
        $num++;
    }
?>

<h4>(4) DO...WHILE LOOP</h4>

<?php
    $num = 1;

    do {
        echo "Number: " . $num . "<br>";
        $num++;
    } while ($num <= 5);

?>


<h2>04-07 CLASSWORK</h2>

<?php
$prog = 5;
    while ($prog <= 15) {
        echo "Count: " . $prog . "<br>";
        $prog++;
    }
?>

<br>

<?php
    $number = 3;
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
        }

    echo $factorial;
?>

<?php
    function factorial($number) {
        if ($number <= 1) {
            return 1;
        } else {
            return $number * factorial($number - 1);
        }
    }
    $number = 5;
    $result = factorial($number);
    echo "The factorial of $number is: $result";
    
?>