<?php

//some stuff
//get count
//testing the sort function

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo nl2br("\n");
echo nl2br("\n");

//testing sort()
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
echo nl2br("\n");
echo nl2br("\n");

//testing sort in rsort()

$cars1 = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength1 = count($cars1);
for($x = 0; $x < $clength1; $x++) {
    echo $cars1[$x];
    echo "<br>";
}

echo nl2br("\n");
echo nl2br("\n");

//Sort Array (Ascending Order), According to Value - asort()


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo nl2br("\n");
echo nl2br("\n");


//Sort Array (Ascending Order), According to Key - ksort()


$age1 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age1);

foreach($age1 as $x1 => $x_value1) {
    echo "Key=" . $x1 . ", Value=" . $x_value1;
    echo "<br>";
}

echo nl2br("\n");
echo nl2br("\n");

//Sort Array (Descending Order), According to Value - arsort()

$age3 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age3);

foreach($age3 as $x2 => $x2_value) {
    echo "Key=" . $x2 . ", Value=" . $x2_value;
    echo "<br>";
}

//
echo nl2br("\n");
echo nl2br("\n");

//Sort Array (Descending Order), According to Key - krsort()

$age4 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age4);

foreach($age4 as $x4 => $x4_value) {
    echo "Key=" . $x4 . ", Value=" . $x4_value;
    echo "<br>";
}
echo nl2br("\n");
echo nl2br("\n");
//Descending Order - rsort()

$numbers3 = array(4, 6, 2, 22, 11);
rsort($numbers3);

$arrlength2 = count($numbers3);
for($x = 0; $x < $arrlength2; $x++) {
    echo $numbers3[$x];
    echo "<br>";
}
echo nl2br("\n");
echo nl2br("\n");
//PHP array_change_key_case() Function

$age1=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age1,CASE_UPPER));

echo nl2br("\n");
echo nl2br("\n");

//PHP array_fill() Function
$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);

echo nl2br("\n");
echo nl2br("\n");

//PHP array_fill_keys() Function

$keys1=array("a","b","c","d");
$a12=array_fill_keys($keys1,"blue");
print_r($a12);

echo nl2br("\n");
echo nl2br("\n");

//PHP array_filter() Function
function test_odd($var)
{
return($var & 1);
}

$a13=array("a","b",2,3,4);
print_r(array_filter($a13,"test_odd"));

echo nl2br("\n");
echo nl2br("\n");

//FLIP FUNCTION
$a14=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result2=array_flip($a14);
print_r($result2);
echo nl2br("\n");
echo nl2br("\n");

//PHP array_intersect() Function
$a14=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a24=array("e"=>"red","f"=>"green","g"=>"blue");

$result4=array_intersect($a41,$a24);
print_r($result4);

echo nl2br("\n");
echo nl2br("\n");

//PHP array_keys() Function

$a1=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a1));























?>
