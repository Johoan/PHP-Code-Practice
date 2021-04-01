<!DOCTYPE html>
<html>
<body>

<?php
//Illustration of object using car as a class 
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br><br>";

//Illustration of object using house as a class
class House {
  public $color;
  public $type;
  public $roofType;
  public function __construct($color, $type, $roofType) {
    $this->color = $color;
    $this->type = $type;
    $this->roofType = $roofType;
  }
  public function message() {
    return "My house is a " . $this->color . " " . $this->type . " with " . $this->roofType . " roof type!";
  }
}

$myHouse = new House("White", "Sky Scrapper", "concrete flat");
echo $myHouse -> message();
echo "<br>";
$myHouse = new House("Blue", "5 Storey building", "black coated Aluminiun");
echo $myHouse -> message();
?>

</body>
</html>
