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