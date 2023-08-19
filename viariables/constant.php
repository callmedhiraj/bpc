<?php
define("PI", 3.14);


define("PI", 3.1413445);

echo PI;

print( "<br />This is a fine sunny day !". PI);
printf("%s , has celebrated %d glorious years", "Birgunj Multiple Campus", 25);


// array and object

$arr = array("Nepal", "India", 13=>"Bhutan", "Sri Lanka");
 /// arary is considered to be mixed type
echo "<br />";
echo '<pre>';
print_r($arr);/// illegal
echo '</pre>';
echo '<pre>';
var_dump($arr);
echo '</pre>';


class Car{
    public $cost;
    public function __construct(){
        $this->cost = 2500;
    }
}

$ferrari = new Car();
echo "<br /> The cost of ferrari is ". $ferrari->cost;

echo '<pre>';
print_r($ferrari);
echo '</pre>';

///operators
$num1 = 34;
$num2 = 25;

// -, *, /, %
// +=, -=, *= 

echo "<br /> The sum of $num1 and $num2 = ". ($num1+$num2);

$num += 5; // $num = $num + 5;

echo "<br /> The value of \$num is $num";
//&&, ||, !, xor (exclusive OR)

?>