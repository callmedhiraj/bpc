<?php
require_once('functions/database.php');
require_once('functions/office_functions.php');
$offices = get_all_offices();
/*echo '<pre>';
print_r($offices);
echo '</pre>';
*/
?>

<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Offcie Code</th>
        <th>City</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($offices as $office){ ?>
    <tr>
        <td><?php echo $office['officeCode'];?></td>
        <td class="center"><?php echo $office['city'];?></td>
        <td class="center"><?php echo $office['country'];?></td>
        <td class="center"><?php echo $office['phone'];?></td>
  
        
        <td class="center">
           
            <a class="btn btn-info" href="index.php?page=office&action=edit&id=<?php echo $office['officeCode']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="index.php?page=office&action=delete&id=<?php echo $office['officeCode']; ?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php } ?>
    
    </tbody>
    </table>