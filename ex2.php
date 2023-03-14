<!DOCTYPE html>
<html>

<head>
    <title>Question 2</title>
</head>

<body>

    <h3>Write a PHP program to check if a person is eligible to vote using control structure. (Criteria: Minimum age
        required to vote is 18)</h3>


    <h4>Register for voting</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $age = test_input($_POST["age"]);

        if ($age != null && $age instanceof integer && $age >= 18) { // additional integer check for incase HTTP request is intercepted and transformed
            echo ($name != null ? $name . ", " : "") . "You are registered to vote!";
        } else {
            echo ($name != null ? $name . ", " : "") . "You are not eligible to vote!";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <br><br>
    <a href="ex1.php">Question 1</a><br>
    <a href="ex3.php">Question 3</a>
</body>

</html>