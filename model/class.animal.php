final class Animal {

	public static $sound = "Woof";
	private $name = "Generic";
	private $noLegs = 4;

	public function __construct(){
	}

	public function __construct($name){
		$this->name = $name;
	}

	public function __construct($name, $noLegs) {
		$this->name = $name;
		$this->noLegs = $noLegs;
	}

	public getName(){
		return $this->name;
	}

	public getNoLegs(){
		return $this->noLegs;
	}

}

class Dog extends Animal {
	public function __construct(){
		parent::__construct();
	}

	public function __construct($name){
		parent::__construct($name);
	}

	public function __construct($name, $noLegs) {
		parent::__construct($name, $noLegs);
	}

	public getName(){
		return "Dog " . $this->name;
	}
}


$animal1 = new Animal();
$animal2 = new Animal();

