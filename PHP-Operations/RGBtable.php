<?php
$color = 51;
for ($i = 1; $i <=   5 ; $i++) {
    echo "<tr>";
    echo "<td style='background-color: rgb($color, 0 ,0)'></td>";
    echo "<td style='background-color: rgb(0, $color,0)'></td>";
    echo "<td style='background-color: rgb(0, 0 ,$color)'></td>";
    $color += 51;
    echo "</tr>";
}
?>