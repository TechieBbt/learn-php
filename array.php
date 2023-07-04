<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>26-06 ASSIGNMENT</h2>

    <h3>ARRAYS</h3>

    <h5>Associative Array</h5>

    <?php 
        $student = array(
            'name' => 'John Doe',
            'age' => 20,
            'grade' => 'A'
        );
        // echo $student ['age'];
        $itemList = implode(", ", $student);
        echo $itemList;
        echo "<br/>";

        foreach ($student as $key => $value) {
            echo $key . ": " . $value . "\n" . "<br/>";
        }
        ?>
    <br>

    <h5>Multidimensional Array</h5>

    <?php
        $matrix = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        echo $matrix[0][0];

        foreach ($matrix[0] as $element) {
            echo $element . " " . "<br/>";
        }

        foreach ($matrix as $row) {
            foreach ($row as $element) {
                echo $element . " ";
            }
            echo "\n";
        }
    ?>

    <h5>Indexed Array</h5>

    <?php
        $fruits = ['apple', 'banana', 'orange'];
        $fruits[] = 'grape';
        $itemList = implode(", ", $fruits);
        echo  $itemList;

    ?>

    

</body>
</html>