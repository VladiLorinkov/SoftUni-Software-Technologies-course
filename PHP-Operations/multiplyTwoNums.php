<form>
    N: <input type="text" name="num1" />
    N: <input type="text" name="num2" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $n = intval($_GET['num1']);
    $m = intval($_GET['num2']);
    echo $n * $m;
}
?>
