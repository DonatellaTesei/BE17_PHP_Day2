<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>

    <?php
    function multiple_returns($width, $height, $depth)
    {
        $x = $width * $height;
        $y = $width * $height * $depth;

        return ['area' => $x, 'volume' => $y];
    }
    ['area' => $m, 'volume' => $n] = multiple_returns(7, 4, 2);

    echo "The area is: " . $m . " and " . "the volume is: " . $n;
    ?>
    <br>

    <?php
    function multiple_returns2($width, $height, $depth)
    {
        $x = $width * $height;
        $y = $width * $height * $depth;

        return ['area' => $x, 'volume' => $y];
    }
    ['area' => $x, 'volume' => $y] = multiple_returns2(7, 4, 2);

    echo "The area is: " . $x . " and " . "the volume is: " . $y;
    ?>