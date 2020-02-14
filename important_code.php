//The iMOOC Example and Knowledge
<?php
//PHP_Array
//1.print the member of an array
$arr = array("apple","banana","peach");
for ($index = 0; $index <= 3; $index++) {
    echo ("The member is " .$arr($index));
}
//2.use foreach to print the member of an array
foreach ($arr as $key=>$value) {
    echo 'The number'.$key. 'is' .$value;
}


//PHP_FUNCTION
class Car
{
    public $speed = '0';

    //define a function to let the speed plus ten
    public function speedUp()
    {
        //use the $this word
        $this->speed += 10;
    }
}
$car = new Car();
$car -> speedUp();
echo $car -> speed;

class Car2
{
    //before use the static need a public func
    public static $speed2 = '10';

    public function speedEarly()
    {
        return self::$speed2;
    }

    //define a static function
    public static function getSpeed()
    {
        //ues return word
        return self::$speed2 += 10;  //in the static func, $this is not allowed to be used
    }
}
$car2 = new Car2();
//Use the static func
Car2::getSpeed();
//print the speed2
echo $car2 -> speedEarly();

//Create a class Truck extends the Class: Car
class Truck extends Car {
    public function speedUP() {
        $this->speed = parent::speedUp() + 50;
    }
}
$car3 = new Truck();
$car3->speedUP();
echo $car3->speed;
