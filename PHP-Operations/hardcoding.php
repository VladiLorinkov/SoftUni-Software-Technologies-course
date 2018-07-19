<form>
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit">
</form>
<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);

    if ($num1 === 1 && $num2 === 2) {
        echo "ul li list 1 ul li element 1.1 li li element 1.2 li ul li ul";
    } else {
        echo "ul li list 1 ul li element 1.1 li li element 1.2 li li element 1.3 li ul li li list 2 ul li element 2.1 li li element 2.2 li li element 2.3 li ul li li list 3 ul li element 3.1 li li element 3.2 li li element 3.3 li ul li li list 4 ul li element 4.1 li li element 4.2 li li element 4.3 li ul li li list 5 ul li element 5.1 li li element 5.2 li li element 5.3 li ul li ul";
    }
}