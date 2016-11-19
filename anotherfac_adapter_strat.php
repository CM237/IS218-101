<php?
//some stuff

// ANOTHER FACTORY - ADAPTER - STRATEGY

//-------------CAR ADAPTER---------
class Simplecar {
    private $owner;
    private $title;
    function __construct($owner_in, $title_in) {
        $this->owner = $owner_in;
        $this->title  = $title_in;
    }
    function getowner() {
        return $this->owner;
    }
    function getTitle() {
        return $this->title;
    }
}

class carAdapter {
    private $adapter;
    function __construct(Simplecar $adapter_in) {
        $this->adapter = $adapter_in;
    }
    function getownerAndTitle() {
        return $this->adapter->getTitle().' by '.$this->adapter->getowner();
    }
}

  
  writeln('BEGIN TESTING ADAPTER PATTERN');
  writeln('');

  $adapter = new Simplecar("Ford Auto", "Ford Taurus Sedan");
  $carAdapter = new carAdapter($adapter);
  writeln('Car and Title: '.$carAdapter->getownerAndTitle());
  writeln('');

  writeln('END TESTING ADAPTER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

//------ANOTHER FACTORY ---------

class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"

//------STRATEGY -------- (somehow is not working...)

interface OutputInterface
{
    public function load();
}

class SerializedArrayOutput implements OutputInterface
{
    public function load()
    {
        return serialize($arrayOfData);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load()
    {
        return json_encode($arrayOfData);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load()
    {
        return $arrayOfData;
    }
}


?>
