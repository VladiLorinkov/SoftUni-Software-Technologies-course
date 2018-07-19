<form>
    <input type="text" name="num1"/>
    <input type="text" name="num2"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 =  intval($_GET['num1']);
    $num2 =  intval($_GET['num2']);

    if ($num2 >= $num1) {
        echo $num2 * $num1;
    } else {
        echo $num1 / $num2;
    }
}