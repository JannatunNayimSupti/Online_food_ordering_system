<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$order = getOrderByID($_GET['id']);	
	}else{
		header('location: order.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Order</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>

			
					<td></td>
					<td>
						<font size="3" color="red">Are you sure that you want to update the row!!</font><br>
						<input type="hidden" name="id" value="<?=$order['o_id']?>">
						<input type="submit" name="confirmorder" value="Confirm"> 
						<a href="order.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>