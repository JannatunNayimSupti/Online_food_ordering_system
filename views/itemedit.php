<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$items = getItemByID($_GET['id']);	
	}else{
		header('location: itemlist.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<form action="../php/userController.php" method="POST">
		<fieldset>

			<legend>Edit Item</legend>
			<table>
				<tr>
					<td>
				 <hr>
        <h4>Item Name</h4>
    
        <input type="text" id="i_name" name="i_name" value="<?=$items['i_name']?>" >
        <hr>
         <h4>Item Details</h4>
        <input type="text" id="i_detail" name="i_detail" value="<?=$items['i_detail']?>">
        <hr> <h4>Item Price</h4>
        <input type="text" name="i_price" id="i_price" value="<?=$items['i_price']?>" >
        <hr>
    	     <font size="3" color="red">Are you sure that you want to update the row!!</font><br>
			 <input type="hidden" name="id" value="<?=$items['i_id']?>">
			<input type="submit" name="edititem" value="Update"> 
			<a href="itemlist.php">Back</a>
	</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>