<!DOCTYPE html>
<html>

<head>
    <title>Question 3</title>
</head>

<body>

    <h3>Write a PHP program to check whether a number is prime or not.</h3>

    <h4>Enter a number to verify whether it is prime.</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Number: <input type="number" name="number" min="0" step="1"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];

        if ($num != null) {

            if (isPrime($num)) {
                echo $num . " is a prime number.";
            } else {
                echo $num . " is not a prime number.";
            }

        } else {
            echo "No number entered!";
        }
    }

    function isPrime($num)
    {
        if ($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7) {
            return true;
        } elseif (
            (($num % 2) == 0)
            || (($num % 3) == 0)
            || (($num % 5) == 0)
            || (($num % 7) == 0)
        ) {
            return false;
        } else {
            return true;
        }
    }

    ?>

    <br><br>
    <a href="ex1.php">Question 1</a><br>
    <a href="ex2.php">Question 2</a>
</body>

</html>