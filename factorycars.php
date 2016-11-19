<?php
// FACTORY - DECORATOR - SINGLETON
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

/**
 * Second Factory
 */
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

?>

<?php
// USING OF SINGLETON
// --------------------------
class MySingleton 
{
    private static $_instance;
    
    private function __construct(){
    // constructor code here - used once - but I don't want to confuse myself
    }

    public static function init(){
        if(self::$_instance == null){
            self::$_instance = new self();
        }
        return self::$_instance;            
    }
    //--->> separate from the program  
    public function singlecar(){
        echo "I am using a singleton!"; //--->>printed once - now it doesn't since the inclusion of decorator - WHY!??
    }
}

$newcar = MySingleton::init();
$newcar->singlecar();

?>



