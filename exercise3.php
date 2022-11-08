<!__Make a function that will accept 3 parameters>
    <?php
    //variables
    $Math_grade = 8;
    $Physics_grade = 7;
    $English_grade = 10;
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>

    <body>
        <?php
        function addFunction($Math_grade, $Physics_grade, $English_grade)
        {
            $sum = $Math_grade + $Physics_grade + $English_grade;
            return $sum;
        }
        $return_value = addFunction($Math_grade, $Physics_grade, $English_grade);
        echo "Returned value from the function: $return_value";
        ?>
        <br>


        <?php
        function marks($Math_grade, $Physics_grade, $English_grade)
        {
            $sum = $Math_grade + $Physics_grade + $English_grade;
            $average = ($Math_grade + $Physics_grade + $English_grade) / 3;

            echo $Math_grade . "<br>";
            echo $Physics_grade . "<br>";
            echo $English_grade . "<br>";
            echo $sum . "<br>";
            echo $average . "<br>";
        }
        marks(8, 7, 10)
        ?>
    </body>

    </html>