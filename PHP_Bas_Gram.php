//The Example
<?php declare(strict_type=1);  //strict requirement
//PHP_Array
$x = 1;

while($x <= 5) {
    echo "This is: $x <br>";
    $x++;
}
$cars = array("Hello","world");
//The vae_dump function returns the data type and value
var_dump($cars);


//PHP_Object
class foo{
    function do_foo() {
        echo "Hello";
    }
}
//实例化一个对象
$bar = new foo;
//执行do_foo
$bar -> do_foo();

//PHP_String
echo strlen("Hello world<br>");  //The length of the string1
echo str_word_count("Hello world<br>"); //The number of the string2
echo strrev("Hello world"); //Reverse the string3


/*PHP has three functions to check whether the type of variable is integer
is_int()
is_integer()
is_long()
*/
$q = 39.3;
echo "<br>";
var_dump(is_integer($q));

//Cast the float to int
$w = 234.3;
$int_cast = (int)$w;
echo $int_cast;


//foreach()-->Loops: Just for array
//The following example will output both the value and keys of the array
$age = array("Hello"=>23,"World"=>24);  //associative array

foreach ($age as $e => $val) {
    echo "$e = $val<br>";
}


//PHP_Functions
//Return a value
function sum($x,$y) {
    $z = $x + $y;
    return $z;
}

echo "2 + 4 =" .sum(2,4)."<br>";


//PHP_Array
$car = array("Volvo","BMW");
echo count($car); //Get the Length of an Array

//To loop through and print all the values of an indexed array
$cars2 = array("BMW","Toyota");
$arrlength = count($cars2);

for($r = 0; $r < $arrlength; $r++) {
    echo $cars2[$r];
    echo "<br>";
}


//Sort_Function
sort($cars2);  //sort()-->sort array in Ascending(升序) Order
rsort($car);  //rsort()-->sort array in Descending Order




?>
