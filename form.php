<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <p>POST METHOD</p>
    <form action="form.php" method="POST">
        Name: <input type= "text" name="name" />
        Surname: <input type= "text" name="surname" />
        <input type="submit" name= "submit" />
    </form> 
<?php
if(isset($_POST[ 'submit']))
{
    if( $_POST["name"] || $_POST["surname" ] )
    {
        echo "Welcome ". $_POST["name"]. $_POST["surname"]. "<br />";
    }
    else { 
        echo "Please insert your name";
}
?>
</body>

</html>