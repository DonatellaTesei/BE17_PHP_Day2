<!__Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.__>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>

    <body>
        <?php
        //method_1
        function convertToHoursMins($time)
        {
            $h = floor($time / 60);
            $m = ($time % 60);

            return ["hours" => $h, "minutes" => $m];
        }
        ['hours' => $h, 'minutes' => $m] = convertToHoursMins(222);
        echo "222 " . "minutes " . "=" . $h . " hour(s) and " . $m . " minutes";

        ?>
        <br>

        <?php
        //method_2 sprint function
        function convertToHoursMins2($time, $format = '%02d:%02d')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }
        echo convertToHoursMins2(250, '%02d hours %02d minutes')
        ?>
        <br>

        <?php
        //method_3
        function convertToHoursMins4($time)
        {
            $hours = floor($time / 60);
            $minutes = $time % 60;
            echo $time . " minutes " . "= " . $hours . " hours and " . $minutes . " minutes";
        }
        convertToHoursMins4(120)

        ?>

        <?php
        //date and time functions
        $today = date('d/M/Y');
        echo "Today is $today";

        $time = date("h:i:sp");
        echo "<br> $time";
        ?>


    </body>

    </html>