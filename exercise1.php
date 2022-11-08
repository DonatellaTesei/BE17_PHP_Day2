<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <form method="POST">
        Name: <input type="text" name="firstname">
        Surname: <input type="text" name="surname">
        <input type="submit" name="submit">
        <br>
        <a href="exercise1.php">Reset</a>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST["firstname"] && $_POST["surname"]) {
            echo "Welcome " . $_POST["firstname"] . " " . $_POST["surname"] . "<br>";
        } elseif ($_POST["firstname"]) {
            echo "Please insert your surname";
        } else
            echo "Please insert your name";
    }
    ?>
</body>

</html>