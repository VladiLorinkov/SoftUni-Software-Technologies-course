<form>
    <input type="number" name="num1"/>
    <input type="number" name="num2"/>

    <input type="submit">
</form>
<ul>

<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);

    for ($i = 1; $i <= $num1; $i++) {
        // to do
        echo "<li>List $i";

        for ($j = 1; $j <= $num2; $j++) {
            // to do
            echo "<ul>";
            echo "<li>Element $i.$j";
            echo "</li>";
            echo "</ul>";

        }
        echo "</li>";
    }
}
?>
</ul>
