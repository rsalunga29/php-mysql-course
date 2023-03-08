<?php

$date = date("D");

if ($date == "Fri") {
    echo "Have a nice weekend!";
} elseif ($date == "Sun") {
    echo "Have a nice Sunday!";
} else {
    echo "Have a nice weekday!";
}
