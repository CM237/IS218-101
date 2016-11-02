<!DOCTYPE html>
<html>
<body>

<?php
//testing switch statement
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo nl2br("\n");
echo nl2br("\n");
?>

<?php
//testing else if statement
$result = 70;

if ($result >= 57) {
    echo "Pass <br />";
}
else {
    echo "Fail <br />";
}
echo nl2br("\n");
echo nl2br("\n");
?>

<?php

$var = '';

// TESTING ISSET and NULL
if (isset($var)) {
    echo "This var is set so I will print.";
}


$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE
echo nl2br("\n");
echo nl2br("\n");
?>

<?php
//TESTING EMPTY 
$expected_array_got_string = 'somestring';
var_dump(empty($expected_array_got_string['some_key']));
var_dump(empty($expected_array_got_string[0]));
var_dump(empty($expected_array_got_string['0']));
var_dump(empty($expected_array_got_string[0.5]));
var_dump(empty($expected_array_got_string['0.5']));
var_dump(empty($expected_array_got_string['0 Mostel']));
echo nl2br("\n");
echo nl2br("\n");
?>
</body>
</html>