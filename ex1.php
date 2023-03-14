<!DOCTYPE html>
<html>

<head>
    <title>Question 1</title>
</head>

<body>

    <h5>Write a program in PHP using a 'for' loop to add all the integers between 0 and 50 and display the total.</h5>

    <?php
    $x = 0;

    for ($i = 0; $i < 50; $i++) {
        $x += $i;
    }

    echo "The sum of 1 to 50 is " . $x
    ?>

<br><br>
    <a href="ex2.php">Question 2</a><br>
    <a href="ex3.php">Question 3</a>
</body>
</html>