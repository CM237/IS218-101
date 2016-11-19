<?php
            
//some stuff
// FACTORY - DECORATOR - BUILDER
//build interfaces first - 1st step
interface carFactory
{
    /**
     * Returns a product
     * @return Product
     */
    public function buildCar($type);
}
/**
 * Product
 */
interface car 
{
    /**
     * Returns name of the product
     * @return string
     */
    public function getLocation();
    public function getType();
}
interface carBody //---->>> car decorator
{ 
    public function loadBody();
}
//build factories - 2nd step
/**
 * First Factory
 */
// Factory class to build US based center
class USCarFactory implements carFactory {
    public function __construct() {
         
    }
     
    public function buildCar($type){
         
        $car = null;
         
        switch($type) {
            case 'suv':
                $car = new USSuvFactory();
                break;
            case 'sedan':
                $car = new USSedanFactory();
                break;
            default:
                $car = new USSedanFactory();
                break;
        }
         
        return $car;
    }
}
 
// Factory class to build UK based center
class UKCarFactory implements carFactory {
 
    public function __construct() {
         
    }
     
    public function buildCar($type){
 
        $car = null;
 
        switch($type) {
            case 'suv':
                $car = new UKSuvFactory();
                break;
            case 'sedan':
                $car = new UKSedanFactory();
                break;
            default:
                $car = new UKSedanFactory();
                break;
        }
 
        return $car;
    }
}
// SECOND FACTORY  
class USSuvFactory implements car {
     
    private $location;
    private $carType;
     
    public function __construct() {
        $this->location = 'US';
        $this->carType = 'SUV';
    }
     
    public function getLocation() {
        return $this->location;
    }
     
    public function getType() {
        return $this->carType;
    }
     
}
 
class USSedanFactory implements car {
 
    private $location;
    private $carType;
     
    public function __construct() {
        $this->location = 'US';
        $this->carType = 'Sedan';
    }
     
    public function getLocation() {
        return $this->location;
    }
     
    public function getType() {
        return $this->carType;
    }
     
}
 
class UKSuvFactory implements car {
 
    private $location;
    private $carType;
     
    public function __construct() {
        $this->location = 'UK';
        $this->carType = 'SUV';
    }
     
    public function getLocation() {
        return $this->location;
    }
     
    public function getType() {
        return $this->carType;
    }
     
}
 
class UKSedanFactory implements car {
 
    private $location;
    private $carType;
     
    public function __construct() {
        $this->location = 'UK';
        $this->carType = 'Sedan';
    }
     
    public function getLocation() {
        return $this->location;
    }
     
    public function getType() {
        return $this->carType;
    }
     
}
//---------DECORATOR-------------
class carlook implements carBody {
    public function loadBody() {
        echo "This is how the car looks.<br />";
    } 
}
//-----------------------------------
//------MAIN DECORATOR--------------
abstract class emailcarDecorator implements carBody {
         
    protected $emailBody;
     
    public function __construct(carBody $carBody) {
        $this->carBody = $carBody;
    }
     
    abstract public function loadBody();
     
}
//------------------------------------------
//-----SUB-DECORATORS-----------------------
class suvcarBody extends emailcarDecorator {
         
    public function loadBody() {
         
        echo '<br>This is the deluxe SUV car<br />'; //------->does not print - WHY!??? WTF
        $this->carBody->loadBody();
         
    }
     
}
 
class sedancarBody extends emailcarDecorator { 
 
    public function loadBody() {
         
        echo '<br>This is the comfy Sedan car<br />'; //------> IT WORKS!!
        $this->carBody->loadBody();
         
    }
 
}
// USING OF FACTORY METHOD
// --------------------------
// US Car Factory
$USFactory = new USCarFactory();
 
// US based SUV model
$USSuv = $USFactory->buildCar('suv');
echo $USSuv->getLocation().' based '. $USSuv->getType();
 
// US based Sedan model
$USSedan = $USFactory->buildCar('sedan');
echo $USSedan->getLocation().' based '. $USSedan->getType();
 
// UK Car Factory
$UKFactory = new UKCarFactory();
 
// UK based SUV model
$UKSuv = $UKFactory->buildCar('suv');
echo $UKSuv->getLocation().' based '. $UKSuv->getType();
 
// UK based Sedan model
$UKSedan = $UKFactory->buildCar('sedan');
echo $UKSedan->getLocation().' based '. $UKSedan->getType();
$carlook = new carlook();
$carlook = new suvcarBody($carlook);
$carlook = new sedancarBody($carlook);
$carlook->loadBody();
//------------BUILDER-------------
class Product {
private $name;
public function setName($name) {
$this->name = $name;
}
public function getName() {
return $this->name;
}
}
abstract class Builder {
protected $product;
final public function getProduct() {
return $this->product;
}
public function buildProduct() {
$this->product = new Product();
}
}
class firstcarBuilder extends Builder {
public function buildProduct() {
parent::buildProduct();
$this->product->setName('the product of Ford Autos');
}
}
class secondcarBuilder extends Builder {
public function buildProduct() {
parent::buildProduct();
$this->product->setName('The product of Chevy Autos');
}
}
class Factory {
private $builder;
public function __construct(Builder $builder) {
$this->builder = $builder;
$this->builder->buildProduct();
}
public function getProduct() {
return $this->builder->getProduct();
}
}
$firstcarDirector = new Factory(new FirstcarBuilder());
$secondcarDirector = new Factory(new SecondcarBuilder());
print_r($firstcarDirector->getProduct()->getName());
// The product of the first car builder
print_r($secondcarDirector->getProduct()->getName());
// The product of the second car builder

          ?>