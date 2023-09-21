<?php
//load the functions
require_once('functions/database.php');
require_once('functions/office_functions.php');
//read the URL ID
$id = isset($_GET['id'])? $_GET['id']: '';
//call the function to fetch specific office details
$data = get_single_office($id);
/**echo '<pre>';
print_r($data);
echo'</pre>';
*
*/
//display the data in the form before loading
?>
<?php foreach($data as $office){ ?>
<form method="post" action="process/process_edit_office.php">
<div>
<label> Office Code </label>
<input type="text" name="officeCode" id="officeCode" placeholder="Enter the Office Code" value="<?php echo $office['officeCode']; ?>" />
</div>
<div>
<label>City</label>
<input value= "<?php echo $office['city']; ?>" type="text" name="city" id="city" placeholder="Enter the City" />
</div>
<div>
<label>Phone</label>
<input value= "<?php echo $office['phone']; ?>" type="text" name="phone" id="phone" placeholder="Enter the phone" />
</div>
<div>
<label>AddressLine1</label>
<textarea  name="addressline1" id="addressline1" placeholder="Enter the addressline1"><?php echo $office['addressLine1']; ?></textarea>
</div>
<div>
<label>AddressLine2</label>
<textarea  name="addressline2" id="addressline2" class="" placeholder="Enter the addressline2"><?php echo $office['addressLine2']; ?></textarea>
</div>
<div>
<label>State</label>
<input  value= "<?php echo $office['state']; ?>"type="text" name="State" id="State" placeholder="Enter the State" />
</div>

<div>
<label>Country</label>
<input value= "<?php echo $office['country']; ?>"type="text" name="Country" id="Country" placeholder="Enter the Country" />
</div>

<div>
<label>PostalCode</label>
<input value= "<?php echo $office['postalCode']; ?>"type="text" name="PostalCode" id="PostalCode" placeholder="Enter the PostalCode" />
</div>
<div>
<label>Territory</label>
<input value= "<?php echo $office['territory']; ?>"type="text" name="Territory" id="Territory" placeholder="Enter the Territory" />
</div>
<div>
<input type="submit" name="submit" id="submit" value="Edit Office" />
</div>
</form>
<?php } ?>