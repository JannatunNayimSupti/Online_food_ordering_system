<?php
    session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	
	//$con = mysqli_connect('localhost', 'root', '', 'webtech');
	//$sql = "select * from users where id= '{$name}'";
	//$result = mysqli_query($con, $sql);

	$id = $_POST['id'];

	$status = showProfile($id);

    echo $status;
	
	
?>