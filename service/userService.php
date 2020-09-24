<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function showProfile($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return $user;
		}else{
			return $user;
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into users values('', '{$user['username']}','{$user['password']}', '{$user['email']}', 'admin')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update user set username='{$user['username']}', name='{$user['name']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `users` WHERE id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getPasswordById($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function updatePass($pass){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		

		$sql = "update user set password='{$pass['password']}' where id={$pass['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function insertItem($item){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
	
		$sql= "INSERT INTO `items`  VALUES ('', '{$item['i_name']}', '{$item['i_detail']}', '{$item['i_price']}', '{$item['i_picture']}', '{$item['i_category']}', 'Available')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getAllitem(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from items";
		$result = mysqli_query($conn, $sql);
		$item = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($item, $row);
		}

		return $item;
	}
	function searchAllitem($itemName){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM items WHERE i_name like '%{$itemName}%'";
		$result = mysqli_query($conn, $sql);
		$items = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($items, $row);
		}

		return $items;
	}
	function getAllorder(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from orders";
		$result = mysqli_query($conn, $sql);
		$order = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($order, $row);
		}

		return $order;
	}
	function getItemByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from items where i_id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function itemupdate($items){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		

		$sql = "update items set i_name='{$items['i_name']}', i_detail='{$items['i_detail']}', i_price='{$items['i_price']}' where i_id={$items['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function itemdelete($items){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `items` WHERE i_id={$items['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getOrderByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from orders where o_id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function confirmorder($orders){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update orders set o_status='Accepted by restaurant' where o_id={$orders['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function uploadPicture($picture){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		
		$sql = "UPDATE `user` SET `dp`='{$picture['pic']}' WHERE id='{$picture['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	// function orderprepared($orders){
	// 	$conn = dbConnection();
	// 	if(!$conn){
	// 		echo "DB connection error";
	// 	}

	// 	$sql = "update orders set phase='prepared' where id={$orders['id']}";

	// 	if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }


	function updateCheckedIn($checkedIn){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE check_in_out SET status ='Checked out' WHERE id={$checkedIn['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function orderreject($orders){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update orders set o_status='Rejected By Restaurant' where o_id={$orders['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
		
	function getAllProfile($username){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='$username'";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}
	function gettotalbyorder(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT o_total FROM `orders` WHERE o_status = 'Served'";
		$result = mysqli_query($conn, $sql);
		$total = 0;
	    while($row = mysqli_fetch_assoc($result)){
	        $total += $row['o_total'];
	    }
	    return $total;
	}

	function getUsersByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}








?>