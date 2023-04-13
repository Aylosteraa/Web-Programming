<?php
class Singleton
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    private $a;
    public function setA($a){
        $this->a=$a;
    }
    public function getA(){
        return $this->a;
    }
}

$singleton = Singleton::getInstance();
$singleton->setA(13);
echo $singleton->getA().'<br>';

$singleton1 = Singleton::getInstance();
echo $singleton->getA();

?>