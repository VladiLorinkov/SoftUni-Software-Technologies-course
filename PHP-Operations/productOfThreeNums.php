<form>
    <input type="text" name="num1"/>
    <input type="text" name="num2"/>
    <input type="text" name="num3"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $x = intval($_GET['num1']);
    $y = intval($_GET['num2']);
    $z = intval($_GET['num3']);

    $count = 0;

    if ($x < 0) {
        $count++;
    }
    if ($y < 0) {
        $count++;
    }
    if ($z < 0) {
        $count++;
    }

    if ($x === 0 || $y === 0 || $z === 0) {
        echo "Positive";
    } else {
        if ($count > 0 && $count % 2 !== 0) {
            echo "Negative";
        } else {
            echo "Positive";
        }
    }

}