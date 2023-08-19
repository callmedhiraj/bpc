<table border="1">
<tr>
        <th> Values </th>
</tr> 
<?php
$arr = array("nepal", "japan", "china");
echo '<pre>';
print_r($arr);
echo '</pre>';
for($i = 0; $i < sizeof($arr) ; $i++){
?>
<tr>
        <td><?php echo $arr[$i]; ?> </td>
</tr>

<?php
}
?>
</table>