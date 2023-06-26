<h2>FUNCTION</h2>
<?php

    function calcSum($num1, $num2){
        $sum = $num1 + $num2;
        return  $sum;
    }

    $result = calcSum(3, 5);
    echo $result;

?>

<br>

<?php

    function firstName($fname){
        echo "Hello " . $fname . "<br>";
    }

    firstName("Oluwatobiloba");
    firstName("Olaide");
    firstName("Damilola");
    
?>