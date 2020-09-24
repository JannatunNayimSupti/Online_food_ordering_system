<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

//addItem
	

	if(isset($_POST['addItem'])){

		$i_picture 		= $_POST['i_picture'];
		$itemname 	= $_POST['i_name'];
		$i_price	= $_POST['i_price'];
		$i_detail	= $_POST['i_detail'];
		$i_category	= $_POST['i_category'];
		

		if(empty($itemname) || empty($i_price) || empty($i_picture)|| empty($i_category)||empty($i_detail)){
			header('location: ../views/menu.php?error=null_value');
		}else{

			$item = [
				'i_name'=> $itemname,
				'i_price'=> $i_price,
				'i_picture'=> $picture,
				'i_detail'=> $i_detail,
				'i_category'=> $i_category
				
			];

			$status = insertItem($item);

			if($status){
				header('location: ../views/itemlist.php?success=done');
			}else{
				header('location: ../views/menu.php?error=db_error');
			}
		}
	}

	
	if(isset($_POST['passChange'])){
		$id = $_SESSION['id'];
		$password =$_POST['pass'];
		$Cpassword =$_POST['newpass'];


		if(empty($id)||empty($password)||empty($Cpassword)){
			header('location: ../views/register.php?error=null_value');
		}
		else
		{
			$updatepass = [
                'password'=> $password,
                'id'=> $id
            ];
            if ($Cpassword == $password) {
            $status = updatePass($updatepass);
            if($status){
                //setcookie('pass', $_POST['newpass'], time()+3600, '/');
                header('location: ../views/dashBoard.php?success=done');
            }else{
                header('location: ../views/login.php?error=db_error');
            }            
        }
        else{
        	echo "error pass!!";
            
		}
        }
	}


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['editprofile'])){

		$username 	= $_POST['username'];
		$name 	= $_POST['name'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($name) || empty($email)){
			header('location: ../views/editProfile.php?error= null value');
		}else{

			$user = [
				'username'=> $username,
				'name'=> $name,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/profile.php?success=done');
			}else{
				header('location: ../views/editProfile.php?id={$id}');
			}
		}
	}
	if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/delete.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/delete.php?id={$id}');
			}
		}
	}
	if(isset($_POST['edititem'])){


	    $i_name 	= $_POST['i_name'];
		$i_price	= $_POST['i_price'];
		$i_detail	= $_POST['i_detail'];
		$id	        = $_POST['id'];


		if(empty($i_name) || empty($i_price) ||  empty($i_detail)){
			header('location: ../views/itemedit.php?error=null_value');
		}else{

			$items = [
				'i_name'=> $i_name,
				'i_price'=> $i_price,
				'i_detail'=> $i_detail,
				'id'      => $id
				
			];
			$status = itemupdate($items);

			if($status){
				header('location: ../views/itemlist.php?success=done');
			}else{
				header('location: ../views/itemedit.php?id={$id}');
			}
		}
	}
	if(isset($_POST['itemdelete'])){

		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/itemdelete.php?id={$id}');
		}else{

			$items = [
				
				'id'=> $id
			];

			$status = itemdelete($items);

			if($status){
				header('location: ../views/itemlist.php?success=done');
			}else{
				header('location: ../views/itemdelete.php?id={$id}');
			}
		}
	}
	if(isset($_POST['confirmorder'])){
		$id 		= $_POST['id'];

		if(empty($id)){
			header('location: ../views/confirmorder.php?o_id={$id}');
		}else{

			$orders = [
				'id'=> $id
			];

			$status = confirmorder($orders);

			if($status){
				header('location: ../views/order.php?success=done');
			}else{
				header('location: ../views/confirmorder.php?o_id={$id}');
			}
		}
	}
// if(isset($_POST['orderprepared'])){
// 		$id 		= $_POST['id'];

// 		if(empty($id)){
// 			header('location: ../views/orderprepared.php?id={$id}');
// 		}else{

// 			$orders = [
// 				'id'=> $id
// 			];

// 			$status = orderprepared($orders);

// 			if($status){
// 				header('location: ../views/order.php?success=done');
// 			}else{
// 				header('location: ../views/orderprepared.php?id={$id}');
// 			}
// 		}
// 	}
	if(isset($_POST['orderreject'])){

		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/orderreject.php?o_id={$id}');
		}else{

			$orders = [
				
				'id'=> $id
			];

			$status = orderreject($orders);

			if($status){
				header('location: ../views/order.php?success=done');
			}else{
				header('location: ../views/orderreject.php?o_id={$id}');
			}
		}
	}



	if(isset($_POST['picture'])){

		$id = $_SESSION['id'];
		$pic = '../img/'.$_FILES['pic']['name'];


		if(empty($id) || empty($pic)){
			header('location: ../views/picture.php?id={$id}');
		}else{

			$picture = [
				
				'id'=> $id,
				'pic'=> $pic
			];

			$status = uploadPicture($picture);

			if($status){
				header('location: ../views/profile.php?success=done');
			}else{
				header('location: ../views/picture.php?id={$id}');
			}
		}
	}
?>