<form>
    <input type="number" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);

    for ($i = $num; $i >= 1; $i--) {

        if ($i % 2 !== 0 && $i % 3 !== 0 && $i !== 1) {
            echo $i . " ";
        }
    }
    echo 3 . " ";
    echo 2;
}