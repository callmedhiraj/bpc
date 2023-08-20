<?php
/// to create a simple array
$myArray = array();
$myArray2 = [];

echo "<br />" . gettype($myArray);
echo "<br />" . gettype($myArray2);

$myArray = array(27, 'radha Koirala', 87.77);

echo '<pre>';
print_r($myArray);
echo '</pre>';

///change the indices
$anotherArray = array(15=>'Priti',
                    19=>'Govinda',
                    'Kishori'
                    );
echo '<pre>';
print_r($anotherArray);
echo '</pre>';

//// associative arrays
//having string as keys
$student = array('roll' => 101,
                'name' => 'Gaurav Khatiwada',
                'marks' => 68.75,
                'Male'
                );
echo '<pre>';
print_r($student);
echo '</pre>';   

/// to see the specific value from the array
echo "<br /><em>" . $student['name'] .'</em>';

/// printing all of the values using foreach loop
echo '<hr />';
foreach($student as $key=>$value){
    echo '<br />' . $value . '<br />';
}

?>