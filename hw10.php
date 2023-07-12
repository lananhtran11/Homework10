<?php
///ABSTRACT
//bai1
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape {
    protected $radian;
    public function __construct($radian) {
      $this->radian = $radian;
    }
    public function calculateArea() {
    return 3.14 * pow($this->radian, 2);
        }
  }
class Rectangle extends Shape {
    protected $length;
    protected $width;
 public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
}
public function calculateArea() {
return ($this->length + $this->width) * 2;
    }
}
$circle = new Circle(10);
$rectangle = new Rectangle(3, 4);
echo $circle->calculateArea()."<br>";
echo $rectangle->calculateArea()."<br>";
//bai 2
abstract class Animal {
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound() {
      echo "Gau!";
    }
}
    class Cat extends Animal {
        public function makeSound() {
          echo "Meow!";
        }
  }
$dog = new Dog();
$cat = new Cat();
echo $dog -> makeSound(). "<br>";
echo $cat -> makeSound(). "<br>";
//bai 3
abstract class Employee {
  abstract public function name();
  abstract public function salary();
}

class Manager extends Employee {
  protected $name;
  protected $salary;

  public function __construct($name, $salary) {
      $this->name = $name;
      $this->salary = $salary;
  }

  public function name() {
      return $this->name;
  }

  public function salary() {
      return $this->salary;
  }
class Staff extends Employee {
      protected $name;
      protected $salary ;
  
      public function __construct($name, $salary){
          $this->name = $name;
          $this->salary = $salary;
      }
  
      public function getName(){
          return $this->name;
      }
  
      public function getSalary(){
          return $this->salary;
      }
  }
}

$manager = new Manager("Lisa", 25);
echo "Name: " . $manager->name() . "<br>";
echo "Salary: " . $manager->salary() . "<br>";

$staff = new Staff ("Rose", 45)
echo "Name: ".$staff->name2(). "<br>";
echo "Salary: ".$staff->salary2(). "<br>"; 

//bai 4 
abstract class Vehicle {
  abstract public function start();
}

class Car extends Vehicle {
  protected $sound;

  public function __construct() {
      $this->sound = "aaaaaaaaa";
  }

  public function start() {
      return $this->sound;
  }
}

class Motorcycle extends Vehicle {
  protected $sound;

  public function __construct() {
      $this->sound = "bbbbbbb";
  }

  public function start() {
      return $this->sound;
  }
}

$car = new Car();
echo $car->start(). "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->start(). "<br>";  
///INTERFACE
<?php 
//bai 1
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->height *= $percentage / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Original size: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";

$rectangle->resize(150);
echo "Size after change: " . $rectangle->getWidth() . "x" . $rectangle->getHeight(). "<br>";


//bai 2
interface Logger {
  public function logInfo();
  public function logWarning();
  public function logError();
}
class FileLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
class DatabaseLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
$FileLogger = new FileLogger("bug...1");
$DatabaseLogger = new DatabaseLogger("bug...2");
echo $FileLogger->getLog(). "<br>";
echo $DatabaseLogger->getLog(). "<br>";


//bai 3
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Drawing a circle with radius: " . $this->radius . "<br>";
    }
}

class Square implements Drawable {
    protected $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function draw() {
        echo "Drawing a square with side length: " . $this->side . "<br>";
    }
}


$circle = new Circle(5);
$circle->draw();

$square = new Square(10);
$square->draw();

?>