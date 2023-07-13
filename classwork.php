<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            echo "<h3>" . htmlspecialchars($_POST['name']) . '</h3>';
            echo "<h3>" . htmlspecialchars($_POST['email']) . '</h3>';
            echo "<h3>" . htmlspecialchars($_POST['website']) . '</h3>';
            echo "<h3>" . htmlspecialchars($_POST['comment']) . '</h3>';
            echo "<h3>" . htmlspecialchars($_POST['gender']) . '</h3>';
        }
    ?>
    <h2>PHP Form CLASS WORK</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">  
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>
        
</body>
</html>