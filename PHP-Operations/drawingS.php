<?php
for ($i = 1; $i <= 9; $i++) {
    if ($i == 1) {
        for ($j = 1; $j <= 5; $j++) {
            echo "<button style='background-color: blue'>1</button>";
        }
        echo "<br>";
    }
    if ($i > 1 && $i < 5) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j == 1) {
                echo "<button style='background-color: blue'>1</button>";
            } else {
                echo "<button>0</button>";
            }
        }
        echo "<br>";
    }
    if ($i == 5) {
        for ($j = 1; $j <= 5; $j++) {
            echo "<button style='background-color: blue'>1</button>";
        }
        echo "<br>";
    }

    if ($i > 5 && $i < 9) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j == 5) {
                echo "<button style='background-color: blue'>1</button>";
            } else {
                echo "<button>0</button>";
            }
        }
        echo "<br>";
    }
    if ($i == 9) {
        for ($j = 1; $j <= 5; $j++) {
            echo "<button style='background-color: blue'>1</button>";
        }
    }

}