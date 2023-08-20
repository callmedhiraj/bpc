<?php
///twoD array
$arr[] = array();

$data = array(); //blank array
$list = array('Oranges', 'Guava', 'Mangoes', 'Pineapple');
//$data[] = $list;
array_push($data, $list);
echo '<pre>';
print_r($data);
echo '</pre>';


?>