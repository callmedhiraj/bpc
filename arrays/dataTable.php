<?php
$data = array();
$list1 = array('roll' => 101,
            'name' => 'Radha Kumari',
            'amount' => 25000
);
$list2 = array('roll' => 102,
            'name' => 'Priti Rauniyar',
            'amount' => 45000
);
$list3 = array('roll' => 103,
            'name' => 'Kushal Paudel',
            'amount' => 60000
);
$list4 = array('roll' => 119,
            'name' => 'kumar Paudel',
            'amount' => 75000
);
///lets add the lists to the data
array_push($data, $list1);
array_push($data, $list2);
array_push($data, $list3);
array_push($data, $list4);
/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/
?>
<table border="1">
<tr>
    <th>Roll</th>
    <th>Name </th>
    <th> Payment </th>
    <th> Actions </th>
</tr>
<?php 
foreach($data as $key=>$value){
?>
<tr>
        <td><?php echo $value['roll']; ?> </td>
        <td><?php echo $value['name']; ?> </td>
        <td><?php echo $value['amount']; ?> </td>
        <td> <a href="edit.php?id=<?php echo $value['roll']; ?>"> EDIT </a> || <a href="delete.php?id=<?php echo $value['roll']; ?>">DELETE</a>  </td>
</tr>
<?php
}
?>
</table>


