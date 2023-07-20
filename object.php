<h2>CLASS EXAMPLE</h2>
<h3>Object</h3>

<?php
//object declaration
class Person{
//properties
    public $name;

    public $age;

    public $skills;


    public function __construct($name, $age, $skills) {
        $this->name = $name;
        $this->age = $age;
        $this->skills = $skills;
    }

    public function getAge(){
        return $this->age;

    }

    public function sayHello(){
        return "Hello, my name is $this->name. I am $this->age years old. My skills are mainly $this->skills.";
    }
}

$person = new Person('John Doe', 30, 'Backend');

//echo $person->age;
echo $person->sayHello(); 

?>

<br>
<br>
<h2>ASSIGNMENT</h2>
<h3>CONDITIONAL STATEMENTS (if, if...else, elseif)</h3>
<h3>(1)</h3>

<?php

//Assignment 

//Number 1: Write a program to print 2 php object using single echo statement.
// Conditions:
// First variable have text "Good Morning."
// Second variable have text "Have a nice day!"
// Your output should be "Good morning Have a nice day!"
// You are allowed to use only one echo statement in this program.

class Greet {
    public $greeting1;
    public $greeting2;

    public function __construct($greeting1, $greeting2) {
        $this->greeting1 = $greeting1;
        $this->greeting2 = $greeting2;
    }

    public function Greet() {
        return $this->greeting1 . $this->greeting2;
    }
}

$greet = new Greet("Good morning. ", "Have a nice day!");

echo $greet->Greet();


?>
<br>
<h4>Another method</h4>
<?php
class Greeting {
    private $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function __toString() {
        return $this->message;
    }
}

$greeting1 = new Greeting("Good morning. ");
$greeting2 = new Greeting("Have a nice day!");

echo $greeting1, $greeting2;
?>

<br>
<h3>(2)</h3>

<?php
// Number 2: Write a program to check student grade based on the marks using if-else statement.
// Conditions:
// It marks are 60b or more. grade will be First Division.
// If marks between 45 to 59%. grade will be Second Division.
// If marks between 33 to 44°o. grade will be Third Division:
// If marks are less than 33%. student will be Fail.

$marks = 80; // I can change actual marks

if ($marks >= 60) {
    echo "Grade: First Division";
} elseif ($marks >= 45 && $marks < 60) {
    echo "Grade: Second Division";
} elseif ($marks >= 33 && $marks < 45) {
    echo "Grade: Third Division";
} else {
    echo "Grade: Fail";
}

?>

<br>
<h4>Another method using switch</h4>

<?php
$marks = 157; // Replace with the actual marks

switch ($marks) {
    case ($marks >= 60 && $marks <= 100):
        echo "Grade: First Division";
        break;
    case ($marks >= 45 && $marks < 60):
        echo "Grade: Second Division";
        break;
    case ($marks >= 33 && $marks < 45):
        echo "Grade: Third Division";
        break;
    case ($marks >= 101):
        echo "Invalid: Value higher than 100";
        break;
    default:
        echo "Grade: Fail";
        break;
}
?>

<br>
<br>

<?php
    echo "Hello World";
?>
<br>
<br>

<?php
    $Hey = "Hello PHP";

    echo $Hey;
?>
<br>
<br>

<?php
    $day = "1"; 

switch ($day) {
    case "1":
        echo "Monday";
        break;
    case "2":
        echo "Tuesday";
        break;
    case "3":
        echo "Wednesday";
        break;
    case "4":
        echo "Thursday";
        break;
    case "5":
        echo "Friday";
        break;
    case "6":
        echo "Saturday";
        break;
    case "7":
        echo "Sunday";
        break;
    default:
        echo "Invalid number";
}
?>
