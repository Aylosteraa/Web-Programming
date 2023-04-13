<?php
//OOP

echo "<br><br>ООП: <br> ";

class Animal {
    public $name;
    protected $type;
    private $cretuare;
    public function __construct($name, $type, $cretuare = 'animal') {
        $this->name = $name;
        $this->type = $type;
        $this->cretuare = $cretuare;
    }
    public function __destruct() {
        echo "<br>The $this->cretuare is $this->type, $this->name";
    }
    public function say_name() {
        echo "It's $this->name";
    }
}

$animal = new Animal("Olof", 'dog');
$animal->say_name();

class Cat extends Animal {
    public $color;
    public $breed;
    public function __construct($name, $color, $breed, $type = 'cat') {
        parent::__construct($name, $type);
        $this->color = $color;
        $this->breed = $breed;
    }
    public function getBreed() {
        return $this->breed;
    }
    public function getColor(){
        return $this->color;
    }
}

echo "<br><br>  Наслідування: <br> ";
$cat = new Cat("Kitty",  "grey", "British Shorthair");
$cat->say_name();
echo "<br>" .$cat->getBreed();
echo "<br>" .$cat->getColor();
?>