<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="POST">
        Name: <input type="text" name="firstname">
        Surname: <input type="text" name="surname">
        Age: <input type="text" name="age">
        <input type="submit" name="submit">
        <br>
        <a href="exercise1.php">Reset</a>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['firstname'] || $_POST['surname'] || $_POST['age']) {
            echo 'Welcome ' . $_POST['firstname'] . ' ' . $_POST['surname'] . '<br>';
            echo 'You are ' . $_POST['age'] . ' years old. ';
        }
    }

    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>


</html>