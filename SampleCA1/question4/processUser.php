<?php

namespace Tudublin;

$userName = filter_input(INPUT_GET, 'name');
$userAge = filter_input(INPUT_GET, 'age');
$isLect = filter_input(INPUT_GET, 'isLecturer');

$output = "Data Recived:<br><br>";

$output .= "Name: $userName <br>";
$output .= "Age: $userAge <br>";
if (is_null($isLect)){
    $output .= "User Type: (not known)";
} else {
    $output .= "User Type: lecturer";
}

print $output;




