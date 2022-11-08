<!__Create a function that calculates the area and volume of a box.__>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>

    <body>
        <?php
        //phpinfo();
        function areaFunction($width, $height, $depth)
        {
            $area = $width * $height;
            return $area;
        }
        $return_area = areaFunction(7, 4, 2);
        echo "The area of the box is: $return_area";
        ?>
        <br>
        <?php

        function volumeFunction($width, $height, $depth)
        {
            $volume = $width * $height * $depth;
            return $volume;
        }
        $return_volume = volumeFunction(7, 4, 2);
        echo "The volume of the box is: $return_volume";
        ?>


    </body>

    </html>