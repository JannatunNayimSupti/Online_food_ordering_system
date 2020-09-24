<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$items = getOrderByID($_GET['id']);	
	}else{
		header('location: orderreject.php');
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
			<legend>Reject Order</legend>
			<table>
				
				<tr>
					<td></td>
					<td>
						<font size="3" color="green">Are you sure that you want to reject order!!</font><br>
						<input type="hidden" name="id" value="<?=$items['o_id']?>">
						<input type="submit" name="orderreject" value="Reject"> 
						<a href="order.php" >Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>