<?php
//Testing func_get_args():
function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "\n";
    }
}

foo(1, 2, 3);
echo nl2br("\n");
echo nl2br("\n");
?>

<?php
//TESTING Global () --> needed a filename for reference but this is
//done for testing purposes
//
//foreach (glob("*.txt") as $filename) {
   // echo "$filename size " . filesize($filename) . "\n";
//}
?>

<?php
//TESTING memory_get_usage()
//CANNOT TEST getrusage() function. Not available on Windows platforms.
echo memory_get_usage() . "\n"; 

$a = str_repeat("Hello", 4242);

echo memory_get_usage() . "\n"; 

unset($a);

echo memory_get_usage() . "\n"; 
echo nl2br("\n");
echo nl2br("\n");
?>

<?php
//TESTING Magic constants
//

class base_class
{
    function say_a()
    {
        echo "'a' - said the " . __CLASS__ . "<br/>";
    }

    function say_b()
    {
        echo "'b' - said the " . get_class($this) . "<br/>";
    }

}

class derived_class extends base_class
{
    function say_a()
    {
        parent::say_a();
        echo "'a' - said the " . __CLASS__ . "<br/>";
    }

    function say_b()
    {
        parent::say_b();
        echo "'b' - said the " . get_class($this) . "<br/>";
    }
}

$obj_b = new derived_class();

$obj_b->say_a();
echo "<br/>";
$obj_b->say_b();

echo nl2br("\n");
echo nl2br("\n");
?>
<?php

//TESTING serialize()

$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'

);
 

$string = serialize($myvar);
 
echo $string;

 

$newvar = unserialize($string);
 
print_r($newvar);
echo nl2br("\n");
echo nl2br("\n");
?>


<?php
//TESTING gzcompress()
$string = 
"Lbadajjdajsdsjdadsjdajdajdasdjkjskajdjkadjkajdjablahblajbdadasjdasda";
 
$compressed = gzcompress($string);
 
echo "Original size: ". strlen($string)."\n";

 
 
echo "Compressed size: ". strlen($compressed)."\n";
echo nl2br("\n");
echo nl2br("\n");
?>


<?php

//TESTING echo uniqid('foo_');
//TESTING register_shutdown_function()
$start_time = microtime(true);
 

echo "execution took: ".
        (microtime(true) - $start_time).
        " seconds.";
echo nl2br("\n");
echo nl2br("\n");
?>


