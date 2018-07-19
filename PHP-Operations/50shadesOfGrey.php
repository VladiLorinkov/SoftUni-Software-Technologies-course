<?php
$colorRed = 0;
$colorBlue = 0;
$colorGreen = 0;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 10; $j++)
    echo "<div style='margin: 5px;display: inline-block;background-color: rgb($colorRed, $colorGreen, $colorBlue); width: 30px; height: 30px'></div>";
    $colorRed += 51;
    $colorBlue += 51;
    $colorGreen += 51;
    echo "<br>";
}