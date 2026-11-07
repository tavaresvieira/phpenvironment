<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php
    /**
     * Add two values
     * @param mixed $x value 1
     * @param mixed $y value 2
     * @return mixed the sum of the two values
     */
    function add($x, $y) {
        return $x + $y;
    }

    function sub( $x, $y) {
        return $x - $y;
    }

    function mult($x, $y) {
        return $x * $y;
    }

    function div( $x, $y) {
        return $x / $y;
    }

    function mod( float|int $x, float|int $y) {
        return $x % $y;
    }




?>

<div>3 + 4 = <?= add(3, 4)?></div>

<div>9 - 4 = <?= sub(9, 4)?></div>

<div>3 * 4 = <?= mult(3, 4)?></div>

<div>12 / 4 = <?= div(12, 4)?></div>

<div>12 % 4 = <?= mod(12, 4)?></div>
    
</body>
</html>