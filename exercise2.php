<!__Create a function which takes two integer parameters - divide them and output the result on the screen.__>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>

    <body>
        <?php
        function divideFunction($num1, $num2)
        {
            $quote = $num1 / $num2;
            return $quote;
        }
        $return_value = divideFunction(50, 10);
        echo "Returned value from the function: $return_value";
        ?>
    </body>



    </html>