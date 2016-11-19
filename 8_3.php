
<?php
//ReflectionClass::getMethods
class Apple {
    public function firstMethod() { }
    final protected function secondMethod() { }
    private static function thirdMethod() { }
}

$class = new ReflectionClass('Apple');
$methods = $class->getMethods();
var_dump($methods);
?>

<?php

//ReflectionClass::getConstant
    class Test{
        const ONE = "Number one";
        const TWO = "Number two";
    }
    
    $obj = new ReflectionClass( "Test" );
    echo $obj->getconstant( "ONE" )."\n";
    echo $obj->getconstant( "TWO" )."\n";
    
?>