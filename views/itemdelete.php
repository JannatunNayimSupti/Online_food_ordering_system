<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$items = getitemByID($_GET['id']);	
	}else{
		header('location: itemdelete.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Item</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<hr>
        <h4>Item Name</h4>
    
        <input type="text" id="i_name" name="i_name" value="<?=$items['i_name']?>" >
       
        
        </hr>
         <h4>Item Details</h4>
    
        <input type="text" id="i_detail" name="i_detail" value="<?=$items['i_detail']?>">
       
        
        <hr> <h4>Item Price</h4>

        <input type="text" name="i_price" value="<?=$items['i_price']?>" >
        <hr>
         <hr> <h4>Item Category</h4>

        <input type="text" name="i_category"  value="<?=$items['i_category']?>">
        <hr>
				<tr>
					<td></td>
					<td>
						<font size="3" color="green">Are you sure that you want to delete the row!!</font><br>
						<input type="hidden" name="id" value="<?=$items['i_id']?>">
						<input type="submit" name="itemdelete" value="Confirm"> 
						<a href="itemlist.php" >Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>